<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(Request $request)
    {
        // return Validator::make($data, [
        //     'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'password_confirmation' => 'required|same:password',
        // ]);

        // $requestData = $data->except(['_token', 'password', 'password_confirmation']);
        // $avatarName = 'lv_' . rand() . '.' . $data->avatar->extension();
        // $data->avatar->move(public_path('storage/'), $avatarName);
        // $requestData['avatar'] = $avatarName;

        return Validator::make($request, [
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => 'required|same:password',
        ]);

        // let request the data from the form and store it in the database
        $requestData = $request->except(['_token', 'password', 'password_confirmation']);
        $avatarName = 'lv_' . rand() . '.' . $request->avatar->extension();
        $request->avatar->move(public_path('storage/'), $avatarName);
        $requestData['avatar'] = $avatarName;
        $requestData['name'] = $request->name;
        $requestData['email'] = $request->email;
        $requestData['password'] = Hash::make($request->password);
        $requestData['password_confirmation'] = Hash::make($request->password_confirmation);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    protected function create(Request $request)
    {
        $this->validator($request);
        return redirect()->route('login');
    }
    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
}
