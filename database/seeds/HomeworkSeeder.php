<?php

use Illuminate\Database\Seeder;

class HomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("homeworks")->insert([
        'date_start'=> '2016-03-12',
        'date_end'=> '2016-03-19',
        'lecture'=>'Lecture 1',
        'grammaire'=>'Grammaire 1',
        'conjugaison'=>'Conjugaison 1',
        'mathematique'=>'Mathématique 1',
        'anglais'=>'Anglais 1',
        'homeworks'=>'Devoirs 1',



    ]);
        DB::table("homeworks")->insert([
            'date_start'=> '2016-01-12',
            'date_end'=> '2016-01-19',
            'lecture'=>'Lecture 2',
            'grammaire'=>'Grammaire 2',
            'conjugaison'=>'Conjugaison 2',
            'mathematique'=>'Mathématique 2',
            'anglais'=>'Anglais 2',
            'homeworks'=>'Devoirs 2',



        ]);
    }
}
