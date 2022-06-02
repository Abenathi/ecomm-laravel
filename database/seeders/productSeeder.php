<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
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
            'name'=>'Samsung A12',
            'price'=>'$250',
            'description'=>'Smartphone with a 51px front camera, 100amh battery life and a gorilla glass screen',
            'category'=>'electronics',
            'gallery'=>'https://www.samsung.com/za/smartphones/galaxy-a/galaxy-a12-black-64gb-sm-a127fzkgafa/',
        ]);
    }
}
