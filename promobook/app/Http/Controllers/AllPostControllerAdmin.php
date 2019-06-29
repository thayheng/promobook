<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AllPostControllerAdmin extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('DashboardAdmin.indexAdmin')->with('posts', $posts);
    }
}
