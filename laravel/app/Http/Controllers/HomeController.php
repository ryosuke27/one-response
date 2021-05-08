<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $feeds = Feed::where('archive_flg', 0)->get();
        
        return view('home')->with('feeds', $feeds);
    }
}
