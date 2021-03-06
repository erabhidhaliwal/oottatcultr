<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Follow;
use App\Member;
use App\Studio;
use App\Tattoo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $artists = Artist::where('verified', true)->get();

        return view('pages.artists', ['artists'=> $artists]);
    }

    /**
     * Display List of Tattoos
     *
     * @return View
     */
    public function tattoos()
    {
        $tattoos = Tattoo::where('approved', true)->get();

        return view('pages.tattoos', ['tattoos'=> $tattoos]);
    }

    /**
     * Display List of Studios
     *
     * @return View
     */
    public function studios()
    {
        $studios = Studio::where('approved', true)->get();

        return view('pages.studios', ['studios' => $studios]);
    }

    /**
     * Display search results of studios
     *
     * @return View
     */
    public function studiosSearch(Request $request)
    {
        $lat = $request->input('lat');
        $long = $request->input('long');

        $studios = Studio::select(
            DB::raw("*,
                  ( 6371 * acos( cos( radians(?) ) *
                    cos( radians( latitude ) )
                    * cos( radians( longitude ) - radians(?)
                    ) + sin( radians(?) ) *
                    sin( radians( latitude ) ) )
                  ) AS distance"))
            ->having("distance", "<", 25)
            ->orderBy("distance")
            ->setBindings([$lat, $long, $lat])
            ->where('approved',1)->with('artists')->get();

        //dd($studios);

        return $studios;
    }

    /**
     * Display Care Page
     *
     * @return View
     */
    public function care()
    {

        return view('pages.care', []);
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
        //if not an image url from facebook
        if (filter_var($user->avatar, FILTER_VALIDATE_URL) === FALSE) {
            $user->avatar = url('uploads/images/thumbnail/' . $user->avatar);
        }

        if(!$user->verified){
            session()->flash('warning', 'Please verify your email address!!');
        }

        //if user is artist, load artist profile view
        if ($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();
            $artist->cover = url('uploads/images/large/' . $artist->cover);

            if (filter_var($artist->user->avatar, FILTER_VALIDATE_URL) === FALSE) {
                $artist->user->avatar = url('uploads/images/thumbnail/' . $artist->user->avatar);
            }

            $isArtistProfile = true;
            return view('pages.artist', ['user' => $user, 'artist' => $artist, 'isArtistProfile'=> $isArtistProfile]);
        }
        elseif ($user->type == 'studio') {
            $studio = Studio::where('user_id', $user->id)->first();
            $studio->cover = url('uploads/images/large/' . $studio->cover);

            return view('pages.studio', ['user' => $user, 'studio' => $studio]);
        }
        elseif ($user->type == 'member') {
            $member = Member::where('user_id', $user->id)->first();

            return view('pages.member', ['user' => $user, 'member' => $member]);
        }
        else{
            return redirect('complete-profile')->flash('success', 'Welcome. Please complete your profile..');
        }

        return redirect('/');

    }


    /**
     * Display artist Studios
     *
     * @return View
     */
    public function artistStudio($id)
    {
        $artist = Artist::find($id);
        $user = Auth::user();

        $isArtistProfile = false;
        $isFollowing = false;

        if (Auth::check()) {
            if ($artist->user_id == Auth::User()->id) {
                $isArtistProfile = true;
            }
            if(Follow::where('artist_id', $artist->id)->where('user_id', $user->id)->count()){
                $isFollowing = true;
            }
        }

        //if not an image url from facebook
        if (filter_var($artist->user->avatar, FILTER_VALIDATE_URL) === FALSE) {
            $artist->user->avatar = url('uploads/images/thumbnail/' . $artist->user->avatar);
        }

        $artist->cover = url('uploads/images/large/' . $artist->cover);

        return view('pages.artist_studio', ['artist' => $artist, 'isArtistProfile' => $isArtistProfile, 'isFollowing' => $isFollowing]);
    }


    /**
     * Follow Artist
     *
     * @return View
     */
    public function Follow($id)
    {
        $user = Auth::user();

        $whom = User::find($id);

        if($whom){
            $follow = new Follow();
            $follow->user_id = $user->id;
            $follow->artist_id = $id;
            $follow->accepted = false;
            $follow->save();

            return redirect('artist/' . $artist->id)->with('success', 'Now you are following ' . $artist->user->firstname);
        }

        return redirect('artist/' . $artist->id);
    }

    /**
     * Send Follow Request
     *
     * @return View
     */
    public function UnfollowArtist($id)
    {
        $user = Auth::user();

        $artist = Artist::find($id);

        if($artist){
            $follow = Follow::where('artist_id', $id)->where('user_id', $user->id)->first();
            $follow->delete();

            return redirect('artist/' . $artist->id)->with('success', 'You Unfollowed ' . $artist->user->firstname);
        }

        return redirect('artist/' . $artist->id);
    }



    /**
     * Display Studio profile
     *
     * @return View
     */
    public function studio($id)
    {
        $studio = Studio::find($id);
        $tattoos = Tattoo::whereIn('artist_id', $studio->artists->lists('user_id'))->get();

        $studio->cover = url('uploads/images/large/' . $studio->cover);

        return view('pages.studio', ['studio' => $studio, 'tattoos'=>$tattoos]);
    }








}