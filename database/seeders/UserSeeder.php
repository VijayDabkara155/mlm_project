<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456'),
            'mobile'=>'9111111111',
            'role'=>'0'
        ]);
    }
}
