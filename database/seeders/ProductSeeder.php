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
        //
        DB::table('products')->insert([
          
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'category'=>'mobile',
                'discription'=>'Asmart phone with 4gb ram and much more features',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07523361/gallery/LMK610IM-D-01.jpg',
                
            ],
            [
                'name'=>'Panasonic',
                'price'=>'800',
                'category'=>'Tv',
                'discription'=>'Asmart Tv with 4gb ram and much more features',
                'gallery'=>'https://www.lg.com/in/images/monitors/md06240096/2_Gallery/Z01_27UL850-W-DZ-01.jpg',
                
            ],
            [
                'name'=>'Soni tv',
                'price'=>'200',
                'category'=>'Tv',
                'discription'=>'Asmart Tv with 4gb ram and much more features',
                'gallery'=>'https://www.lg.com/in/images/monitors/md07511463/gallery/27QN600-B-DZ-01.jpg',
                
            ],
            [
                'name'=>'LG fridge',
                'price'=>'200',
                'category'=>'fridge',
                'discription'=>'Asmart fridge with 4gb ram and much more features',
                'gallery'=>'https://www.lg.com/in/images/refrigerators/md06172459/gallery/GC-X247CQAV-Refrigerators-Front-Light-On-Food-DZ-01.jpg',
                
            ]
        ]);
    }
}
