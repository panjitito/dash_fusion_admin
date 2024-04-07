<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->administrator()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        User::factory(10)->editor()->create();
        User::factory(289)->member()->create();
    }
}
