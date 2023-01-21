<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>iRent</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
</head>

<body class="bg-[#fdfdfd]">
    <div class="flex h-screen">
        <div class="container px-0 w-3/12 h-full space-y-4 bg-gradient-to-b from-[#021369] to-[#01122b] relative">
            <ul class="w-full px-8 pt-3 flex justify-between items-center text-white">
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
                <li class="w-full flex items-center">
                    <h1 class="text-2xl text-bold text-[#179fdf]">iRent</h1>
                </li>
                @endguest
            </ul>
            <div class="w-full flex justify-between items-center px-8">
                <a href="{{ ('') }}" class="text-[#ffffff] text-lg font-thin hover:text-gray-400">{{__('DASHBOARD')}}</a>
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
        <div class="container w-9/12 px-4 py-0 flex flex-col justify-center">
            <div class="w-full flex justify-between items-center space-x-4 py-3 border-b border-gray-400">
                <input type="search" class="w-5/12 h-12 px-4 flex items-center bg-gray-50 rounded-full border outline-none text-gray-500 text-lg" autofocus placeholder="Search...">
                <div class="w-4/12 flex justify-center items-center space-x-4">
                    <div class="w-full flex items-center space-x-2">
                        <span class="w-8 h-8 rounded-full">
                            @if (Auth::user()->avatar)
                            <img src="{{ URL::asset('/storage/'.Auth::user()->avatar) }}" alt="avatar" class="w-8 h-8 rounded-full">
                            @else
                            <img src="{{ URL::asset('/images/avatar.png') }}" alt="avatar" class="w-8 h-8 rounded-full">
                            @endif
                        </span>
                        <span class="text-lg text-[#134aa3]">
                            @php
                            $name = Auth::user()->name;
                            $name_parts = explode(" ", $name);
                            if (count($name_parts) > 2) {
                            $first_word = $name_parts[0];
                            $second_word = $name_parts[1];
                            $third_word = $name_parts[2];
                            $first_letter = substr($third_word, 0, 1);
                            echo $first_word . ' ' . ' ' . $second_word . ' ' . $first_letter . '.';
                            } else {
                            echo $name;
                            }
                            @endphp
                        </span>
                    </div>
                    <div class="w-5/12 flex items-baseline ">
                        <span class="flex flex-col justify-center items-center relative">
                            <span class="w-6 h-6 rounded-full flex items-center justify-center absolute">
                                <h1 class="text-[#e5773c] text-lg font-extrabold">7</h1>
                            </span>
                            <img src="{{ URL::asset('/images/cart.svg') }}" alt="cart" class="w-12 h-10">
                        </span>
                        <p class="text-[#0A1A72] font-bold text-lg">Cart</p>
                    </div>
                </div>
            </div>
            <div class="container w-full h-full"></div>
        </div>
    </div>
</body>

</html>
