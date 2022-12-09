<?php

namespace App\Http\Controllers;

use Request;

class SitesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function site($domain = "analyticaljs.com")
    {
        return view('sites.view')->with("domain", $domain);
    }
}
