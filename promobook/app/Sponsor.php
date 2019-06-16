<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{

    // Table Name
    protected $table = 'sponsors';
    // Primary Key
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;


    protected $fillable= ['name','link','image'];

    public function getAllSponsor(){
        return DB::table(sponsors)->get();

    }

    public function createSponsor($name,$link,$image){
            $sponsor= $this->create([
                'name' => $name,
                'link' => $link,
                'image' => $image,
            ]);
            return $sponsor;
    }
}
