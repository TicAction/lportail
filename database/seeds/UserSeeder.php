<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'firstname'=> 'Ghislain',
            'lastname'=>'Girard',
            'email'=>'ghischa@gmail.com',
            'password'=>Hash::make('195golden'),

        ]);
         DB::table("users")->insert([
             'firstname'=> 'Yvan',
             'lastname'=>'Girard',
             'email'=>'yvan@fr.fr',
             'password'=>Hash::make('195golden'),
         ]);
        DB::table("users")->insert([
            'firstname'=> 'Marie-Claude',
            'lastname'=>'Lemay',
            'email'=>'mc@fr.fr',
            'password'=>Hash::make('195golden'),
        ]);
        DB::table("users")->insert([
            'firstname'=> 'Chantal',
            'lastname'=>'Nolet',
            'email'=>'cn@fr.fr',
            'password'=>Hash::make('195golden'),
        ]);
    }
}
