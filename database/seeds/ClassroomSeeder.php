<?php

use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classrooms")->insert([
            'name'=> '1r1',
            'school_id'=>'1',


        ]);
        DB::table("classrooms")->insert([
            'name'=> '2r1',
            'school_id'=>'2',


        ]);
        DB::table("classrooms")->insert([
            'name'=> '3r1',
            'school_id'=>'3',


        ]);
        DB::table("classrooms")->insert([
            'name'=> '4r1',
            'school_id'=>'1',


        ]);
    }
}
