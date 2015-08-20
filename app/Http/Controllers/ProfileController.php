<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the complete profile form
     *
     * @return View
     */
    public function completeProfile()
    {
        $user = Auth::user();

        //redirect if user is already selected their profile Type ie. 'member/artist/studio'

        if($user->type == 'member'){
            return redirect('complete-profile-member');
        }
        elseif($user->type == 'artist'){
            return redirect('complete-profile-artist');
        }
        elseif($user->type == 'studio'){
            return redirect('complete-profile-studio');
        }

        return view('pages.completeProfile', ['user' => $user]);
    }

    /**
     * Display the complete profile form
     *
     * @return View
     */
    public function completeProfileArtist()
    {
        $user = Auth::user();

        return view('pages.completeProfileArtist', ['user' => $user]);
    }

    /**
     * Display the complete profile form
     *
     * @return View
     */
    public function completeProfileMember()
    {
        $user = Auth::user();

        return view('pages.completeProfileMember', ['user' => $user]);
    }

    /**
     * Display the complete profile form
     *
     * @return View
     */
    public function completeProfileArtistSave(Request $request)
    {
        $user = Auth::user();

        $user->contact = $request->input('contact');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        //$user->avatar = $request->input('avatar');
        $user->save();



        return view('pages.completeProfileArtist', ['user' => $user]);
    }

    /**
     * Display the complete profile form
     *
     * @return View
     */
    public function completeProfileMemberSave(Request $request)
    {
        $user = Auth::user();

        return view('pages.completeProfileMember', ['user' => $user]);
    }

}
