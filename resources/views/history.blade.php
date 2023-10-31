@extends('layout.layout')
@section('content')
    <div class=" bg-background h-screen">
        <section class="sm:py-16 lg:pt-20 lg:pb-36  h-screen flex ">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 flex md:w-9/12">
                <div class="w-full">
                    <div class="">
                        <div class="max-w-sm mx-auto sm:max-w-md md:max-w-full md:block hidden">
                            <ol class="flex">
                                <li><a class='hover:underline' href="">Dashboard </a> </li>
                                <span class="px-2"> > </span>
                                <li><a class='hover:underline' href="{{ route('category', ['category' => $Category]) }}">
                                        {{ $Category }}</a>
                                </li>
                                <span class="px-2"> > </span>
                                <li> {{ $Currency['symbol'] }} </li>
                            </ol>
                        </div>
                        <section class="text-gray-400 body-font">
                            <div class="md:pt-16 pb-3 pt-4">
                                <h1
                                    class="text-2xl font-bold leading-tight text-text sm:text-2xl sm:leading-tight lg:text-2xl lg:leading-tight font-pj pl-4">
                                    {{ $Currency['symbol'] }}
                                    <span
                                        class="pl-1 {{ $conf[0][0] == '+' ? 'text-green-400' : 'text-red-400' }}">{{ $conf[0] }}</span>
                                </h1>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col mb-12">
                                    <div class="h-[0.5px] bg-secondary rounded overflow-hidden">
                                        <div class="w-24 h-full "></div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="stats stats-vertical lg:stats-horizontal shadow">
                                            <div class="stat">
                                                <div class="stat-title">Currency</div>
                                                <div class="stat-value"> {{ round($Currency['close'][0], 4) }}</div>
                                                <div class="stat-desc">
                                                    1
                                                    {{ $Category == 'Stock' ? $Currency['currency'] . '→' . $Currency['exchange'] : $Currency['currency_base'] . '→' . $Currency['currency_quote'] }}
                                                </div>
                                            </div>
                                            <div class="stat">
                                                <div class="stat-title">Close</div>
                                                <div class="stat-value">{{ round($Currency['close'][0], 4) }}</div>
                                            </div>
                                            <div class="stat">
                                                <div class="stat-title">Open</div>
                                                <div class="stat-value">{{ round($Currency['open'][0], 4) }}</div>
                                            </div>
                                            <div class="stat">
                                                <div class="stat-title">Low</div>
                                                <div class="stat-value">{{ round($Currency['low'][0], 4) }}</div>
                                            </div>

                                            <div class="stat">
                                                <div class="stat-title">High</div>
                                                <div class="stat-value">{{ round($Currency['high'][0], 4) }}</div>
                                            </div>

                                            <div class="stat">
                                                <div class="stat-title">Last update</div>
                                                <div class="stat-value text-secondary">
                                                    {{ date('Y-m-d', strtotime($Currency['updated_at'])) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full bg-background">
                                    <div class="p-4 sm:mb-0 mb-6">
                                        <h1
                                            class="text-xl font-bold leading-tight text-text sm:text-xl sm:leading-tight lg:text-xl lg:leading-tight font-pj">
                                            Price History
                                        </h1>
                                        <div class="rounded-lg md:h-96 md:w-full h-64 overflow-hidden mt-4">
                                            <canvas id="chart" class="w-full h-full"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        const chartOptions = {
            maintainAspectRatio: false,
            legend: {
                display: true,
            },
            tooltips: {
                enabled: true,
            },

            scales: {
                xAxes: [{
                    gridLines: true,
                    scaleLabel: false,
                    ticks: {
                        display: true,
                        maxRotation: 0
                    },
                    gridLines: {
                        display: true,
                        color: "#282828"
                    },
                }],
                yAxes: [{
                    gridLines: true,
                    scaleLabel: false,
                    ticks: {
                        display: true,
                    },
                    gridLines: {
                        display: true,
                        color: "#282828"
                    },
                }]
            }
        };
        var datetime_array = @json($Currency['datetime']);
        var high_array = @json($Currency['high']);
        var low_array = @json($Currency['low']);
        var close_array = @json($Currency['close']);
        var open_array = @json($Currency['open']);

        let counter = 0
        console.log(datetime_array)
        var ctx = document.getElementById('chart').getContext('2d');
        var chart = new Chart(ctx, {
            type: "line",
            data: {
                labels: datetime_array.slice(counter, 30).reverse(),
                datasets: [{
                        label: 'high',
                        backgroundColor: "rgba(246, 109, 155, 0.1)",
                        borderColor: "rgba(246, 109, 155, 0.8)",
                        borderWidth: 2,
                        data: high_array.slice(counter, 30).reverse(),
                    },
                    {
                        label: 'close',
                        backgroundColor: "rgba(101, 116, 205, 0.1)",
                        borderColor: "rgba(101, 116, 205, 0.8)",
                        borderWidth: 2,
                        data: close_array.slice(counter, 30).reverse(),
                    },
                    {
                        label: 'open',
                        backgroundColor: "rgba(63, 153, 246, 0.1)",
                        borderColor: "rgba(63, 153, 246, 0.8)",
                        borderWidth: 2,
                        data: open_array.slice(counter, 30).reverse(),
                    },
                    {
                        label: 'low',
                        backgroundColor: "rgba(246, 153, 63, 0.1)",
                        borderColor: "rgba(246, 153, 63, 0.8)",
                        borderWidth: 2,
                        data: low_array.slice(counter, 30).reverse(),
                    },

                ],
            },
            options: chartOptions
        });
        counter += 30
    </script>
@endsection
