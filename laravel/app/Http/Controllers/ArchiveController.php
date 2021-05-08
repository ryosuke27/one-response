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

        $archives = Archive::all();


        return view('archive')->with('archives', $archives);
    }

    public function update(Request $request)
    {
        $feed = Feed::find($request->id)
                    ->update(['archive_flg' => 1]);
        
    }
}
