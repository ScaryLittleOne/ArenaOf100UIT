<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('wecode'),
            'active' => true,
            'admin' => true
        ]);
        DB::table('users')->insert([
            'username' => 'SenCui',
            'password' => bcrypt('12345678'),
            'active' => true,
            'admin' => false
        ]);
        DB::table('users')->insert([
            'username' => 'loser',
            'password' => bcrypt('loser1'),
            'active' => false,
            'admin' => false
        ]);
    }
}
