<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Task::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(ProductSeeder::class);
        $this->call(TaskUserSeeder::class);
    }
}