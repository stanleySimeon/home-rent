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
        <div class="container w-3/12 h-full bg-gradient-to-b from-[#021369] to-[#01122b]">
            <ul class="flex justify-between items-center text-white">
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
                        <div class="flex space-x-2">
                            <div class="bg-[#373737] rounded-full relative">
                                <img src="{{ Auth::user()->avatar }}" alt="avatar" class="w-14 h-14 rounded-full">
                                <span class="w-4 h-4 absolute left-8 right-0 ml-auto mr-auto -top-0 text-9xl z-10 bg-green-600 rounded-full">
                                </span>
                            </div>
                            <span class="flex flex-col justify-center">
                                <span class="text-xl">{{ Auth::user()->name }}</span>
                                <span class="text-[#179fdf]">You're logged in!</span>
                            </span>
                        </div>
                    </span>
                    <span class="cursor-pointer">
                        <span href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            <img src="{{ asset('images/logout.svg') }}" alt="logout" class="w-6 h-6">
                        </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </span>
                </li>
                @endguest
            </ul>
        </div>
        <div class="container w-9/12 p-0">

        </div>
    </div>
</body>

</html>
