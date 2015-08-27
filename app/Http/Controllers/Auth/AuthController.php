<?php

namespace App\Http\Controllers\Auth;

use App\Artist;
use App\Member;
use App\Studio;
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

    protected $loginPath = '/user/login';

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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'contact' => 'required|min:10',
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
        if(!isset($data['type'])){
            $data['type'] = 'none';
        }
        elseif($data['type'] == 'member'){
            Validator::make($data, [
                'firstname' => 'required',
                'lastname' => 'required',
            ]);

            //create user
            $user =  User::create([
                'name' => $data['firstname'] . ' ' . $data['lastname'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'contact' => $data['contact'],
                'type' => $data['type'],
            ]);
            $member = new Member();
            $member->user_id = $user->id;
            $member->firstname = $data['firstname'];
            $member->lastname = $data['lastname'];
            if($member->save()){
                session()->flash('success', 'Member Profile Created Successfully!');
            }
            else{
                $user->delete();
                session()->flash('error','Error! Please try again..');
            }
        }
        elseif($data['type'] == 'artist'){
            Validator::make($data, [
                'firstname' => 'required',
                'lastname' => 'required',
            ]);

            //create user
            $user =  User::create([
                'name' => $data['firstname'] . ' ' . $data['lastname'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'contact' => $data['contact'],
                'type' => $data['type'],
            ]);

            $artist = new Artist();
            $artist->user_id = $user->id;
            $artist->firstname = $data['firstname'];
            $artist->lastname = $data['lastname'];
            if($artist->save()){
                session()->flash('success', 'Artist Profile Created Successfully!');
            }
            else{
                $user->delete();
                session()->flash('error','Error! Please try again..');
            }

        }
        elseif($data['type'] == 'studio'){
            Validator::make($data, [
                'name' => 'required',
                'title' => 'required',
            ]);

            //create user
            $user =  User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'contact' => $data['contact'],
                'type' => $data['type'],
            ]);

            $studio = new Studio();
            $studio->user_id = $user->id;
            $studio->name = $user->name;
            $studio->title = $data['title'];
            if($studio->save()){
                session()->flash('success', 'Studio Created Successfully!');
            }
            else{
                $user->delete();
                session()->flash('error','Error! Please try again..');
            }



        }

        //dd($data);

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
            Auth::login(User::where('email', '=', $user->email)->first());
            return redirect('profile')->with('success', 'Welcome ' . $user->name);;
        }
        else{
            echo "auth no attempt matched";
            $row = new User;
            $row->email = $user->email;
            $row->avatar = $user->avatar;
            $row->name = $user->name;
            //$row->firstname = $user->user['first_name'];
            //$row->lastname = $user->user['last_name'];
            $row->social = true;
            $row->active = true;
            $row->password = bcrypt(str_random(40));
            if($row->save()){
                Mail::send('emails.welcome', $row->toArray(), function($message) use ($row)
                {
                    $message->from('no-reply@tattoocultr.com', "Tattoo Cultr");
                    $message->subject("Welcome to Tattoo Cultr");
                    $message->to($row['email']);
                });

                return redirect('user/login/facebook')->with('success', 'Registration successful!! Please complete your profile');
            }
            else{
                return redirect('profile')->with('error', 'Error in Signing up. Please try again later..');
            }
        }
    }

}
