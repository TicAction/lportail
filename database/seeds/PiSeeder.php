<?php

use Illuminate\Database\Seeder;

class PiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pis")->insert([
            'pi_date'=> '2016-12-15',
            'force'=>'force 2',
            'difficulty'=>'difficulty 2',
            'intervention'=>'intervention 2',
            'todo'=>'todo 2',
            'kid_id'=>'2'

        ]);

        DB::table("pis")->insert([
            'pi_date'=> '2016-12-15',
            'force'=>'force 1',
            'difficulty'=>'difficulty 1',
            'intervention'=>'intervention 1',
            'todo'=>'todo 1',
            'kid_id'=>'1'

        ]);
    }
}
