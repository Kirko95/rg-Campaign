<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    protected function redirectTo() {

        $roles = Role::where('user_id', Auth()->user()->id)->first();
        
        if (Auth()->user()->is_admin == true){
            return '/dashboard';
        }elseif($roles->role == 'client') {
            return 'dashboard/client';
        }else {
            return 'dashboard/team';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if($user->role == 'admin')
        {
            return redirect('/dashboard');
        }
        elseif($user->role == 'client')
        {
            return redirect('/dashboard/client');
        }
        elseif($user->role == 'team')
        {
            return redirect('/dashboard/team');
        }
    }
}
