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
        DB::table('products')->insert([
            [   'product_name' =>'product1',
                'product_brand' =>'brand1',
                'product_price' =>'10000',
                'product_ram' =>'8',
                'product_storage' =>'128',
                'product_image' =>'image/huawei-nova-3i-8616.jpg',
                'status'=>'1'
            ],
    
            [   'product_name' =>'product2',
                'product_brand' =>'brand2',
                'product_price' =>'11000',
                'product_ram' =>'8',
                'product_storage' =>'128',
                'product_image' =>'image/Huawei-Y5.png',
                'status'=>'1'
            ],

            [   'product_name' =>'product3',
                'product_brand' =>'brand3',
                'product_price' =>'12000',
                'product_ram' =>'8',
                'product_storage' =>'128',
                'product_image' =>'image/Huawei-y9s-2.png',
                'status'=>'1'
            ],

            [   'product_name' =>'product4',
                'product_brand' =>'brand4',
                'product_price' =>'13000',
                'product_ram' =>'8',
                'product_storage' =>'128',
                'product_image' =>'image/nova-7i.jpg',
                'status'=>'1'
            ],

            [   'product_name' =>'product5',
                'product_brand' =>'brand5',
                'product_price' =>'14000',
                'product_ram' =>'8',
                'product_storage' =>'128',
                'product_image' =>'image/OPPO A5.jpeg',
                'status'=>'1'
            ],
    
          
            ]);
    }
}
