@extends('home')
@section('content')
<div class="container w-full -z-10 px-0 py-2 bg-[#fdfdfd] overflow-x-hidden">
    <div class="row justify-center pt-4">
        <div class="col-md-11">
            <div class="">
                <div class="flex items-center space-x-2 text-[#134aa3] mb-3">
                    <h3 class="text-2xl">Edit Your Profile</h3>
                    <i class="fas fa-user-edit"></i>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="w-full flex space-x-8 mb-4" id="update_image">
                            <span class="image w-4/12 h-44 rounded-md bg-black relative">
                                @if (Auth::user()->avatar)
                                <img src="{{ URL::asset('/storage/'.Auth::user()->avatar) }}" alt="avatar" class="update_image object-cover w-96 h-full rounded-md">
                                @else
                                <img src="{{ URL::asset('/images/avatar.png') }}" alt="avatar" class="update_image w-full h-full rounded-md">
                                @endif
                                <label for="avatar" class="custom-file-upload w-full h-full absolute top-0 right-0 text-white">
                                    <i class="fas fa-camera ml-4 mt-2 z-20"></i>
                                    <input type="file" name="avatar" id="avatar" class="hidden">
                                </label>
                            </span>
                            <div class="w-9/12 flex flex-col space-y-3">
                                <input type="text" name="name" id="name" class="focus-none outline-none border-b text-lg py-2 text-gray-600" value="{{ Auth::user()->name }}">

                                <input type="email" name="email" id="email" class="focus-none outline-none border-b text-lg py-2 text-gray-600" value="{{ Auth::user()->email }}">

                                <input type="phone" name="phone" id="phone" class="focus-none outline-none border-b text-lg py-2 text-gray-600" placeholder="Phone" value="{{ Auth::user()->phone }}">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <div class="form-group flex flex-col space-y-1">
                                <label for="country" class="text-lg">Country</label>
                                <select name="country" id="country" class="focus-none outline-none border-b py-2 text-gray-600">
                                    <option value="{{ Auth::user()->country }}">{{ Auth::user()->country }}</option>

                                </select>
                            </div>
                            <div class="form-group flex flex-col space-y-1">
                                <label for="state" class="text-lg">State</label>
                                <select name="state" id="state" class="focus-none outline-none border-b py-2 text-gray-600" value="{{ Auth::user()->state }}">
                                    <option value="0">Select State</option>
                                </select>
                            </div>
                            <div class="form-group flex flex-col space-y-1">
                                <label for="city" class="text-lg">City</label>
                                <input type="text" name="city" id="city" class="focus-none outline-none border-b py-2 text-gray-600" value="{{ Auth::user()->city }}">
                            </div>
                            <div class="form-group flex flex-col space-y-1">
                                <label for="zip_code" class="text-lg">Zip code</label>
                                <input type="text" name="zip_code" id="zip_code" class="focus-none outline-none border-b py-2 text-gray-600" value="{{ Auth::user()->zip_code }}">
                            </div>
                        </div>
                        <button type="submit" class="px-12 py-2.5 bg-[#134aa3] text-white mt-4 hover:bg-[#0f4397]">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
