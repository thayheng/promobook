<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Sponsor;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        $categories= Category::orderby('id', 'desc')->paginate(10);
        return view('DashboardAdmin.category',[
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        $name = $request->name;
        $icon = $request->icon;

        if($request->hasFile('icon')){
            $iconfile = $request->file('icon');
            $new_name = rand() . '.' . $iconfile->getClientOriginalName();
            $iconfile->move(public_path('images/'), $new_name);
            $icon = $new_name;
        }


        $object= new Category();
        $category = $object->createCategory($name,$icon);
        $categories= Category::orderby('id', 'desc')->paginate(10);
        return view('DashboardAdmin.category',[
            'categories'=>$categories
        ]);

    }

    public function search(Request $request) {

        $categories = Category::all();
        $sponsors = Sponsor::all();

//        $filters = Post::where('category', $name)->get();
//        $filer = new Post();
//        $filters = $filer->filter($name);

        if($request->has('category')){
            $name= $request->get('category');
            $filter = new Post();
            $filters= $filter->getByCategory($name);
        }else{
            $filters = Post::all();
        }

        return view('promoSection.filterCategory', [
            'filters'=>$filters,
            'categories'=>$categories,
            'sponsors'=>$sponsors,
        ]);

    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/admin/category')->with('success', 'Post is successfully delete');
    }

}
