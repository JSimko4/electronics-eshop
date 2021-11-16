<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $products = array(
            array('name' => 'Acer V15',
                'description' => 'Notebook acer description',
                'price' => 699,
                'color' => 'sivá',
                'category_id' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'DELL Inspiron 7490',
                'description' => 'Notebook DELL Inspiron 7490 description',
                'price' => 999,
                'color' => 'sivá',
                'category_id' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Huawei MateBook X Pro',
                'description' => 'Notebook Huawei MateBook X Pro description',
                'price' => 1249,
                'color' => 'strieborná',
                'category_id' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );

        foreach ($products as $product){
            DB::table('products')->insert($product);
        }
    }
}
