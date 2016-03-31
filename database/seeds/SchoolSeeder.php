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
            'zipcode'=>'J0H1M0',
            'url'=>'http://www.cstr.qc.ca',
            'schoolboard_id'=>'2'
        ]);


        DB::table("schools")->insert([
            'name'=>'Assomption',
            'adress_number'=>'433',
            'adress'=>'Rue LaFramboise',
            'phone'=>'(450)773-8401',
            'zipcode'=>'J0H1M0',
            'url'=>'http://www.cssh.qc.ca',
            'schoolboard_id'=>'1'
        ]);

        DB::table("schools")->insert([
            'name'=>'St-Hugues',
            'adress_number'=>'423',
            'adress'=>'Rue Chrétien',
            'phone'=>'(514)773-8401',
            'zipcode'=>'J0H1M0',
            'url'=>'http://www.csm.qc.ca',
            'schoolboard_id'=>'3'
        ]);
    }
}
