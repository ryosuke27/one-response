<?php

namespace App\Facades;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class callTwitterApi
{
    
    private $t;
    
    public function __construct()
    {
        $this->t = new TwitterOAuth(
            env('TWITTER_CLIENT_KEY'),
            env('TWITTER_CLIENT_SECRET'),
            env('TWITTER_CLIENT_ID_ACCESS_TOKEN'),
            env('TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET'));
    }
    
    // ツイート検索
    public function serachTweets(String $searchWord)
    {
        $d = $this->t->get("search/tweets", [
            'q' => $searchWord,
            'count' => 10,
         ]);
         
        return $d->statuses;
    }
}