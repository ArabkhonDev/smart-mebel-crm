<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach($users as $user){
            Phone::create([
                'user_id'=> $user->id,
                'title'=> 'shaxsiy',
                'number'=>"+998 (" . rand(10, 99) . ") -" . rand(100, 999) . "-" . rand(10, 99) ."-". rand(10, 99)
            ]);
            Phone::create([
                'user_id'=> $user->id,
                'title'=> 'ota ona',
                'number'=>"+998 (" . rand(10, 99) . ") -" . rand(100, 999) . "-" . rand(10, 99) ."-". rand(10, 99)
            ]);
        }
    }
}
