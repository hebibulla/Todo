<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder{
    public function run (){
        DB::Table('users')->delete();


        $users = array(
            array(
                'name' => 'hebibulla',
                'password' =>'hebibulla',
                'email' => 'example@email.com'
            )
        );

        DB::table('users')->isert($users);
    }
}




?>

