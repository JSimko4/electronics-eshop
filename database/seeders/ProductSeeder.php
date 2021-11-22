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
                'color_id' => '2', // 1 biela 2 siva 3 cierna
                'memory_id' => '3', // 1 1, 2 2, 3 4, 4 8, 5 16
                'category_id' => 1,
                'subcategory_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'DELL Inspiron 7490',
                'description' => 'Notebook DELL Inspiron 7490 description',
                'price' => 999,
                'color_id' => '1',
                'memory_id' => '4',
                'category_id' => 1,
                'subcategory_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Huawei MateBook X Pro',
                'description' => 'Notebook Huawei MateBook X Pro description',
                'price' => 1249,
                'color_id' => '1',
                'memory_id' => '5',
                'category_id' => 1,
                'subcategory_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Acer Nitro 5',
                'description' => 'Notebook Acer Nitro 5 description',
                'price' => 799,
                'color_id' => '3',
                'memory_id' => '3',
                'category_id' => 1,
                'subcategory_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'ASUS ROG Zephyrus S',
                'description' => 'Notebook asus rog description',
                'price' => 1299,
                'color_id' => '3',
                'memory_id' => '5',
                'category_id' => 1,
                'subcategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'DELL Latitude 14-5420',
                'description' => 'Notebook dell latitude description',
                'price' => 799,
                'color_id' => '1',
                'memory_id' => '4',
                'category_id' => 1,
                'subcategory_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Apple Macbook Pro',
                'description' => 'Macbook description',
                'price' => 2499,
                'color_id' => '1',
                'memory_id' => '5',
                'category_id' => 1,
                'subcategory_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Xiaomi Note 9',
                'description' => 'Xiaomi description',
                'price' => 299,
                'color_id' => '1',
                'memory_id' => '3',
                'category_id' => 3,
                'subcategory_id' => 9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'Nokia 3310',
                'description' => 'Nokia 3310 sadxdxyd description',
                'price' => 49,
                'color_id' => '3',
                'memory_id' => '1',
                'category_id' => 3,
                'subcategory_id' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array('name' => 'iPhone X',
                'description' => 'iphone x kkdk description',
                'price' => 399,
                'color_id' => '3',
                'memory_id' => '5',
                'category_id' => 3,
                'subcategory_id' => 11,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );

        foreach ($products as $product){
            DB::table('products')->insert($product);
        }
    }
}
