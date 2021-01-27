<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('_products')->insert([
            [
                'name'=>'OOPO',
                "prices"=>"25000",
                "descriptions"=>"A Smart Phone with 8 GB RAM along with some much more feature",
                "categories"=>"Mobile",
                "galleries"=>"https://www.searchpng.com/2019/02/10/oppo-r17-phone-png-image-free-download/",


            ],
            [
                'name'=>'Nokia',
                "prices"=>"28000",
                "descriptions"=>"A Smart Phone with 32 GB RAM along with some much more feature",
                "categories"=>"Mobile",
                "galleries"=>"https://favpng.com/png_view/nokia-mobile-nokia-phone-series-smartphone-nokia-3310-hmd-global-png/sqTkZcRr",


            ],
            [
                'name'=>'LG',
                "prices"=>"35000",
                "descriptions"=>"A Smart Phone with 16 GB RAM along with some much more feature",
                "categories"=>"Mobile",
                "galleries"=>"https://www.cleanpng.com/png-lg-g4-lg-g6-lg-g3-lg-v1-lg-g5-lg-mobile-repair-ser-6117380/",


            ],
            [
                'name'=>'Vivo',
                "prices"=>"45000",
                "descriptions"=>"A Smart Phone with 64 GB RAM along with some much more feature",
                "categories"=>"Mobile",
                "galleries"=>"https://www.kindpng.com/imgv/JbThwm_oppo-r17-pro-png-image-free-download-searchpng/",


                ]


        ]);

    }
}
