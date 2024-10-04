<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                'name' => 'Ahmed',
                'email' => 'john@example.com',
                'phone' => '1234567890',
                'role' => 'admin',
                'image' => 'path/to/image1.jpg',
                'password' => Hash::make('password123'), 
            ],
        ];

        // Insert users into the database
        foreach ($users as $user) {
            User::create($user);
        }
    }

}
