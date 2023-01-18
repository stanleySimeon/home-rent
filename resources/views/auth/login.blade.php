@extends('layouts.app')

@section('content')
<div class="container w-full h-full px-32 flex flex-col justify-center items-center">
    <div class="w-full mb-4 text-[#15236c]">
        <h1 class="text-5xl font-bold">{{__('Login')}}</h1>
    </div>
    <form method="POST" action="{{ route('login') }}" class="w-full space-y-4">
        @csrf
        <div class="w-full">
            <input id="email" type="email" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="w-full">
            <input id="password" type="password" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="w-full flex items-center space-x-2">
            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <div class="w-full">
            <div class="w-full">
                <button type="submit" class="bg-[#15236c] px-8 py-2 text-[#fdfdfd] hover:bg-opacity-90">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    <!-- {{ __('Forgot Your Password?') }} -->
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection
