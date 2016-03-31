<?php

use Illuminate\Database\Seeder;

class ClassroomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classroom_user")->insert([
            'classroom_id'=> '1',
            'user_id'=>'1',

        ]);

        DB::table("classroom_user")->insert([
            'classroom_id'=> '2',
            'user_id'=>'2',

        ]);
        DB::table("classroom_user")->insert([
            'classroom_id'=> '3',
            'user_id'=>'3',

        ]);

        DB::table("classroom_user")->insert([
            'classroom_id'=> '4',
            'user_id'=>'4',

        ]);
        DB::table("classroom_user")->insert([
            'classroom_id'=> '3',
            'user_id'=>'4',

        ]);


    }
}
