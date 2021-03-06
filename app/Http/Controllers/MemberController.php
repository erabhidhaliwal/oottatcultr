<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        $user = Auth::user();

        $isMemberProfile = false;
        $isFollowing = false;

        if (Auth::check()) {
            if ($member->user_id == Auth::User()->id) {
                $isMemberProfile = true;
            }
            if(Follow::where('artist_id', $member->id)->where('user_id', $user->id)->count()){
                $isFollowing = true;
            }
        }

        //if not an image url from facebook
        if (filter_var($member->user->avatar, FILTER_VALIDATE_URL) === FALSE) {
            $member->user->avatar = url('uploads/images/thumbnail/' . $member->user->avatar);
        }


        return view('pages.artist', ['artist' => $member, 'isArtistProfile' => $isMemberProfile, 'isFollowing' => $isFollowing]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
