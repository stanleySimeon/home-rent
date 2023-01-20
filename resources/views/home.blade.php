<!DOCTYPE html>
<html lang="en">
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
    <div class="flex h-screen">
        <div class="container px-0 w-4/12 h-full space-y-4 bg-gradient-to-b from-[#021369] to-[#01122b] relative">
            <ul class="w-full px-8 flex justify-between items-center text-white border-b border-gray-500 pb-4">
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
                <li class="w-full flex justify-between items-center mt-4">
                    <!-- show user auth avatar -->
                    <span class="w-full flex space-x-8 items-center">
                        <div class="flex space-x-4">
                            <span class="bg-[#373737] rounded-full">
                                <img src="{{ URL::asset('/storage/'.Auth::user()->avatar) }}" alt="avatar" class="w-12 h-12 rounded-full">
                            </span>
                            <span class="flex flex-col justify-center">
                                <span class="flex items-center space-x-2">
                                    <span class="text-lg">{{ Auth::user()->name }}</span>
                                </span>
                                <span class="text-[#179fdf]">You're logged in!</span>
                            </span>
                        </div>
                    </span>
                    <div class="flex justify-end items-baseline relative">
                        <span class="w-6 h-6  rounded-full flex items-center justify-center absolute left-0 top-1 right-1 text-[#f0831e] text-md font-bold">37</span>
                        <img src="{{ URL::asset('/images/cart.svg') }}" alt="cart" class="w-12 h-10">
                        <h1 class="text-lg">{{__('Cart')}}</h1>
                    </div>
                </li>
                @endguest
            </ul>
            <div class="w-full flex justify-between items-center px-8">
                <a href="" class="text-[#ffffff] text-lg font-thin hover:text-gray-400">{{__('DASHBOARD')}}</a>
                <span class="cursor-pointer">
                    <span href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                        <img src="{{ asset('images/logout.svg') }}" alt="logout" class="w-6 h-6">
                    </span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </span>
            </div>
        </div>
        <div class="container w-9/12 p-0">
        </div>
    </div>
</body>

</html>
