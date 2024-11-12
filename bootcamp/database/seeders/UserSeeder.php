<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" =>"Usuario 1",
            "email" =>"usuario1@example.com",
        ]);

        User::factory()->create([
            "name" =>"Usuario 2",
            "email"=>"usuario2@example.com",
        ]);
    }
}
