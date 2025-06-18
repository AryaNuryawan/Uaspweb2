<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
<<<<<<< HEAD
            'name' => 'aisah',
            'email' => 'arya@gmail.com',
            'password' => bcrypt('admin123'),
=======
            'name' => 'Test User',
            'email' => 'test@example.com',
>>>>>>> cc8299b01267c274c436e808d3e0c845be172b1a
        ]);
    }
}
