<?php

namespace Database\Seeders;

use App\Models\comment;
use App\Models\post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Factory::create();
        $postes=collect(post::wherePostType('post')->whereComment_able(1)->whereStatus(1)->get());
        $users=collect(User::where('id','>',2)->get()->modelkeys());
        for($i=0;$i<100;$i++){
            comment::create([
            'name'=>$faker->name,
'email'=>$faker->email,
'comment'=>$faker->paragraph(2,true),
'url'=>$faker->url,
'ip_address'=>$faker->ipv4,
'status'=>rand(0,1),
'user_id'=>$users->random(),
'post_id'=>$postes->random()->id,
        ]);}
    }
}
