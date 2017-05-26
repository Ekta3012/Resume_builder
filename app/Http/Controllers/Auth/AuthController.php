<?php

namespace App\Http\Controllers\Auth;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function redirectLn()
    {
        // dd('hgjhg');
        return Socialite::driver('linkedin')->redirect();
    }

    protected function LnCallback()
    {
        $user = Socialite::driver('linkedin')->user();
        // dd($user);

        $authUser = $this->findOrCreateUser($user);
        // dd($authUser);
        $authUser->avatar = $user->avatar_original;
        $authUser->save();
        Auth::login($authUser, true);
        //return Redirect::to('/dashboard');
        return view('closeWindow');
    }

    protected function redirectFB()
    {
        return Socialite::driver('facebook')->redirect();
    }

    protected function FBCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user);
        $authUser->avatar = $user->avatar_original;
        $authUser->save();
        Auth::login($authUser, true);
        //return Redirect::to('/dashboard');
        return view('closeWindow');
    }

    protected function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    protected function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        //dd(substr_replace($user->avatar,"19",-2,0));

        $authUser = $this->findOrCreateUser($user);
        $authUser->avatar = substr_replace($user->avatar,"19",-2,0);
        $authUser->save();
        Auth::login($authUser, true);
        //return Redirect::to('/dashboard');
        return view('closeWindow');
    }

    private function findOrCreateUser($user)
    {
        $authUser = User::where('email', $user->email)->first();

        if ($authUser != null)
        {
            return $authUser;
        }

        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'password' => bcrypt($user->token)
        ]);
    }


}
