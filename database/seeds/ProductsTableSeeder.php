<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
    for ($i=1; $i < 100; $i++) {

     DB::table('products')->insert([
            'name' => 'admin'.$i,
            'status' => $i,
            


            // 'name' => ramdom_byte('10'),
            // 'email' => ramdom_byte('10').'@gmail.com',

            // 'password' => bcrypt('secret'),
            // 'phone' =>ramdom_byte('10'),
        ]);
        # code...
    }
    }
}
