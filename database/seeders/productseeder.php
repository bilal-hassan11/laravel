<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            
            'product_name' => 'HTC One M10',
            'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            'available_quantity' => 129.99,
            'image' => '',
            
            'percentage_discount' => 2,
        ]);
        DB::table('product')->insert([
            'product_name' => 'HTC One M10',
            'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            'available_quantity' => 129.99,
            'image' => '',
            
            'percentage_discount' => 2,
        ]);
        DB::table('product')->insert([
            'product_name' => 'HTC One M10',
            'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            'available_quantity' => 129.99,
            'image' => '',
            'percentage_discount' => 2,
        ]);
    }
}
