<?php

namespace App\Http\Controllers\Api;

use Request;

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
        
        $failed = false;
        return [
            "userIP" => $ip, 
            "referrer" => $referrer,
            "referrerDomain" => $referrerDomain,
            "failed" => $failed
            ];
    }
}
