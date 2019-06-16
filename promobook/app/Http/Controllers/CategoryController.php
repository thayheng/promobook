<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('DashboardAdmin.category',['categories'=>$categories
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
        $categories= Category::orderby('name', 'asc');
        return view('DashboardAdmin.category',['categories'=>$categories
        ]);

    }

    public function destroy($id)
    {
//        $category = Category::findOrFail($id);
//        $category->delelet();
//
//        return view('DashboardAdmin.category');
    }

}
