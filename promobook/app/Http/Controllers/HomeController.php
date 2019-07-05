<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Sponsor;
use Illuminate\Http\Request;

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
//        $request->user()->authorizeRoles(['user', 'admin']);
        $followUs= new followUs();
        $follow= $followUs->getAllFollowUs();
        return view('home', ['followUs' => $follow]);
    }


}

