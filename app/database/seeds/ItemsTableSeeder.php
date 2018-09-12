<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    Eloquent::unguard();

    // 全部消す 　
    DB::table('items')->delete();


    $items = array(
        array(
            'owner_id' =>1,
            'item_name' =>'pick up milk',
            'done' => 0
        ),
        array(
            'owner_id' =>1,
            'item_name' =>'walk the dog',
            'done' => 1
        ),
        array(
            'owner_id' =>1,
            'item_name' =>'read book',
            'done' => 0
        )
    );

    DB::table('items')->insert($items);
}
}
