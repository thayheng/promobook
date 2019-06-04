<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable= ['user','data','like'];

    public function getAllpost(){
        return DB::table(posts)->get();

    }

    public function createPost($user,$data,$like){
            $record= $this->create([
                'user' => $user,
                'data' => $data,
                'like' => $like
            ]);
            return $record;
    }
}
