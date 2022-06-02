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
            'name'=>'Armaggeddon ',
            'price'=>'$74',
            'description'=>'Trident Design RGB Front Panel,See Thru Tempered Glass Side Panel
             Fully Black Coated Interior Gaming Chassis',
            'category'=>'electronics',
            'gallery'=>'https://media.takealot.com/covers_images/ed6dbe7613b14b2691afeff99aada8b4/s-zoom.file',
        ]);
    }
}
