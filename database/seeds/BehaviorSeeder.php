<?php

use Illuminate\Database\Seeder;

class BehaviorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("behaviors")->insert([
            'behave_date'=> '2016-12-12',
            'content'=>'Lorem 1',
            'kid_id'=>'1'

        ]);

        DB::table("behaviors")->insert([
            'behave_date'=> '2016-12-15',
            'content'=>'Lorem 2',
            'kid_id'=>'2'

        ]);
    }
}
