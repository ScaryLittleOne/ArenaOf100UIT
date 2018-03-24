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
        if (1==2) 
        $this->call(UsersTableSeeder::class);
        $this->call(EverythingElseSeeder::class);
        $this->call(SampleQuestionSeeder::class);
        $this->call(test_user::class);
    }
}
