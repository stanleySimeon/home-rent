<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>iRent</title>
</head>

<body class="bg-[#fdfdfd]">
    <div class="w-full flex h-screen fixed">
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
                <li class="w-full flex items-baseline space-x-2">
                    <h1 class="text-2xl text-bold text-[#179fdf]">iRent</h1>
                    <span class="border-b border-bg-white w-full"></span>
                </li>
                @endguest
            </ul>
            <div class="w-full flex justify-between items-center px-8">
                <nav>
                    <ul>
                        @if(Route::has('house'))
                        <li>
                            <a href="{{ route('house') }}" class="text-[#ffffff] text-md font-thin hover:text-gray-400">{{__('ADD HOUSE')}}</a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container w-9/12 px-4 py-0 flex flex-col justify-center relative z-20">
            <div class="w-full px-4 flex justify-between items-center space-x-4 py-3 border-b border-gray-400 absolute top-0 left-0 right-0 mx-auto">
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
                        <span class="name_over text-lg text-[#134aa3]">
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
                        <div class="dropdown name_over">
                            <a class="dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu shadow-md">
                                <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Edit Profile</a></li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
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
            <div class="container w-full px-0 h-screen absolute left-0 right-0 top-20 overflow-y-auto">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
