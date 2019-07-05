<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class followUs extends Model
{
    // Table Name
    protected $table = 'follow_us';
    // Primary Key
    // public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = false;

    protected $fillable= ['name','link','icon'];

    public function getAllFollowUs(){
        return DB::table('follow_us')->get();

    }

    public function createFollowUs($name,$link,$icon){
            $follow= $this->create([
                'name' => $name,
                'link' => $link,
                'icon' => $icon,
            ]);
            return $follow;
    }
}
