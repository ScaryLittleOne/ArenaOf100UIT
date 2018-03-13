<?php

use Illuminate\Database\Seeder;

class EverythingElseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'content' => 'Số một theo tiếng Anh là gì:',
            'contest_id' => 1
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'A',
            'correct' => true,
            'content' => 'one',
            'question_id' => 1
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'B',
            'correct' => false,
            'content' => 'two',
            'question_id' => 1
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'C',
            'correct' => false,
            'content' => 'three',
            'question_id' => 1
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'D',
            'correct' => false,
            'content' => 'four',
            'question_id' => 1
        ]);

        DB::table('contests')->insert([
            'currentquestion_id' => 1
        ]);

        DB::table('histories')->insert([
            'user_id' => 1,
            'contest_id' => 1,
            'questions_answer_id' => 1,
            'question_id' => 1,
        ]);

    }
}
