<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{


    public function run(): void
    {
        User::factory(10)->create();
//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'email_verified_at' =>Date::today(),
//            'remember_token' => Str:: random(10),
//            'password' => Hash::make('password'),
//        ]);
    }
}
