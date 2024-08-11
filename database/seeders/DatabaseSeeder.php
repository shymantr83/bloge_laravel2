<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { $this->call(RoleTableseeder::class);
        $this->call(permissionsTableseeder::class);
        $this->call(CategoriesTableseeder::class);
        $this->call(postsTableseeder::class);
        $this->call(padgesTableseeder::class);
        $this->call(commentsTableseeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
