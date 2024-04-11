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
        User::create([
            'name'=> 'manager',
            'email'=> 'mebel-smart@manage.com',
            'password' => Hash::make('secret'),
        ]);

        User::create([
            'name'=> 'Sotuvchi',
            'email'=> 'ms-ahror@gmail.com',
            'password' => Hash::make('secret2'),
        ]);

        User::create([
            'name'=> 'Hisobchi',
            'email'=> 'ms-temur@gmail.com',
            'password' => Hash::make('secret3'),
        ]);
        
    }
}
