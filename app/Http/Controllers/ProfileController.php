<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Studio;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Input;


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

        $user->avatar = url('uploads/images/small/' . $user->avatar);

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
        if($user->type == 'member'){
            return redirect('complete-profile-member');
        }

        //if profile is complete the redirect to dashboard
        if($user->profileComplete){
            return redirect('profile');
        }


        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }

        $studios = Studio::all();

        return view('pages.completeProfileArtist', ['user' => $user, 'studios' => $studios]);
    }

    /**
     * Display the complete profile form
     *
     * @return View
     */
    public function completeProfileMember()
    {
        $user = Auth::user();

        //if profile is complete the redirect to dashboard
        if($user->profileComplete){
            return redirect('profile');
        }

        if($user->type == 'artist'){
            return redirect('complete-profile-artist');
        }

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }

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

        if($request->hasFile('avatar')) {
            //upload an image to the /img/tmp directory and return the filepath.
            $file = $request->file('avatar');
            $tmpFilePath = '/uploads/images/original/';
            $tmpFileName = 'profile-' . time() . '-' . $file->getClientOriginalName();

            //save original file
            $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
            $path = $tmpFilePath . $tmpFileName;

            //edit image
            $img = \Image::make($file);
            $img->backup();

            //$img->fit(1200, 480);
            //$img->save('uploads/images/large/'.$tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(360); //240*240
            $img->save('uploads/images/thumbnail/'.$tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(120); //100*100
            $img->save('uploads/images/small/'.$tmpFileName);

            //save image to DB
            $user->avatar = $tmpFileName;

        }

        $user->type = 'artist';
        $user->save();

        //if artist already creates, then update
        if(Artist::where('user_id', $user->id)->count()){
            $artist = Artist::where('user_id', $user->id)->first();
            $artist->experience = $request->input('experience');
            $artist->save();
        }
        else{
            //create new artist
            $artist = new Artist();
            $artist->user_id = $user->id;
            $artist->experience = $request->input('experience');
            $artist->save();
        }

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
            $artist->save();

        }

        //save studio
        if(!$request->input('studio')){

            $this->validate($request, [
                'studioName' => 'required|max:255',
                'studioContact' => 'required|max:22|min:10',
                'studioCity' => 'required',
                'studioCountry' => 'required',
                'studioLat' => 'required',
                'studioLong' => 'required',
            ]);

            $studio = new Studio();
            $studio->name = $request->input('studioName');
            $studio->contact = $request->input('studioContact');
            $studio->city = $request->input('studioCity');
            $studio->latitude = $request->input('studioLat');
            $studio->longitude = $request->input('studioLong');
            $studio->country = $request->input('studioCountry');
            $studio->save();

            $artist->studios()->attach($studio->id);
            $artist->save();

            $user->profileComplete = true;
            $user->save();
        }
        else{
            if(Studio::where('id', $request->input('studio'))->count()){
                $artist->studios()->attach($request->input('studio'));
                $user->profileComplete = true;
                $user->save();
            }
        }

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }

        $artist->cover = url('uploads/images/large/' . $artist->cover);

        return redirect('complete-profile-artist');
    }

    /**
     * Display the complete profile form
     *
     * @return View
     */
    public function completeProfileMemberSave(Request $request)
    {
        $user = Auth::user();

        $user->contact = $request->input('contact');
        $user->city = $request->input('city');
        $user->country = $request->input('country');

        if($request->hasFile('avatar')) {
            //upload an image to the /img/tmp directory and return the filepath.
            $file = $request->file('avatar');
            $tmpFilePath = '/uploads/images/original/';
            $tmpFileName = 'profile-' . time() . '-' . $file->getClientOriginalName();

            //save original file
            $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
            $path = $tmpFilePath . $tmpFileName;

            //edit image
            $img = \Image::make($file);
            $img->backup();

            //$img->fit(1200, 480);
            //$img->save('uploads/images/large/'.$tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(360); //240*240
            $img->save('uploads/images/thumbnail/'.$tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(120); //100*100
            $img->save('uploads/images/small/'.$tmpFileName);

            //save image to DB
            $user->avatar = $tmpFileName;

        }

        $user->type = 'member';
        $user->profileComplete = true;
        $user->save();

        return redirect('complete-profile-member');
    }


    /**
     * Display the user tattoos page
     *
     * @return View
     */
    public function tattoos()
    {
        $user = Auth::user();


        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }

        //if user is artist, load artist profile view
        if($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();
            $artist->cover = url('uploads/images/large/' . $artist->cover);

            return view('pages.profile.artist.tattoos', ['user' => $user, 'artist' => $artist]);
        }

        return view('pages.profile.member.tattoos', ['user'=>$user]);
    }

    /**
     * Display the user add tattoos page
     *
     * @return View
     */
    public function tattoosAdd()
    {
        $user = Auth::user();

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }

        $artists = Artist::all();

        //if user is artist, load artist profile view
        if($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();
            $artist->cover = url('uploads/images/large/' . $artist->cover);

            return view('pages.profile.artist.addtattoo', ['user' => $user, 'artist' => $artist, 'artists'=>$artists]);
        }

        return view('pages.profile.member.addtattoo', ['user'=>$user, 'artists'=>$artists]);
    }


    /**
     * Display the user tattoos page
     *
     * @return View
     */
    public function studios()
    {
        $user = Auth::user();

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }
        //if user is artist, load artist profile view
        if($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();

            $artist->cover = url('uploads/images/large/' . $artist->cover);

            return view('pages.profile.artist.studios', ['user' => $user, 'artist' => $artist]);
        }
        //member can't have studio. so redirect to profile
        return redirect('profile');
    }

    /**
     * Display the artist's followers
     *
     * @return View
     */
    public function followers()
    {
        $user = Auth::user();

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }
        //if user is artist, load artist profile view
        if($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();

            $artist->cover = url('uploads/images/large/' . $artist->cover);

            return view('pages.profile.artist.followers', ['user' => $user, 'artist' => $artist]);
        }
        //member can't have followers. so redirect to profile
        return redirect('profile');
    }

    /**
     * Display the artist's followers
     *
     * @return View
     */
    public function following()
    {
        $user = Auth::user();

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }
        //if user is artist, load artist profile view
        if($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();

            $artist->cover = url('uploads/images/large/' . $artist->cover);

            return view('pages.profile.artist.following', ['user' => $user, 'artist' => $artist]);
        }
        //member can't have followers. so redirect to profile
        return view('pages.profile.member.following', ['user'=>$user]);
    }


    /**
     * Display the artist's followers
     *
     * @return View
     */
    public function edit()
    {
        $user = Auth::user();

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }
        //if user is artist, load artist profile view
        if($user->type == 'artist') {
            $artist = Artist::where('user_id', $user->id)->first();
            $studios = Studio::all();
            $artist->cover = url('uploads/images/small/' . $artist->cover);

            return view('pages.profile.artist.edit', ['user' => $user, 'artist' => $artist, 'studios'=> $studios]);
        }
        //member can't have followers. so redirect to profile
        return view('pages.profile.member.edit', ['user' => $user]);
    }


    /**
     * Update user profile
     *
     * @return View
     */
    public function changeImg(Request $request)
    {
        $user = Auth::user();

        if($request->hasFile('avatar')) {
            //upload an image to the /img/tmp directory and return the filepath.
            $file = $request->file('avatar');
            $tmpFilePath = '/uploads/images/original/';
            $tmpFileName = 'profile-' . time() . '-' . $file->getClientOriginalName();

            //save original file
            $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
            $path = $tmpFilePath . $tmpFileName;

            //edit image
            $img = \Image::make($file);
            $img->backup();

            //$img->fit(1200, 480);
            //$img->save('uploads/images/large/'.$tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(360); //240*240
            $img->save('uploads/images/thumbnail/'.$tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(120); //100*100
            $img->save('uploads/images/small/'.$tmpFileName);

            //save image to DB
            $user->avatar = $tmpFileName;
            $user->save();
        }

        if(!$user->social){
            $user->avatar = url('uploads/images/small/' . $user->avatar);
        }

        return $user->avatar;
    }




}
