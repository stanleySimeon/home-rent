@extends('layouts.app')

@section('content')
<div class="container w-full h-full px-32 flex flex-col justify-center items-center">
    <div class="w-full mb-4 text-[#15236c]">
        <h1 class="text-5xl font-bold">{{__('Reset Password')}}</h1>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form class="w-full space-y-4" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="w-full">
            <label for="email" class="text-lg">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('email') is-invalid @enderror text-lg" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email" autofocus>
        </div>
        <button type="submit" class="w-full bg-[#15236c] px-8 py-2 text-[#fdfdfd] hover:bg-opacity-90">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>
</div>
@endsection
