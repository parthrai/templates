<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WelcomeController extends Controller
{
    //

    public function welcome(){

        $host = request()->getHttpHost();



        $headers = [

            'Accept'        => 'application/json',
        ];
        $client = new Client();
        $result = $client->post('http://cms2.test/api/test3', [
            'headers' => $headers,
            'form_params' => [

                'site' => 'site2.bhmlabs.ca',

            ]
        ]);

    //  return $result->getBody()->getContents();

        $response=  json_decode($result->getBody()->getContents(),true);

        $title = $response['site']['title'];
        $nav = $response['site']['nav'];
        $header = $response['site']['header'];


        return view('welcome')->with(['title'=>$title , 'nav'=> $nav , 'header' => $header]);
    }
}
