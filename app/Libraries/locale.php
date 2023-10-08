<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Countries;

class Locale 
{
    public function getUserCountryDetails(): array
    {

        // $ip = Request::ip();
        // $ip = '49.150.54.157'; //philippines
        $ip = '72.229.28.185'; // usa
        // $ip = '102.215.221.234'; //france reunion island
        $response = Http::get(config('services.apiip.api_endpoint').'/'.$ip,[
            'access_key' => config('services.apiip.access_key')
        ])->json();

        return [
            'country_name' => $response['country_name'],
            'country_code' => $response['country_code'],
            'country_flag' => $response['location']['country_flag']
        ];
    }
}