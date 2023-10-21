<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        level::create([
            'level' => 'manager'
        ]);

        level::create([
           'level' => 'cashier' 
        ]);

        level::create([
           'level' => 'admin' 
        ]);

        User::create([
            'level_id' => '1',
            'name' => 'Owner',
            'username' => 'manager',
            'password' => bcrypt('123456'),
            'email' => 'owner@gmail.com', 
            'picture' => 'avatars-'.mt_rand(1,8).'.png'
        ]);

        User::create([
            'level_id' => '2',
            'name' => 'Nama Kasir Test ',
            'username' => 'cashier',
            'password' => bcrypt('123456'),
            'email' => 'cashier@gmail.com', 
            'picture' => 'avatars-'.mt_rand(1,8).'.png'
        ]);

        User::create([
            'level_id' => '3',
            'name' => 'Nama Admin Test ',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'email' => 'admin@gmail.com',
            'picture' => 'avatars-'.mt_rand(1,8).'.png'
        ]);
    }
}
