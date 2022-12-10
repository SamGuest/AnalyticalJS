<?php

namespace App\Http\Controllers\Api;

use Request;
use Carbon\Carbon;
use App\Models\Website;
use App\Models\Session;


class ApiFunctionController
{
    public function __construct()
    {

    }

    public function initDetails()
    {
        $ip = Request::ip();
        $referrer = $_SERVER['HTTP_REFERER'];
        $referrerDomain = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
        $website = Website::where("domain",$referrerDomain);

        if($website->get()->count() > 0){
            $failed = false;
            $session = Session::whereDate('created_at', Carbon::today())->where("website_id", $website->first()->id);
            if($session->get()->count() > 0){
                $session->first()->update(["pages" => $session->first()->pages+1]);
            } else {
                Session::create(["website_id" => $website->first()->id, "pages" => 1, "ip" => Request::getClientIp(true)]);
            }
        } else if(str_contains($ip, "192.168") && env("APP_ENV") == "Production") {
            $failed = true;
        } else if($website->get()->count() < 1) {
            $failed = false;
            $newWebsite = Website::create(["domain" => $referrerDomain]);
            Session::create(["website_id" => $newWebsite->id, "pages" => 1]);
        } else {
            $failed = true;
        }
        return [
            "userIP" => $ip, 
            "referrer" => $referrer,
            "referrerDomain" => $referrerDomain,
            "failed" => $failed
            ];
    }
}
