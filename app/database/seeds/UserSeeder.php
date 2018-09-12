<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder{
    public function run (){
        
        Eloquent::unguard();

        // 全部消す 　
        DB::table('users')->delete();


        $users = array(
            array(
                'name' => 'hebibulla',
                'password' =>'hebibulla',
                'email' => 'example@email.com'
            )
        );

        DB::table('users')->insert($users);
    }
}
