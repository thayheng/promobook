<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    // Table Name
    protected $table = 'categories';
    // Primary Key

    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;

    protected $fillable= ['name','icon'];


    public function getAllCategory(){
        return DB::table(categories)->get();

    }

    public function createCategory($name,$icon){
            $category= $this->create([
                'name' => $name,
                'icon' => $icon,
            ]);
            return $category;
    }

}
