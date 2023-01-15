<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jipange</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/tailwind.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- ====== Navbar Section Start -->
    <header x-data="{
        navbarOpen: false,
    }" class="absolute top-0 left-0 z-50 w-full">
        <div class="container mx-auto">
            <div class="relative flex items-center justify-between -mx-4">
                <div class="max-w-full px-4 w-60">
                    <a href="javascript:void(0)" class="block w-full py-5">
                        <h2 class="font-semibold"> JIPANGE</h2>
                    </a>
                </div>
                <div class="flex items-center justify-between w-full px-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                            id="navbarToggler"
                            class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        </button>
                        <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                            class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                            <ul class="blcok lg:flex">

                            </ul>
                        </nav>
                    </div>
                    <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                        @auth
                            <a href="{{ route('dashboard') }}"
                            class="py-3 text-base font-medium text-white rounded-lg bg-primary px-7 hover:bg-opacity-90">
                            Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="py-3 text-base font-medium px-7 text-dark hover:text-primary">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="py-3 text-base font-medium text-white rounded-lg bg-primary px-7 hover:bg-opacity-90">
                                    Sign Up
                                </a>
                            @endif
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <div class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 lg:w-5/12">
                    <div class="hero-content">
                        <h1
                            class="mb-3 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px]">
                            Jipange <br />
                            To Do List <br />
                            with Laravel
                        </h1>
                        <p class="mb-8 max-w-[480px] text-base text-body-color">
                            When you are overwhelmed by the amount of work you have on plate, stop and rethink
                        </p>
                        <ul class="flex flex-wrap items-center">
                            <li>
                                <a href="javascript:void(0)"
                                    class="inline-flex items-center justify-center px-6 py-4 text-base font-normal text-center text-white rounded-lg bg-primary hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                                    Get Started
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="inline-flex items-center justify-center px-6 py-4 text-base font-normal text-center text-body-color hover:text-primary sm:px-10 lg:px-8 xl:px-10">
                                    <span class="mr-2">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="11" fill="#3056D3" />
                                            <rect x="6.90906" y="13.3636" width="8.18182" height="1.63636"
                                                fill="white" />
                                            <rect x="10.1818" y="6" width="1.63636" height="4.09091"
                                                fill="white" />
                                            <path d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z" fill="white" />
                                        </svg>
                                    </span>
                                    Download App
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="hidden px-4 lg:block lg:w-1/12"></div>
                <div class="w-full px-4 lg:w-6/12">
                    <div class="lg:ml-auto lg:text-right">
                        <div class="relative z-10 inline-block pt-11 lg:pt-0">
                            <img src="hero/hero-image-01.png" alt="hero" class="max-w-full lg:ml-auto" />
                            <span class="absolute -left-8 -bottom-8 z-[-1]">
                                <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== Hero Section End -->
</body>

</html>
