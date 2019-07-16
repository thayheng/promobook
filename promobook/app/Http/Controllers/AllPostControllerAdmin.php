<?php

namespace App\Http\Controllers;

use App\Category;
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
        $categories = Category::all();

        $posts = Post::orderby('id', 'desc')->paginate(10);
        return view('DashboardAdmin.indexAdmin', [
            'categories'=>$categories,
            'posts'=>$posts
        ]);
    }

    public function destroy($id)
    {
            $post = Post::findOrFail($id);
            $post->delete();
            return redirect('/admin')->with('success', 'Post is successfully delete');

    }

}
