<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class bulkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulk')->insert([
            'name' =>'xyz',
            'email'=>'xyz@gmail.com',
        ]);
        DB::table('bulk')->insert([
            'name' =>'xyz',
            'email'=>'xyz@gmail.com',
        ]);
        DB::table('bulk')->insert([
            'name' =>'xyz',
            'email'=>'xyz@gmail.com',
        ]);
    }
}
