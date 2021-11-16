<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            array(
                'price' => 699,
                'name' => 'Acer',
                'description' => 'Notebook acer description',
                'color' => 'sivá',
                'category_id' => 0,
                'file' => 'acer.jpg',
            )
        );
    }
}
