<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    DB::table('users')->truncate();
    for ($i=1; $i < 100; $i++) {

     DB::table('users')->insert([
            'name' => 'admin'.$i,
            'email' => 'admin'.$i.'@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => '1234',


            // 'name' => ramdom_byte('10'),
            // 'email' => ramdom_byte('10').'@gmail.com',

            // 'password' => bcrypt('secret'),
            // 'phone' =>ramdom_byte('10'),
        ]);
        # code...
    }
    
    }
}
