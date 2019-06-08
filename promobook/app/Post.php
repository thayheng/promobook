<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable= ['user','data','image','like'];

    public function getAllpost(){
        return DB::table(posts)->get();

    }

    public function createPost($user,$data,$image,$like){
            $record= $this->create([
                'user' => $user,
                'data' => $data,
                'image' => $image,
                'like' => $like,
            ]);
            return $record;
    }
}
