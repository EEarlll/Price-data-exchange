@extends('layout.layout')
@section('content')
    <div>

        <section class="py-24 lg:pb-36  overflow-hidden">
            <div class="container px-4 mx-auto max-w-7xl">
                <div class="max-w-2xl text-center mx-auto mb-24">
                    <h2 class="font-extrabold mb-4 text-6xl">
                        Frequently Asked Questions</h2>
                    <p class="text-xl">Still
                        have doubts? Here’s everything we think you should know.</p>
                </div>
                <div class="flex flex-wrap -m-8">
                    <div class="w-full md:w-1/2 p-8">
                        <h4 class="mb-4 font-extrabold">
                            What is Price Data Exchange (PDE)?</h4>
                        <p class="">Price Data Exchange (PDE) is a web application designed to provide historical data
                            on fiat currencies, cryptocurrencies, and stocks, along with confidence indicators. It's built
                            for practicing Laravel PHP and MySQL.</p>
                    </div>
                    <div class="w-full md:w-1/2 p-8">
                        <h4 class="mb-4 font-extrabold">
                            How can I access historical data on PDE?</h4>
                        <p class="">You can access historical data on PDE by selecting the asset type (fiat,
                            cryptocurrency, or stock) and choosing a specific currency. PDE will then
                            provide you with detailed historical price information.</p>
                    </div>
                    <div class="w-full md:w-1/2 p-8">
                        <h4 class="mb-4 font-extrabold">
                            What are confidence indicators, and how do they work?</h4>
                        <p class="">Confidence indicators are tools that provide insights into market sentiment. They
                            are designed to help you make more informed trading decisions by analyzing market behavior. PDE
                            offers these indicators to enhance your understanding of market dynamics.</p>
                    </div>
                    <div class="w-full md:w-1/2 p-8">
                        <h4 class="mb-4 font-extrabold">Where does PDE source its data from?</h4>
                        <p class="">PDE sources its data from the TwelveData API, a trusted provider of financial
                            market information. This ensures the accuracy and reliability of the data we offer.
                        </p>
                    </div>
                    <div class="w-full md:w-1/2 p-8">
                        <h4 class="mb-4 font-extrabold">Is PDE accessible on mobile devices?</h4>
                        <p class="">PDE is currently a free platform. We may introduce premium features in the future,
                            but our commitment to providing accessible financial data will remain.
                        </p>
                    </div>
                    <div class="w-full md:w-1/2 p-8">
                        <h4 class="mb-4 font-extrabold">How often is the data updated on PDE?</h4>
                        <p class="">The data on PDE is updated regularly to provide you with the most up-to-date
                            information. The frequency of updates may vary depending on the asset type.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
