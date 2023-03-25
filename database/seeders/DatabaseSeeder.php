<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use App\Models\CustomerInfo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class]);
        $this->call([CustomerSeeder::class]);
        $this->call([OfficeSeeder::class]);
        $this->call([EmployeeSeeder::class]);

        $this->call([OrderSeeder::class]);
        //$this->call([OrderDetailSeeder::class]);
        $this->call([PaymentSeeder::class]);
        $this->call([ProductLineSeeder::class]);
        $this->call([ProductSeeder::class]);

        //CustomerInfo::factory()->count(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
