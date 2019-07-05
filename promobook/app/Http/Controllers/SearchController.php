<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Sponsor;
use App\followUs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {

        $categories = Category::all();
        $sponsors = Sponsor::all();
        $followUs= new followUs();
        $follow= $followUs->getAllFollowUs();
        if($request->has('search')){
            $searchs = Post::search($request->get('search'))->get();
        }else{
            $searchs = Post::all();
        }

        return view('promoSection.search', [
            'searchs'=>$searchs,
            'categories'=>$categories,
            'sponsors'=>$sponsors,
            'followUs' => $follow
        ]);

    }
}
