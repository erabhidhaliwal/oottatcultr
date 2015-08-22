<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    /**
     * Display Home page
     *
     * @return View
     */
    public function index()
    {

        return view('pages.home', []);
    }

    /**
     * Display List of artists
     *
     * @return View
     */
    public function artists()
    {

        return view('pages.artists', []);
    }

    /**
     * Display List of Tattoos
     *
     * @return View
     */
    public function tattoos()
    {

        return view('pages.tattoos', []);
    }

    /**
     * Display List of Studios
     *
     * @return View
     */
    public function studios()
    {

        return view('pages.studios', []);
    }

    /**
     * Display Care Page
     *
     * @return View
     */
    public function care()
    {

        return view('pages.home', []);
    }

    /**
     * Display tattoo-cultr Page
     *
     * @return View
     */
    public function tattooCultr()
    {

        return view('pages.home', []);
    }

    /**
     * Display User Profile Page
     *
     * @return View
     */
    public function profile()
    {
        $user = Auth::user();


        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }

        //if user is artist, load artist profile view
        if($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();
            $artist->cover = url('uploads/images/large/' . $artist->cover);

            return view('pages.profile.artist', ['user' => $user, 'artist' => $artist]);
        }

        return view('pages.profile.member', ['user'=>$user]);

    }


}
