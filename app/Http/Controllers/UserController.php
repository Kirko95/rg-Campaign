<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('image')->with('role')->where('is_admin', false)->orderBy('id', 'DESC')->get();

        return view('users.team', compact('users'));
    }

    public function create(Request $request)
    {
        $fullname = $request->get('fullname');
        $email = $request->get('email');
        $passport = $request->get('passport');
        $phone = $request->get('phone');
        $gender = $request->get('gender');
        $age = $request->get('age');
        $location = $request->get('location');
        $profile = $request->file('profile');
        $supervisor = $request->input('supervisor');
        $user_roles = $request->get('role');

        $filename = 'profile-photo-'.time().'.'.$profile->getClientOriginalExtension();

        $path = $profile->storeAs('profile', $filename, 'public');

        $character = explode(' ', trim($fullname));
        $date = Carbon::now();
        $password = ucfirst($character[0]).'@'.$date->year.'!';

        $user = User::create([
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'passport' => $passport,
            'gender' => $gender,
            'age' => $age,
            'town' => $location,
            'is_admin' => false,
            'password' => Hash::make($password)
        ]);

        $user->image()->create([
            'url' => $path
        ]);

        Role::create([
            'user_id' => $user->id,
            'role' => $user_roles
        ]);

        return redirect('/users');
    }
}
