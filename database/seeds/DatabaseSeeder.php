<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//       $this->call(SchoolboardSeeder::class);
//       $this->call(SchoolSeeder::class);
//       $this->call(KidSeeder::class);
//       $this->call(BehaviorSeeder::class);
//      $this->call(ClassroomSeeder::class);
//       $this->call(PiSeeder::class);
//       $this->call(HomeworkSeeder::class);
//        $this->call(UserSeeder::class);
    $this->call(ClassroomUserSeeder::class);

    }
}
