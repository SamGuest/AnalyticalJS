<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PagesController extends Controller
{
    public function details()
    {
        return view('user.details');
    }
}
