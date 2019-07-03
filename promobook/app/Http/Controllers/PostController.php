<?php

namespace App\Http\Controllers;
use App\Category;
use App\Sponsor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $sponsors = Sponsor::all();
        $categories = Category::all();

        $posts= Post::orderby('id', 'desc')->paginate(10);
        return view('promoSection.promoBoard',['posts'=>$posts, 'categories' =>$categories, 'sponsors'=>$sponsors
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
    public function store(Request $request )
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $user=Auth::user()->name;
        $like=0;

        $data= $request->data;
        $image= $request->image;
        $category=$request->category;

        if($request->hasFile('image')){
            $imagefile = $request->file('image');
            $new_name = rand() . '.' . $imagefile->getClientOriginalName();
            $imagefile->move(public_path('images'), $new_name);
            $image=$new_name;
        }
        $sponsors = Sponsor::all();
        $categories = Category::all();
        $object= new Post();
        $reord = $object->createPost($user,$data,$image,$category,$like);
        $posts= Post::orderby('id', 'desc')->paginate(10);
        return view('promoSection.promoBoard',['posts'=>$posts, 'categories' => $categories, 'sponsors' => $sponsors
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
