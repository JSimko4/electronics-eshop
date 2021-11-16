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
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'DELL Inspiron 7490',
                'description' => 'Notebook DELL Inspiron 7490 description',
                'price' => 999,
                'color' => 'sivá',
                'category_id' => 0,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Huawei MateBook X Pro',
                'description' => 'Notebook Huawei MateBook X Pro description',
                'price' => 1249,
                'color' => 'strieborná',
                'category_id' => 0,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Acer Nitro 5',
                'description' => 'Notebook Acer Nitro 5 description',
                'price' => 799,
                'color' => 'čierna',
                'category_id' => 0,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'ASUS ROG Zephyrus S',
                'description' => 'Notebook asus rog description',
                'price' => 1299,
                'color' => 'čierna',
                'category_id' => 0,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'DELL Latitude 14-5420',
                'description' => 'Notebook dell latitude description',
                'price' => 799,
                'color' => 'strieborná',
                'category_id' => 0,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'HP Pavilion x360',
                'description' => 'Notebook HP pavilion x360 description',
                'price' => 999,
                'color' => 'strieborná',
                'category_id' => 0,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Apple Macbook Pro',
                'description' => 'Macbook description',
                'price' => 2499,
                'color' => 'strieborná',
                'category_id' => 0,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );

        foreach ($products as $product){
            DB::table('products')->insert($product);
        }
    }
}
