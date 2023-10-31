@extends('layout.layout')
@section('content')
    <div>
        <section class="py-14 overflow-hidden max-w-2xl mx-auto">
            <div class="px-4 mx-auto">
                <div class="text-center">
                    <h1 class="font-heading text-3xl xs:text-6xl md:text-5xl font-bold  mb-12">
                        Data Dumps
                    </h1>
                </div>
                <div class="px-4">
                    <div class="">
                        <p class="text-lg  mb-6">Our data dump section allows you to access raw data in a structured format.
                            We provide data in JSON formats for easy integration into your own applications or
                            analysis tools. Please select the data type you are interested in:
                        </p>
                    </div>
                </div>
                <div class="px-4">
                    <div class="">
                        <p class="text-lg pb-12">
                            These data files are updated regularly, and you can use them for your research, analysis, or
                            development projects. If you require specific data or have any special requests, please contact
                            us, and we'll be happy to assist you.</p>
                        <p class="text-2xl font-bold  mb-10">Download</p>
                        <ul class="flex flex-col gap-5 ">
                            <li class="flex flex-col">
                                <h1 class="font-semibold text-xl pb-3">Fiat Currencies</h1>
                                <a href={{ url('/export/Fiat/json') }} class="link link-info">JSON Download</a>
                            </li>
                            <li class="flex flex-col">
                                <h1 class="font-semibold text-xl pb-3">Cryptocurrency</h1>

                                <a href={{ url('/export/Crypto/json') }} class="link link-info">JSON Download</a>
                            </li>
                            <li class="flex flex-col">
                                <h1 class="font-semibold text-xl pb-3">Stocks</h1>

                                <a href={{ url('/export/Stock/json') }} class="link link-info">JSON Download</a>
                            </li>
                        </ul>

                    </div>
                </div>
        </section>
    </div>
@endsection
