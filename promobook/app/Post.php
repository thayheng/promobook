<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Post extends Model
{

    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'user' => 5,
            'data' => 5,
            'category' => 5,
        ]
    ];

    protected $fillable= ['user','data','image','like', 'category'];

    public function getAllpost(){
        return DB::table(posts)->get();

    }

    public function createPost($user,$data,$image,$category,$like){
            $record= $this->create([
                'user' => $user,
                'data' => $data,
                'image' => $image,
                'category' => $category,
                'like' => $like,
            ]);
            return $record;
    }
}
