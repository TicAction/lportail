<?php

use Illuminate\Database\Seeder;

class SchoolboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("schoolboards")->insert([
           'name'=>'Cstr',
            'adress_number'=>'4233',
            'adress'=>'Rue Savard',
            'phone'=>'(819)773-8401',
            'url'=>'http://www.cstr.qc.ca'
        ]);


        DB::table("schoolboards")->insert([
            'name'=>'Cssh',
            'adress_number'=>'433',
            'adress'=>'Rue LaFramboise',
            'phone'=>'(450)773-8401',
            'url'=>'http://www.cssh.qc.ca'
        ]);

        DB::table("schoolboards")->insert([
            'name'=>'Csm',
            'adress_number'=>'423',
            'adress'=>'Rue Chrétien',
            'phone'=>'(514)773-8401',
            'url'=>'http://www.csm.qc.ca'
        ]);
    }
}
