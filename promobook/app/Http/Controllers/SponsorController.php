<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors= Sponsor::all();
        return view('DashboardAdmin.sponsor',['sponsors'=>$sponsors
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
        $link = $request->link;

        if($request->hasFile('image')){
            $imagefile = $request->file('image');
            $new_name = rand() . '.' . $imagefile->getClientOriginalName();
            $imagefile->move(public_path('images/'), $new_name);
            $image = $new_name;
        }

        $object= new Sponsor();
        $sponsor = $object->createSponsor($name,$link, $image);
        $sponsors= Sponsor::orderby('id', 'desc');
        return view('DashboardAdmin.sponsor',['sponsors'=>$sponsors
        ]);
    }


}
