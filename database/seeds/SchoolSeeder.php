<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("schools")->insert([
            'name'=>'Plein-Soleil',
            'adress_number'=>'4233',
            'adress'=>'Rue Savard',
            'phone'=>'(819)773-8401',
            'url'=>'http://www.cstr.qc.ca'
        ]);


        DB::table("schools")->insert([
            'name'=>'Assomption',
            'adress_number'=>'433',
            'adress'=>'Rue LaFramboise',
            'phone'=>'(450)773-8401',
            'url'=>'http://www.cssh.qc.ca'
        ]);

        DB::table("schools")->insert([
            'name'=>'St-Hugues',
            'adress_number'=>'423',
            'adress'=>'Rue Chrétien',
            'phone'=>'(514)773-8401',
            'url'=>'http://www.csm.qc.ca'
        ]);
    }
}
