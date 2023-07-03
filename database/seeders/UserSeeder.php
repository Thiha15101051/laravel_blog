<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            "name" => "Honey",
            "email" => "honey@gmail.com",
            "password" => Hash::make("honey123"),
        ]);

        User::factory(10)->create();

        User::factory()->create([
            "name" => "Aung Thiha",
            "email" => "thiha@gmail.com",
            "password" => Hash::make("thiha123"),
            "role" => "admin"
        ]);
    }
}
