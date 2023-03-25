<?php

namespace Database\Seeders;

//use Illuminate\Support\Facades\Date;
use App\Models\CustomerInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;
//use PhpParser\Node\Expr\Cast\Int_;
//use Ramsey\Uuid\Type\Integer;
//use function Faker\Provider\pt_BR\check_digit;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerInfo::factory()->count(10)->create();



//        DB::table('users')->insert([
//            'customerNumber'=> Str::random(10),
//            'customerName' => Str:: random(10),
//            'contactLastName' => Str:: random(10),
//            'contactFirstName' => Str:: random(10),
//            'phone' => Str:: random(10),
//            'addressLine1' => Str:: random(10),
//            'addressLine2'=> Str:: random(10),
//            'city' => Str:: random(10),
//            'state' => Str:: random(10),
//            'postalCode' => Str:: random(10),
//            'country'=> Str:: random(10),
//        ]);
    }
}
