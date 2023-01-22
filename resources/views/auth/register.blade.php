@extends('layouts.app')

@section('content')
<div class="container w-full h-full px-28 flex flex-col justify-center items-center">
    <div class="w-full mb-4 text-[#15236c]">
        <h1 class="text-5xl font-bold">{{__('Register')}}</h1>
    </div>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="w-full space-y-4">
        @csrf
        <div class="w-full">
            <input type="file" name="avatar" id="avatar" class="form-control rounded-none">
        </div>
        <div class="w-full">
            <input id="name" type="text" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus required autocomplete="name" placeholder="Full Name" autofocus>
        </div>

        <div class="w-full">
            <input id="email" type="email" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
        </div>

        <div class="flex justify-center items-center space-x-4">
            <div class="w-full"">
            <select name=" country" id="country" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required>
                <option>--Select your country --</option>
                @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
                </select>
            </div>

            <div class="w-full">
                <select name="state" id="state" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required>
                </select>
            </div>
        </div>

        <div class="w-full">
            <input name="city" id="city" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" placeholder="City">
        </div>

        <div class="w-full">
            <input id="zip_code" type="zip_code" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" required autocomplete="zip_code" placeholder="Zip Code">
        </div>

        <div class="w-full">
            <input id="phone_number" type="phone_number" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="Phone">
        </div>

        <div class="w-full">
            <input id="password" type="password" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
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
