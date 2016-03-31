<?php

use Illuminate\Database\Seeder;

class KidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("kids")->insert([
            'firstname'=> 'Nathaniel',
            'lastname'=>'Girard',

        ]);

        DB::table("kids")->insert([
            'firstname'=> 'Marika',
            'lastname'=>'Nolet',

        ]);

        DB::table("kids")->insert([
            'firstname'=> 'Tristan',
            'lastname'=>'Palmer',

        ]);
        DB::table("kids")->insert([
            'firstname'=> 'Coralie',
            'lastname'=>'Côté',

        ]);
    }
}
