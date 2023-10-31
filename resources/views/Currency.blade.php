@extends('layout.layout')
@section('content')
    <div class="min-h-screen my-14 md:w-9/12 container mx-auto overflow-hidden">
        <div class=" text-center bg-background">
            <div class=" text-text">
                <div class="pl-3">
                    <h1 class="flex text-4xl">{{ $Category }} Currency</h1>
                    <div class="flex">
                        <form action={{ route('search', ['category' => $Category]) }} method="get">
                            <input type="text" placeholder="Filter by Name" name='search'
                                class="rounded-lg my-4 input input-bordered input-primary w-full max-w-xs" />
                        </form>
                    </div>
                </div>
                <table class="md:table-lg table-pin-rows table rounded-lg table-sm">
                    <thead class="text-white">
                        <tr>
                            <th></th>
                            <th class="md:text-lg">Name</th>
                            <th class="md:text-lg">Price </th>
                            <th class="hidden lg:block md:text-lg"> Base → Quote</th>
                            <th class="md:text-lg">Last 30 days</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $percentage_change = [];
                        @endphp
                        @foreach ($Currency as $i => $item)
                            @php
                                $close = $Category == 'Commodities' ? $item['value'] : $item['close'];
                                $referenceValue = end($close);
                                $currentValue = $close[0];
                                $percentage_change[] = sprintf('%+.2f%%', (($currentValue - $referenceValue) / $referenceValue) * 100);
                            @endphp

                            <tr class="hover">
                                <th>{{ $i + 1 }}</th>
                                <td>
                                    <a href={{ route('history', ['category' => $Category, 'symbol' => $item['id']]) }}
                                        class="hover:underline underline-offset-2">
                                        {{ $item['symbol'] }}
                                    </a>
                                </td>
                                <td>
                                    <a href={{ route('history', ['category' => $Category, 'symbol' => $item['id']]) }}>
                                        {{ round($currentValue, 4) }}
                                    </a>
                                </td>
                                <td class="hidden lg:block">
                                    <a href={{ route('history', ['category' => $Category, 'symbol' => $item['id']]) }}>
                                        {{ $Category == 'Stock' ? $item['currency'] . ' → ' . $item['exchange'] : $item['currency_base'] . ' → ' . $item['currency_quote'] }}
                                    </a>
                                </td>
                                <td class=" h-full">
                                    <div class="flex">
                                        <div>
                                            <canvas id="chart{{ $i }}" height="25" width="50"></canvas>
                                        </div>
                                        <div>
                                            <a href={{ route('history', ['category' => $Category, 'symbol' => $item['id']]) }}
                                                class="pl-1 {{ $percentage_change[$i][0] == '+' ? 'text-green-400' : 'text-red-400' }}">
                                                {{ $percentage_change[$i] }}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        const chartOptions = {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            tooltips: {
                enabled: false,
            },
            elements: {
                point: {
                    radius: 0
                },
            },
            scales: {
                xAxes: [{
                    gridLines: false,
                    scaleLabel: false,
                    ticks: {
                        display: false
                    },

                }],
                yAxes: [{
                    gridLines: false,
                    scaleLabel: false,
                    ticks: {
                        display: false,
                    },
                }]
            }
        };
        var datetime_array = @json($Currency->pluck('datetime')->flatten()->toArray());
        var close_array = @json($Currency->pluck('close')->flatten()->toArray());
        let counter = 0

        for (let i = 0; i < Math.ceil(datetime_array.length / 30); i++) {
            console.log(close_array.slice(counter, counter + 30))
            var ctx = document.getElementById('chart' + i.toString()).getContext('2d');
            var chart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: datetime_array.slice(counter, counter + 30),
                    datasets: [{
                        backgroundColor: "rgba(101, 116, 205, 0.1)",
                        borderColor: "rgba(101, 116, 205, 0.8)",
                        borderWidth: 2,
                        data: close_array.slice(counter, counter + 30).reverse(),
                    }, ],
                },
                options: chartOptions
            });
            counter += 30
        }
    </script>
@endsection
