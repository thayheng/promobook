<?php

namespace App\Http\Controllers;

use App\followUs;
use Illuminate\Http\Request;

class FollowUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\followUs  $followUs
     * @return \Illuminate\Http\Response
     */
    public function show(followUs $followUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\followUs  $followUs
     * @return \Illuminate\Http\Response
     */
    public function edit(followUs $followUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\followUs  $followUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, followUs $followUs)
    {
        $request->user()->authorizeRoles('admin');

        $name = $request->name;
        $icon = $request->icon;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\followUs  $followUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(followUs $followUs)
    {
        //
    }
}
