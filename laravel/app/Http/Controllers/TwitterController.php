<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Facades\CallTwitterApi;

class TwitterController extends Controller
{
    public function index(Request $request)
    {
        $result = \Twitter::get('statuses/home_timeline', array("count" => 30));

        return view('twitter', [
            "result" => $result
        ]);
    }

    public function tweet(Request $request)
    {
        $tweet = $request->tweet;
        \Twitter::post('statuses/update', ['status' => $tweet]);
    }

    public function search(Request $request)
    {
        $t = new CallTwitterApi();
        $d = $t->serachTweets($request->search);
    
        return view('twitter', ['result' => $d]);        
    }
}
