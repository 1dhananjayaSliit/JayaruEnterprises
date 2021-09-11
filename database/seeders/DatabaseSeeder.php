<?php

namespace Database\Seeders;

//use Database\Factories\ProductFactory;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(50)->create();
    }
}
