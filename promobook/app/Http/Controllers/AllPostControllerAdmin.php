<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Role;
use App\User;
class AllPostControllerAdmin extends Controller
{
    public function __construct()
    {
//        $this->middleware([
//            'auth','role:admin',
//        ]);
//        User()->authorizeRoles([
//            'admin'
//        ]);
    }

    public function index(Request $request){

        $request->user()->authorizeRoles('admin');

        $posts = Post::all();
        return view('DashboardAdmin.indexAdmin')->with('posts', $posts);
    }
}
