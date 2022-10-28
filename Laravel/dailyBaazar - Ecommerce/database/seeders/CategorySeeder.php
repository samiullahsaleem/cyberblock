<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Men',
            'slug' => 'men'
         ]);

         DB::table('category')->insert([
            'name' => 'Women',
            'slug' => 'women'
         ]);

         DB::table('category')->insert([
            'name' => 'Kids',
            'slug' => 'kids'
         ]);

         DB::table('category')->insert([
            'name' => 'Sports',
            'slug' => 'sports'
         ]);

         DB::table('category')->insert([
            'name' => 'Digital',
            'slug' => 'digital'
         ]);

         DB::table('category')->insert([
            'name' => 'Furniture',
            'slug' => 'furniture'
         ]);

    }
}