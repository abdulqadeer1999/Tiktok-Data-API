<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;



class TikTokVideoController extends Controller
{



    // public function getvideos(){

    //     ini_set('max_execution_time', 180);
    //     $response = Http::get('https://www.tiktok.com/@davidjoy780');
    //     $jsonData = $response->json();
    //     return $jsonData;
    // }

    public function fetchVideos()
    {
        $last_id = Http::timeout(300)->get('https://api.apify.com/v2/actor-tasks/david780~tiktok-scraper-task/runs/last?token=apify_api_SuQoOO6GJYcxih8gY8dqYnzsb5zHPR1ELxbh');
        $last_insert =  $last_id->json();
        $id =  $last_insert['data']['defaultDatasetId'];
        $response = Http::timeout(300)->get('https://api.apify.com/v2/datasets/'.$id.'/items?clean=true&format=json&view=overview');
        $data =  $response->json();

        // return $data;
        // foreach($data as $val){

            //  first method for getting last part of url

            //  $uriSegments = explode("/", parse_url($val['webVideoUrl'], PHP_URL_PATH));
            //  $lastUriSegment = array_pop($uriSegments);
            //  return $lastUriSegment;

            // second method for getting last part of url

            // $parts = explode('/', $val['webVideoUrl']);
            // return $last = end($parts);
        // }

        return view('videos',get_defined_vars());

    }


    // public function getvideos(){

    //     $client = new \GuzzleHttp\Client([
    //         'base_uri' => 'https://api.apify.com/v2/',
    //         'headers' => [
    //             'Authorization' => 'apify_api_SuQoOO6GJYcxih8gY8dqYnzsb5zHPR1ELxbh',
    //         ]
    //     ]);
    //     $response = Http::timeout(300)->get('https://api.apify.com/v2/actor-runs/NP8pZraLY0M5LPb7Z/dataset/items');
    //     return $response->json();
    // }




    //     public function getUserVideos(Request $request)
    //     {
    //         $client = new Client();
    //         $response = $client->request('GET', 'https://api.tiktok.com/aweme/v1/aweme/post/?user_id=@davidjoy780&count=10', [
    //             'headers' => [
    //                 'User-Agent' => 'TikTok',
    //                 'Accept' => 'application/json',
    //                 'Authorization' => 'Bearer ACCESS_TOKEN',
    //             ],
    //         ]);

    //         $videos = json_decode($response->getBody());

    //         return view('user-videos', compact('videos'));
    // }


    public function mailgunemail(){

        $data = [];
        $email = 'djoy62471@gmail.com';

        Mail::send('mailgun_email', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Test Email from mail gun');
        });
    }


}
