<?php

namespace Database\Seeders;

use App\Models\page;
use App\Models\post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class padgesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { $faker=Factory::create();
       page::create([
            'titel'=>'about us',
            'description'=>$faker->paragraph(),
            'status'=>1,
            'comment_able'=>0,
            'post_type'=>'page',
            'user_id'=>1,
            'category_id'=>1,
        ]);
       page::create([
            'titel'=>'our visionpage',
            'description'=>$faker->paragraph(),
            'status'=>1,
            'comment_able'=>0,
            'post_type'=>'page',
            'user_id'=>1,
            'category_id'=>1,
        ]);
        //
    }
}
