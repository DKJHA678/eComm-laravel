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
                "galleries"=>"https://source.unsplash.com/collection/190727/1600x900",


            ],
            [
                'name'=>'Nokia',
                "prices"=>"28000",
                "descriptions"=>"A Smart Phone with 32 GB RAM along with some much more feature",
                "categories"=>"Mobile",
                "galleries"=>"https://source.unsplash.com/WLUHO9A_xik/1600x900",


            ],
            [
                'name'=>'LG',
                "prices"=>"35000",
                "descriptions"=>"A Smart Phone with 16 GB RAM along with some much more feature",
                "categories"=>"Mobile",
                "galleries"=>"https://source.unsplash.com/1600x900/?nature,water",


            ],
            [
                'name'=>'Vivo',
                "prices"=>"45000",
                "descriptions"=>"A Smart Phone with 64 GB RAM along with some much more feature",
                "categories"=>"Mobile",
                "galleries"=>"https://source.unsplash.com/1600x900/?nature,water",


            ]


        ]);

    }
}
