<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name' => 'Admin Cakepoci',
            'email' => 'admin@cakepoci.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Staff Cakepoci',
            'email' => 'staff@cakepoci.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        User::create([
            'name' => 'Customer Cakepoci',
            'email' => 'customer@cakepoci.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
        ]);
    }

}
