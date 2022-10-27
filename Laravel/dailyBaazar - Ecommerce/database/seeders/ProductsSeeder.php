<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S9',
            'slug' => 'samsung-galaxy-s9',
            'category_id' => '1',
            'subcategory_id' => '2',
            'discounted_price' => '49.50',
            'description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'photo' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => '45.90',
            'is_featured' => 'Yes',
            'in_sale' => 'No',
            'stock' => '12'
         ]);
 
         DB::table('products')->insert([
             'name' => 'Apple iPhone X',
             'slug' => 'apple-iphone-x',
            'category_id' => '1',
            'subcategory_id' => '3',
            'discounted_price' => '12.50',
             'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
             'photo' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
             'price' => '10.25',
             'is_featured' => 'Yes',
             'in_sale' => 'Yes',
             'stock' => '10'
         ]);
 
         DB::table('products')->insert([
             'name' => 'Google Pixel 2 XL',
             'slug' => 'google-pixel-2-xl',
            'category_id' => '2',
            'subcategory_id' => '1',
            'discounted_price' => '9.50',
             'description' => 'New condition
 • No returns, but backed by eBay Money back guarantee',
             'photo' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
             'price' => '5.90',
            'is_featured' => 'Yes',
            'in_sale' => 'No',
            'stock' => '12'
         ]);
 
         DB::table('products')->insert([
             'name' => 'LG V10 H900',
             'slug' => 'lg-v10-h900',
            'category_id' => '2',
            'subcategory_id' => '3',
            'discounted_price' => '19.50',
             'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
             'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
             'price' => '15.90',
            'is_featured' => 'Yes',
            'in_sale' => 'No',
            'stock' => '12'
         ]);
 
         DB::table('products')->insert([
             'name' => 'Huawei Elate',
             'slug' => 'huawei-elate',
            'category_id' => '2',
            'subcategory_id' => '4',
            'discounted_price' => '9.50',
             'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
             'photo' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
             'price' => '5.90',
            'is_featured' => 'Yes',
            'in_sale' => 'No',
            'stock' => '12'
         ]);
 
         DB::table('products')->insert([
             'name' => 'HTC One M10',
             'slug' => 'htc-one-m10',
            'category_id' => '3',
            'subcategory_id' => '5',
            'discounted_price' => '49.50',
             'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
             'photo' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
             'price' => '45.90',
            'is_featured' => 'Yes',
            'in_sale' => 'No',
            'stock' => '12'
         ]);
    }
}
