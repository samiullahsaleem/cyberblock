<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategory')->insert([
            'name' => 'T-Shirts',
            'slug' => 't-shirts',
            'category_id' => '1'
         ]);

         DB::table('subcategory')->insert([
            'name' => 'Casual',
            'slug' => 'casual',
            'category_id' => '1'
         ]);

         DB::table('subcategory')->insert([
            'name' => 'Sports',
            'slug' => 'sports',
            'category_id' => '1'
         ]);

         DB::table('subcategory')->insert([
            'name' => 'Kurta & Kurti',
            'slug' => 'kurta-kurti',
            'category_id' => '2'
         ]);

         DB::table('subcategory')->insert([
            'name' => 'Sarees',
            'slug' => 'sarees',
            'category_id' => '2'
         ]);

    }
}
