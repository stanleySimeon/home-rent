<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $profile = Auth::user();
        $countries = Country::all();
        $country_id = request('country');
        $states = State::where('country_id', $country_id)->get();
        return view('profile', compact('profile', 'countries', 'states'));
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

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::user()->id],
            'phone' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
        ]);

        $requestData = $request->except(['_token', '_method']);
        $user = User::find(Auth::user()->id);
        $user->update($requestData);

        if ($request->hasFile('avatar')) {
            $avatarName = 'lv_' . rand() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('storage/'), $avatarName);
            $requestData['avatar'] = $avatarName;
            $user->update($requestData);
        }

        return redirect()->route('home')->with('success', 'Profile updated successfully');
    }
}
