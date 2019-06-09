<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

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
