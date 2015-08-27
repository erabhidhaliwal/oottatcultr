<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Studio;
use App\Tattoo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TattooController extends Controller
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
     * Upload Tattoo
     *
     * @return View
     */
    public function uploadTattoo(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('tattoo')) {
            //upload an image to the /img/tmp directory and return the filepath.
            // dd($request);

            $file = $request->file('tattoo');
            $tmpFilePath = '/uploads/images/original/';
            $tmpFileName = 'tattoo-' . time() . '-' . $file->getClientOriginalName();

            //save original file
            $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
            $path = $tmpFilePath . $tmpFileName;

            //edit image
            $img = \Image::make($file);
            $img->backup();

            // reset image (return to backup state)
            $img->reset();
            $img->fit(360); //240*240
            $img->save('uploads/images/thumbnail/' . $tmpFileName);

            // reset image (return to backup state)
            $img->reset();
            $img->fit(120); //100*100
            $img->save('uploads/images/small/' . $tmpFileName);

            //save tattoo in DB
            $tattoo = new Tattoo();
            $tattoo->title = $request->input('title');
            $tattoo->url = $tmpFileName;
            $tattoo->description = $request->input('description');
            $tattoo->user_id = $user->id;
            $tattoo->approved = false;


            if($request->input('type') == 'member'){
               if($request->input('id') == $user->id){
                   $tattoo->approved = false; //member - self tattoos ll never be approved for public place, only visible to member page(always, no approval needed)
                   $tattoo->save();
               }
                return redirect('member/' . $request->input('id'))->with('success', "Successfully uploaded!");
            }
            elseif($request->input('type') == 'artist'){
                $artist = Artist::find($request->input('id'))->first();
                //if uploaded by self
                if($artist->user->id == $user->id){
                    $tattoo->approved = true;
                }
                $artist->tattoos()->save($tattoo);
                return redirect('artist/' . $request->input('id'))->with('success', "Successfully uploaded!");
            }
            elseif($request->input('type') == 'studio'){
                $studio = Studio::find($request->input('id'))->first();
                //if uploaded by self
                if($studio->user->id == $user->id){
                    $tattoo->approved = true;
                }
                $studio->tattoos()->save($tattoo);
                return redirect('studio/' . $request->input('id'))->with('success', "Successfully uploaded!");
            }
            else{
                session()->flash('error', "Error in uploading tattoo!! Please try again..");
            }
        }
        else{
            session()->flash('error', "Please select a file!!");
        }
        return redirect('/');
    }


    /**
     * Approve Tattoo
     *
     * @return View
     */
    public function approveTattoo($id)
    {
        $user = Auth::user();

        $artist = Artist::where('user_id', $user->id)->first();

        $tattoo = Tattoo::find($id);

        if($tattoo){
            if($tattoo->artist_id == $artist->id){
                $tattoo->approved = true;
                $tattoo->save();
                return redirect('artist/' . $artist->id)->with('success', 'Tattoo Approved Successfully');
            }
        }


        return redirect('artist/' . $artist->id);
    }

    /**
     * Approve Tattoo
     *
     * @return View
     */
    public function rejectTattoo($id)
    {
        $user = Auth::user();

        $artist = Artist::where('user_id', $user->id)->first();

        $tattoo = Tattoo::find($id);

        if($tattoo){
            if($tattoo->artist_id == $artist->id){
                $tattoo->delete();
                return redirect('artist/' . $artist->id)->with('success', 'Tattoo Deleted Successfully');
            }
        }


        return redirect('artist/' . $artist->id);
    }



}
