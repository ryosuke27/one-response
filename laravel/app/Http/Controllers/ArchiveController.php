<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Feed;
use Illuminate\Http\Request;

class ArchiveController extends Controller
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

        $feeds = Feed::where('archive_flg', 1)->get();


        return view('archive')->with('feeds', $feeds);
    }

    public function update(Request $request)
    {
        $feed = Feed::find($request->id)
                    ->update(['archive_flg' => 1]);
        
        return redirect()->route('home');
    }
}
