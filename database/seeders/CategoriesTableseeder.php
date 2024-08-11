<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {category::create(['name'=>'un categories',  'status'=>1]);
        category::create(['name'=>'flower','status'=>1]);
        category::create(['name'=>'kitching',  'status'=>0]);
        category::create(['name'=>'natural', 'status'=>1]);
    }
}
