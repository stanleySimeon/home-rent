<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;
use App\Models\City;

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
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:10'],
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
            'country' => $data['country'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip_code' => $data['zip_code'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
            'password_confirmation' => Hash::make($data['password_confirmation']),
        ]);
    }

    public function showRegistrationForm(Request $request)
    {
        $countries = Country::all();
        return view('auth.register', compact('countries'));
    }

    public function getStates()
    {
        $country_id = request('country');

        $states = State::where('country_id', $country_id)->get();
        $option = '<option value="">-- Select State --</option>';
        foreach ($states as $state) {
            $option .= '<option value="' . $state->name . '">' . $state->name . '</option>';
        }
        return $option;
    }

    public function getCities()
    {
        $state_id = request('state');
        $cities = City::where('state_id', $state_id)->get();
        $option = '<option value="">-- Select City --</option>';
        foreach ($cities as $city) {
            $option .= '<option value="' . $city->name . '">' . $city->name . '</option>';
        }
        return $option;
    }

    public function getCountryCode()
    {
        $country_id = request('country');
        $country_code = Country::where('country_id', $country_id)->get();
        $option = '<option value="">Select Country Code</option>';
        foreach ($country_code as $code) {
            $option .= '<option value="' . $code->country_id . '">' . $code->country_id . '</option>';
        }
        return $option;
    }
}
