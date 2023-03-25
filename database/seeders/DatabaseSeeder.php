<?php

namespace Database\Seeders;

<<<<<<< HEAD
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use App\Models\CustomerInfo;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec
=======
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $this->call([UserTableSeeder::class]);
        $this->call([FlightTableSeeder::class]);
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec
=======
        $this->call([UserTableSeeder::class]);
        $this->call([FlightTableSeeder::class]);
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec
    }
}
