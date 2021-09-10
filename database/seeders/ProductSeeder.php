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
        [	'name'=>'HP Laptop',
        	"price"=>"USD250.00",
        	"description"=>"1TB HDD, 8GB RAM, 10th Gen, Core i5",
        	"category"=>"Computers",
        	"gallery"=>"https://images-eu.ssl-images-amazon.com/images/I/41Y4CumRaqL._SY300_SX300_QL70_FMwebp_.jpg"
        ],
        [
        	'name'=>'Lenovo Laptop',
        	"price"=>"USD350.00",
        	"description"=>"1TB HDD, 8GB RAM, 10th Gen Intel Core i5 (i5-1035G1)",
        	"category"=>"Computers",
        	"gallery"=>"https://m.media-amazon.com/images/I/81nEs+l5UgL._SL1500_.jpg"
        ],
        [
        	'name'=>'Samsung Galaxy A72',
        	"price"=>"USD450.00",
        	"description"=>"Android 11, 6/8GB RAM, 64MP Main Camera",
        	"category"=>"Cellphones",
        	"gallery"=>"https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a72-4g-10.jpg"
        ],
        [
        	'name'=>'LG W41',
        	"price"=>"USD350.00",
        	"description"=>"Android 10, 128GB 6GB RAM, 48 MP Main Camera",
        	"category"=>"Cellphones",
        	"gallery"=>"https://fdn2.gsmarena.com/vv/pics/lg/lg-w41-pro-1.jpg"
        ],
        [
        	'name'=>'Apple iPhone 12 Pro Max',
        	"price"=>"USD550.00",
        	"description"=>"iOS 14.1, up to iOS 14.7, 128GB/256GB Storage",
        	"category"=>"Cellphones",
        	"gallery"=>"https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-12-pro-max-1.jpg"
        ]
    ]);
    }
}
