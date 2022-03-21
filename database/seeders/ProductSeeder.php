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
            [   'product_name' =>'Dell Vostro 14 3400 Core i3 11th Gen 14" HD Laptop',
                'product_brand' =>'Dell',
                'product_processor' =>'Core i3',
                'product_screen' =>'14" Display',
                'product_price' =>'45800',
                'product_ram' =>'4GB',
                'product_storage' =>'1TB',
                'product_image' =>'public/image/vostro-14-3400-black-front-228x228.jpg',
                'status'=>'1'
            ],
    
            [   'product_name' =>'Lenovo IdeaPad 3 14IIL05 Core i3 10th Gen 14" HD Laptop',
                'product_brand' =>'Lenovo',
                'product_processor' =>'Core i3',
                'product_screen' =>'14" Display',
                'product_price' =>'43000',
                'product_ram' =>'4GB',
                'product_storage' =>'1TB',
                'product_image' =>'public/image/ideapad-3-01-500x500.jpg',
                'status'=>'1'
            ],

            [   'product_name' =>'ASUS VivoBook 15 X515JA Core i5 10th Gen 15.6" FHD Laptop',
                'product_brand' =>'ASUS',
                'product_processor' =>'Core i5',
                'product_screen' =>'15.6" Display',
                'product_price' =>'61000',
                'product_ram' =>'8GB',
                'product_storage' =>'512GB',
                'product_image' =>'public/image/15-x515ja-slate-grey-500x500.jpg',
                'status'=>'1'
            ],

            [   'product_name' =>'HP Pavilion 15-eg1678TU Core i5 11th Gen 15.6" FHD Laptop',
                'product_brand' =>'HP',
                'product_processor' =>'Core i5',
                'product_screen' =>'15.6" Display',
                'product_price' =>'72500',
                'product_ram' =>'8GB',
                'product_storage' =>'512GB',
                'product_image' =>'public/image/pavilion-15-eg1678tu-01-500x500.jpg',
                'status'=>'1'
            ],

            [   'product_name' =>'ASUS VivoBook X515EP Core i5 11th Gen MX330 2GB Graphics 15.6" IPS FHD Laptop',
                'product_brand' =>'ASUS',
                'product_processor' =>'Core i5',
                'product_screen' =>'15.6" Display',
                'product_price' =>'73000',
                'product_ram' =>'8GB',
                'product_storage' =>'512GB',
                'product_image' =>'public/image/vivobook-15-04-500x500.jpg',
                'status'=>'1'
            ],

            [   'product_name' =>'Acer Aspire 5 A514-54G Core i5 11th Gen MX350 2GB Graphics 14" FHD Laptop',
                'product_brand' =>'Acer',
                'product_processor' =>'Core i5',
                'product_screen' =>'14" Display',
                'product_price' =>'71500',
                'product_ram' =>'8GB',
                'product_storage' =>'512GB',
                'product_image' =>'public/image/aspire-5-001-500x500.jpg',
                'status'=>'1'
            ],


            [   'product_name' =>'HP Probook 450 G8 Core i5 11th Gen 512GB SSD 15.6 inch FHD Laptop',
                'product_brand' =>'HP',
                'product_processor' =>'Core i5',
                'product_screen' =>'15.6" Display',
                'product_price' =>'77000',
                'product_ram' =>'8GB',
                'product_storage' =>'512GB',
                'product_image' =>'public/image/hp-probook-450-g8-500x500.jpg',
                'status'=>'1'
            ],

            [   'product_name' =>'Dell Inspiron 15 3501 Core i7 11th Gen MX330 2GB Graphics 15.6" FHD Laptop',
                'product_brand' =>'Dell',
                'product_processor' =>'Core i7',
                'product_screen' =>'15.6" Display',
                'product_price' =>'87500',
                'product_ram' =>'8GB',
                'product_storage' =>'512GB',
                'product_image' =>'public/image/dell-intel-0015-500x500.jpg',
                'status'=>'1'
            ],
    
          
            ]);
    }
}
