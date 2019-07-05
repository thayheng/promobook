<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Nicolaslopezj\Searchable\SearchableTrait;

class Post extends Model
{

    use SearchableTrait;

    // Table Name
    protected $table = 'posts';
    // Primary Key

    public $primaryKey = 'id';

    protected $searchable = [
        'columns' => [
            'user' => 5,
            'data' => 5,
            'category' => 5,
        ]
    ];

//    public function filter($name){
//        return DB::table('posts')->where('category', $name)->get();
//    }

    protected $fillable= ['user','data','image','like', 'category'];

    public function id(){
        return DB::table(posts)->get(id);
    }
    public function getByCategory($category){
        return DB::table('posts')->where('category',$category)->get();
    }

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
