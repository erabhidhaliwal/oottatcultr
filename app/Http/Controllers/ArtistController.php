<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
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
     * Display the specified artist.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
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

        return view('pages.artist', ['artist' => $artist, 'isArtistProfile' => $isArtistProfile, 'isFollowing' => $isFollowing]);
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


    /**
     * Update Artist Loaction
     *
     * @param  int  $id
     * @return Response
     */
    public function updateLocation(Request $request)
    {
        $res = array();
        $res['success'] = false;

        $user = Auth::user();

        $artist = Artist::where('user_id', $user->id)->first();
        $artist->latitude = $request->input('lat');
        $artist->longitude = $request->input('long');

        if($artist->save()){
            $res['success'] = true;
        }

        return $res;
    }

    /**
     * Update Artist Bio
     *
     * @param  int  $id
     * @return Response
     */
    public function updateBio(Request $request)
    {
        $res = array();
        $res['success'] = false;

        $user = Auth::user();

        $artist = Artist::where('user_id', $user->id)->first();
        $artist->bio = $request->input('bio');

        if($artist->save()){
            $res['success'] = true;
        }

        return $res;
    }

    /**
     * Update artist Cover
     *
     * @return View
     */
    public function updateCover(Request $request)
    {
        $user = Auth::user();

        $res = array();
        $res['success'] = false;

        $user = Auth::user();
        $artist = Artist::where('user_id', $user->id)->first();

        if($request->hasFile('cover')) {
            //upload an image to the /img/tmp directory and return the filepath.
            $file = $request->file('cover');
            $tmpFilePath = '/uploads/images/original/';
            $tmpFileName = 'cover-' . time() . '-' . $file->getClientOriginalName();

            //save original file
            $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
            $path = $tmpFilePath . $tmpFileName;

            //edit image
            $img = \Image::make($file);
            $img->backup();

            $img->fit(1200, 480);
            $img->save('uploads/images/large/'.$tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(360, 144); //360*144
            $img->save('uploads/images/thumbnail/'.$tmpFileName);

            //save image to DB
            $artist->cover = $tmpFileName;

            if($artist->save()){
                $res['success'] = true;
            }
        }
        return $res;
    }


}
