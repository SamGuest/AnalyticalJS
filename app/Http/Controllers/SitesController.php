<?php

namespace App\Http\Controllers;

use Request;
use Carbon\Carbon;
use App\Models\Website;

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
        $website = Website::where("domain",$domain)->with("days");
        if($website->count() > 0){
            $days = array();
            for ($i = 0; $i < 24; $i++) {
                $combined = array();
                $hour = Carbon::today()->subHour($i);
                $pages = $website->first()->days()->whereDate('created_at',  $hour)->sum("pages");
                $sessions = $website->first()->days()->whereDate('created_at',  $hour)->count();
                $days[$i] = [
                    "hour" => $i,
                    "sessions" => $sessions,
                    "pages" => $pages
                ];
            }
            return view('sites.view')->with("website", $website->first())->with("daily", $days);
        } else {
            return view('sites.notfound')->with("domain", $domain);
        }
    }
}
