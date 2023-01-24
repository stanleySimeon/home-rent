@extends('home')
@section('content')
<div class="container w-full -z-10 px-0 py-2 bg-[#fdfdfd] overflow-x-hidden">
    <div class="row justify-center pt-4">
        <div class="col-md-11">
            <div class="">
                <div class="bg-[#15236c] shadow-md rounded py-2 flex justify-center items-center space-x-2 text-[#ffffff] mb-8">
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
                            <span class="image w-4/12 h-98 relative">
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
                            <div class="w-8/12 flex flex-col space-y-3">
                                <div class="form-group flex flex-col space-y-1">
                                    <label for="Name" class="text-lg">Full Name</label>
                                    <input type="text" name="name" id="name" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group flex flex-col space-y-1">
                                    <label for="email" class="text-lg">Email</label>
                                    <input type="email" name="email" id="email" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="form-group flex flex-col space-y-1">
                                    <label for="phone" class="text-lg">Phone</label>
                                    <input type="phone" name="phone" id="phone" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none" placeholder="Phone" value="{{ Auth::user()->phone_number }}">
                                </div>
                                <div class="flex flex-col space-y-3">
                                    <div class="form-group flex flex-col space-y-1">
                                        <label for="country" class="text-lg">Country</label>
                                        <select name="country" id="country" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none">
                                            <option value="{{ Auth::user()->country }}">{{ Auth::user()->country }}</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="text-lg">Address</label>
                                        <textarea name="address" id="address" cols="30" rows="1" class="w-full py-2 border-b border-[#179fdf] bg-transparent outline-none">{{ Auth::user()->address }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="rounded px-12 py-2.5 bg-[#15236c] text-white text-lg mt-4 hover:bg-[#15336c]">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
