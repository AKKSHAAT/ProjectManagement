<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Database\Factories\ProjectFactory;
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
            'name' => 'appUser',
            'email' => 'applications518@gmail.com',
            'password' => bcrypt('123456790'),
        ]);

        Project::factory()
        ->count(30)
        ->hasTasks(30)
        ->create();
    }
}
