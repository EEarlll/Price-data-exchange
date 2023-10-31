@extends('layout.layout')

@section('content')
    <div class=" h-screen" id='content'>
        <div class=" bottom-0 right-0 overflow-hidden lg:inset-y-0">
            <img class="w-auto h-full" src="" alt="" />
        </div>
        <section class="sm:py-16 lg:pt-20 lg:pb-36  h-screen flex ">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl flex ">
                <div class="grid grid-cols-1 gap-y-8 lg:items-center lg:grid-cols-2 sm:gap-y-20 xl:grid-cols-5 ">
                    <div class="text-center xl:col-span-2 lg:text-left md:px-16 lg:px-0 ">
                        <div class="max-w-sm mx-auto sm:max-w-md md:max-w-full">
                            <h1 data-value="PDE - Price Data Exchange"
                                class="text-4xl font-bold leading-tight text-text sm:text-5xl sm:leading-tight lg:text-6xl lg:leading-tight font-pj pt-24">
                                PDE - Price Data Exchange</h1>

                            <div class="mt-8 lg:mt-12 lg:flex lg:items-center">

                                <p class="mt-4 text-lg text-text lg:mt-0 lg:ml-4 font-pj">Unlock Insights, Make Informed
                                    Decisions.</p>
                            </div>
                        </div>
                        <div class="max-w-sm mx-auto sm:max-w-md md:max-w-full">
                            <div class="mt-8 lg:flex lg:items-center">
                                <p class="mt-4 text-lg text-text lg:mt-0 lg:ml-4 font-pj">At PDE, we bring you an exclusive
                                    repository of historical data for <span class="font-bold">fiats</span>, <span
                                        class="font-bold">stocks</span>, and <span
                                        class="font-bold">cryptocurrencies</span>. Our accuracy and
                                    reliability are your confidence indicators, helping you navigate the financial landscape
                                    with precision.

                                    Join PDE today to harness the power of historical data and gain the confidence you need
                                    for successful financial decision-making.</p>
                            </div>
                        </div>

                        <div class="mt-8 sm:flex sm:items-center sm:justify-center lg:justify-start sm:space-x-5 lg:mt-12">
                            <a href={{ route('FAQ') }} title=""
                                class="inline-flex items-center px-8 py-3 text-lg font-bold text-text transition-all duration-200 bg-accent border border-secondary rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 font-pj justif-center hover:bg-gray-600"
                                role="button">
                                FAQ
                            </a>
                            <a href={{ route('About') }} title=""
                                class="inline-flex items-center px-8 py-3 text-lg font-bold text-text transition-all duration-200 bg-accent border border-secondary rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 font-pj justif-center hover:bg-gray-600"
                                role="button">
                                About
                            </a>
                        </div>
                    </div>
                    <div class="xl:col-span-3 hidden md:block">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.globe.min.js"></script>
    <script>
        VANTA.GLOBE({
            el: "#content",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x282828,
            size: 0.80,
            backgroundColor: 0x0
        })
    </script>
@endsection
