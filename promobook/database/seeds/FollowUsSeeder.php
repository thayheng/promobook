<?php

use Illuminate\Database\Seeder;
use App\followUs;
class FollowUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $follow= new followUs();
        $follow->name="facebook";
        $follow->icon="facebook_50px.png";
        $follow->link="www.facebook.com";
        $follow->save();

        $follow= new followUs();
        $follow->name="twitter";
        $follow->icon="twitter_50px.png";
        $follow->link="www.twitter.com";
        $follow->save();

        $follow= new followUs();
        $follow->name="instagram";
        $follow->icon="instagram_50px.png";
        $follow->link="www.instagram.com";
        $follow->save();
    }
}
