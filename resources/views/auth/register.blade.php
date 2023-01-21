@extends('layouts.app')

@section('content')
<div class="container w-full h-full px-32 flex flex-col justify-center items-center">
    <div class="w-full mb-4 text-[#15236c]">
        <h1 class="text-5xl font-bold">{{__('Register')}}</h1>
    </div>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="w-full space-y-4">
        @csrf
        <div class="w-full">
            <input id="avatar" type="file" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required placeholder="Avatar">
            @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="w-full">
            <input id="name" type="text" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus required autocomplete="name" placeholder="Full Name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="w-full">
            <input id="email" type="email" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="w-full">
            <input id="password" type="password" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="w-full">
            <input id="password-confirm" type="password" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
        </div>
        <div class="w-full flex justify-end items-center">
            <button type="submit" class="bg-[#15236c] px-8 py-2 text-[#fdfdfd] hover:bg-opacity-90">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection
