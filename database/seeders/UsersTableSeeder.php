<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //下記シーダーの設定、何件表示させるか
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
             
        
        
        DB::table('users')->insert([
            'name' => 'User'. $i,
            'role' => 0 ,
            'tel' => '1.2.3',
            'email' => 'User'. $i.'@gmail.com',
            'password' => bcrypt('secret'),
            
        ]);

      
        }
        
    }
}
