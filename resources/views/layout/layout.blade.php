<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>pde</title>
</head>

<body class="">
    {{-- container --}}
    <div class="lg:flex flex-1 flex-row ">
        {{-- sidebar container --}}
        <div
            class="hidden lg:flex md:w-64 min-h-screen md:flex-col bg-primary border-r border-accent sticky h-screen top-0">
            <div class="flex flex-col flex-grow pt-7 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-4">
                    <div class="avatar">
                        <div class="w-12 ">
                            <a href={{ route('dashboard') }}>
                                <img src={{url('logo.png')}} />
                            </a>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <a class="text-sm font-bold text-text text-center hover:text-yellow-50"
                            href="{{ route('dashboard') }}">Price Data Exchange</a>
                    </div>
                </div>

                <div class="px-4 mt-6">
                    <hr class="border-secondary" />
                </div>
                {{-- items --}}
                <div class="flex flex-col flex-1 px-3 mt-6">
                    <div class="space-y-4 mb-12">
                        <nav class="flex-1 space-y-2">
                            <a href={{ route('dashboard') }} title=""
                                class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg group {{ Request::path() == 'Dashboard' || Request::path() == '/' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                <svg class="flex-shrink-0 w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Home
                            </a>
                            <nav class="space-y-2 mb-12">
                                <a href={{ route('category', ['category' => 'Fiat']) }} title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Category/Fiat' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Fiat Currency
                                </a>
                                <a href={{ route('category', ['category' => 'Crypto']) }} title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Category/Crypto' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Cryptocurrency
                                </a>
                                <a href={{ route('category', ['category' => 'Stock']) }} title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Category/Stock' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Stocks
                                </a>
                            </nav>
                        </nav>
                    </div>
                    {{-- socials resources --}}
                    <nav class="space-y-2 mb-12">
                        <h1 class="px-4 text-secondary text-sm"><small>RESOURCES</small></h1>
                        <a href={{ route('About') }} title=""
                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'About' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            About
                        </a>
                        <a href={{ route('Dumps') }} title=""
                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Dumps' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Data Dumps
                        </a>
                        <a href={{ route('FAQ') }} title=""
                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'FAQ' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            FAQ
                        </a>
                    </nav>
                    <nav class="flex-1 space-y-2 ">
                        <h1 class="px-4 text-secondary text-sm"><small>SOCIALS</small></h1>
                        <a href="https://github.com/EEarlll" title="" target="_blank"
                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Github
                        </a>
                        <a href="https://discordapp.com/users/349837652830191618" title="" target="_blank"
                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Discord
                        </a>
                        <a href="https://discordapp.com/users/349837652830191618" title="" target="_blank"
                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Code
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        {{-- mobile --}}
        <div class="drawer lg:hidden border border-b border-accent z-50">
            <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col bg-background">
                <!-- Navbar -->
                <div class="w-full navbar ">
                    <div class="flex-none lg:hidden text-text">
                        <label for="my-drawer-3" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1 px-2 mx-2 text-text">
                        <a class="text-text text-center" href="{{ route('dashboard') }}">Price Data Exchange</a>
                    </div>
                </div>
            </div>
            {{-- menu --}}
            <div class="drawer-side">
                <label for="my-drawer-3" class="drawer-overlay"></label>
                <ul class="menu w-64 min-h-full bg-primary">
                    <!-- Sidebar content here -->
                    <div class="flex flex-col pt-4 flex-grow overflow-y-auto backdrop-blur-3xl">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <div class="avatar">
                                <div class="w-9 mask mask-hexagon">
                                    <a href={{ route('dashboard') }}>
                                        <img
                                            src="https://plus.unsplash.com/premium_photo-1671308539073-ebf8985a6a11?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" />
                                    </a>
                                </div>
                            </div>
                            <div class="mx-auto">
                                <a class="text-text text-center" href="{{ route('dashboard') }}">Price Data
                                    Exchange</a>
                            </div>
                        </div>

                        <div class="px-4 mt-6">
                            <hr class="border-secondary" />
                        </div>
                        {{-- items --}}
                        <div class="flex flex-col flex-1 px-3 mt-6">
                            <div class="space-y-4 mb-12">
                                <nav class="flex-1 space-y-2">
                                    <a href={{ route('dashboard') }} title=""
                                        class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg group {{ Request::path() == 'Dashboard' || Request::path() == '/' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                        <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        Home
                                    </a>
                                    <nav class="space-y-2 mb-12">
                                        <a href={{ route('category', ['category' => 'Fiat']) }} title=""
                                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Category/Fiat' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                            <svg class="flex-shrink-0 w-5 h-5 mr-4 "
                                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            Fiat Currency
                                        </a>
                                        <a href={{ route('category', ['category' => 'Crypto']) }} title=""
                                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Category/Crypto' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }} ">
                                            <svg class="flex-shrink-0 w-5 h-5 mr-4 "
                                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            Cryptocurrency
                                        </a>
                                        <a href={{ route('category', ['category' => 'Stock']) }} title=""
                                            class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Category/Stock' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                            <svg class="flex-shrink-0 w-5 h-5 mr-4 "
                                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            Stocks
                                        </a>
                                    </nav>
                                </nav>
                            </div>
                            {{-- socials resources --}}
                            <nav class="space-y-2 mb-12">
                                <h1 class="px-4 text-secondary text-sm"><small>RESOURCES</small></h1>
                                <a href={{ route('About') }} title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'About' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    About
                                </a>
                                <a href={{ route('Dumps') }} title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'Dumps' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Data Dumps
                                </a>
                                <a href={{ route('FAQ') }} title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text {{ Request::path() == 'FAQ' ? 'border border-secondary bg-accent text-text' : 'text-secondary' }}">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    FAQ
                                </a>
                            </nav>
                            <nav class="flex-1 space-y-2 ">
                                <h1 class="px-4 text-secondary text-sm"><small>SOCIALS</small></h1>
                                <a href="https://github.com/EEarlll" title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Github
                                </a>
                                <a href="https://discordapp.com/users/349837652830191618" title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Discord
                                </a>
                                <a href="#" title=""
                                    class="flex items-center px-4 py-2.5 text-sm font-medium text-secondary rounded-lg group hover:text-text">
                                    <svg class="flex-shrink-0 w-5 h-5 mr-4 " xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Code
                                </a>
                            </nav>
                        </div>
                    </div>
                </ul>

            </div>
        </div>
        {{-- main page --}}
        <div class="flex md:flex-col flex-1 ">
            <main class="w-full bg-background">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
