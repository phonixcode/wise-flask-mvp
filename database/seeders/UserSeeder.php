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
     *
     * @return void
     */
    public function run()
    {
        // Administrative user account
        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@support.com',
            'role'              => 'administrator',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Customer user account
        User::create([
            'name'              => 'Alan Abiodun',
            'email'             => 'user@abbyfuncode.com',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Generate 10 other users
        User::factory(10)->create();
    }
}
