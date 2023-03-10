<?php

namespace Database\Seeders;

use App\Models\Model\View;
use App\Models\Model\Review;
use App\Models\Model\Product;
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
        // \App\Models\User::factory(10)->create();

         Product::factory(50)->create();
         Review::factory(300)->create();
         View::factory(500)->create();
    }
}
