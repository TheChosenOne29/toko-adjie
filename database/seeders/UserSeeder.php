<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'adjie@adjie.com',
            'name' => 'adjie',
            'password' => Hash::make('adjie')
        ]);
        User::create([
            'email' => 'asd@asd.com',
            'name' => 'asd',
            'password' => Hash::make('asd')
        ]);
    }
}
