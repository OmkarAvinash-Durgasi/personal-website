<?php

namespace Database\Seeders;

use App\Models\ProductLine;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductLine::factory()->count(10)->create();
    }
}
