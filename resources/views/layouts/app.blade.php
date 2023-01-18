<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HomeRent</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
</head>

<body class="bg-[#fdfdfd]">
    <div id="app" class="container-fluid p-0 md:flex">
        <nav class="md:p-0 navbar md:w-6/12 md:h-screen navbar-expand-md navbar-white bg-black shadow-sm relative">
            <img src="{{URL::asset('/images/background.AVIF')}}" alt="logo" class="align-text-top hidden md:flex object-cover h-full">
            <div class="container md:bg-black md:z-10 md:h-full md:absolute md:flex md:flex-col md:py-40 md:opacity-90">
                <a class="md:hidden navbar-brand" href="{{ url('/') }}">
                    <img src="{{URL::asset('/images/home-o.svg')}}" alt="logo" class="w-12">
                </a>
                <div class="w-full hidden md:flex flex-col items-center mt-4">
                    <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
                    <svg class="w-60" viewBox="0 0 2377 1259" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                        <path d="M980.461,466.489l313.417,-349.089l900.713,698.179l-290.921,-0l-2.561,404.559" style="fill: none; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-1"></path>
                        <g>
                            <path d="M350.86,1175.03l-0,-1168.08l328.707,0l0,1125.63" style="fill: none; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-2"></path>
                            <path d="M701.743,1130.72l0,-943.681l278.79,-0l-0,938.266" style="fill: none; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-3"></path>
                            <path d="M6.944,1246.65c0,-0 683.623,-178.348 1268.27,-102.046c991.678,129.425 884.751,127.175 1094.44,69.974" style="fill-opacity: 0; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-4"></path>
                        </g>
                        <g>
                            <rect x="1258.88" y="482.303" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-5"></rect>
                            <rect x="1258.88" y="573.952" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-6"></rect>
                            <rect x="1365.88" y="482.303" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-7"></rect>
                            <rect x="1365.88" y="573.952" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-8"></rect>
                        </g>
                        <g>
                            <rect x="743.164" y="255.567" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-9"></rect>
                            <rect x="743.164" y="347.216" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-10"></rect>
                            <rect x="850.162" y="255.567" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-11"></rect>
                            <rect x="850.162" y="347.216" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-12"></rect>
                        </g>
                        <g>
                            <rect x="405.109" y="106.353" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); fill-opacity: 0.05; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-13"></rect>
                            <rect x="405.109" y="209.349" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-14"></rect>
                            <rect x="525.355" y="106.353" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-15"></rect>
                            <rect x="525.355" y="209.349" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-16"></rect>
                        </g>
                        <g>
                            <rect x="405.109" y="370.428" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); fill-opacity: 0.03; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-17"></rect>
                            <rect x="405.109" y="473.424" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-18"></rect>
                            <rect x="525.355" y="370.428" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-19"></rect>
                            <rect x="525.355" y="473.424" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-20"></rect>
                        </g>
                        <g>
                            <rect x="405.109" y="627.805" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); fill-opacity: 0.09; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-21"></rect>
                            <rect x="405.109" y="730.802" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-22"></rect>
                            <rect x="525.355" y="627.805" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-23"></rect>
                            <rect x="525.355" y="730.802" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-24"></rect>
                        </g>
                        <g>
                            <rect x="405.109" y="887.933" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-25"></rect>
                            <rect x="405.109" y="990.93" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-26"></rect>
                            <rect x="525.355" y="887.933" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-27"></rect>
                            <rect x="525.355" y="990.93" width="99.963" height="80.593" style="fill: rgb(255, 255, 255); fill-opacity: 0.08; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-28"></rect>
                        </g>
                        <g>
                            <rect x="743.164" y="482.303" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); fill-opacity: 0.12; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-29"></rect>
                            <rect x="743.164" y="573.952" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-30"></rect>
                            <rect x="850.162" y="482.303" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-31"></rect>
                            <rect x="850.162" y="573.952" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-32"></rect>
                        </g>
                        <g>
                            <rect x="743.164" y="717.851" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-33"></rect>
                            <rect x="743.164" y="809.501" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-34"></rect>
                            <rect x="850.162" y="717.851" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-35"></rect>
                            <rect x="850.162" y="809.501" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); fill-opacity: 0.11; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-36"></rect>
                        </g>
                        <g>
                            <rect x="743.164" y="956.508" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-37"></rect>
                            <rect x="743.164" y="1048.16" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-38"></rect>
                            <rect x="850.162" y="956.508" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-39"></rect>
                            <rect x="850.162" y="1048.16" width="88.95" height="71.714" style="fill: rgb(255, 255, 255); fill-opacity: 0.03; stroke: rgb(23, 159, 223); stroke-width: 13.89px;" class="svg-elem-40"></rect>
                        </g>
                    </svg>
                    <span class="flex flex-col items-center space-y-2 my-16">
                        <h1 class="text-5xl text-white font-bold text"><span class="text-[#179fdf]">i</span>Rent</h1>
                        <p class="text-gray-400 font-thin text-md uppercase">Find your home. Live your story.</p>
                    </span>
                    <ul class="w-4/12 flex space-x-4 justify-center items-center">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="">
                            <a href="{{ route('login') }}">
                                <button class="w-full px-10 py-2 text-[#ffffff] bg-[#1650ab] hover:bg-[#134aa3]">{{ __('Login') }}</button>
                            </a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="">
                            <a href="{{ route('register') }}">
                                <button class="w-full px-8 py-2 border border-[#ffffff] text-[#179fdf] hover:text-[#134aa3]">{{ __('Register') }}</button>
                            </a>
                        </li>
                        @endif
                        @endguest
                    </ul>
                </div>
                <button class="md:hidden navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="md:hidden collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="md:hidden navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4 md:py-0 md:w-6/12">
            @yield('content')
        </main>
    </div>
</body>

</html>
