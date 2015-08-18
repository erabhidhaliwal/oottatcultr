<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

        return view('pages.home', []);
    }

    /**
     * Display List of Tattoos
     *
     * @return View
     */
    public function tattoos()
    {

        return view('pages.home', []);
    }

    /**
     * Display List of Studios
     *
     * @return View
     */
    public function studios()
    {

        return view('pages.home', []);
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


}
