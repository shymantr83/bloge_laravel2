<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {$faker=Factory::create();
        $category=collect(category::all()->modelkeys());
        $users=collect(User::where('id','>',2)->get()->modelkeys());
        for($i=0;$i<100;$i++){
        $post=post::create([
            'titel'=>$faker->sentence(mt_rand(3,6)),
            'description'=>$faker->paragraph(),
            'status'=>rand(0,1),
            'comment_able'=>rand(0,1),
            'user_id'=>$users->random(),
            'category_id'=>$category->random(),
        ]);}
    }
}
