<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Queue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Administrator',
            'email' => 'admin@antrian.com',
            'password' => bcrypt('password123'),
        ]);
        // Queue::create([
        //     'queue_number' => 1,
        //     'status' => 'processing',
        // ]);
        // Queue::create([
        //     'queue_number' => 2,
        //     'status' => 'waiting',
        // ]);
    }
}
