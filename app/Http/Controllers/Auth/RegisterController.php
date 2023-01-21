<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => 'required|same:password',
        ]);
    }

    protected function create(array $data)
    {
        $data = new Request($data);
        return User::create([
            $requestData = $data->except(['_token']),
            $avatarName = 'lv_' . rand() . '.' . $data->avatar->extension(),
            $data->avatar->move(public_path('storage/'), $avatarName),
            $requestData['avatar'] = $avatarName,
            'avatar' => $requestData['avatar'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'password_confirmation' => Hash::make($data['password_confirmation']),
        ]);
    }
}
