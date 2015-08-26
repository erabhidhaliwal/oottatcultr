<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Validator;
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

    protected $loginPath = '/#login';

    protected $redirectPath = '/profile';



    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'firstname' => 'required|max:255',
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
        $user =  User::create([
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'email' => $data['email'],
                    'contact' => $data['contact'],
                    'password' => bcrypt($data['password']),
                ]);

        //do your role stuffs here

        //send verification mail to user
        //--------------------------------------------------------------------------------------------------------------
        //$data['verification_code']  = $user->verification_code;

        Mail::send('emails.welcome', $data, function($message) use ($data)
        {
            $message->from('no-reply@tattoocultr.com', "Tattoo Cultr");
            $message->subject("Welcome to Tattoo Cultr");
            $message->to($data['email']);
        });


        return $user;
    }



    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        //dd($user);

        if(User::where('email', $user->email)->where('social', true)->count()){
            //dd($user);
            Auth::login(User::where('email', '=', $user->email)->first());
            return redirect('profile');
        }
        else{
            echo "auth no attempt matched";
            $row = new User;
            $row->email = $user->email;
            $row->avatar = $user->avatar;
            $row->firstname = $user->user['first_name'];
            $row->lastname = $user->user['last_name'];
            $row->social = true;
            $row->password = bcrypt(str_random(40));
            if($row->save()){
                return redirect('profile');
            }
            else{
                return redirect('profile')->with('error', 'Error in Signing up. Please try again later..');
            }
        }
    }

}
