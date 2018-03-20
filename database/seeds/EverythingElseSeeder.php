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
DB::table('contests')->insert([
            'currentquestion_id' => 1
        ]);

        DB::table('histories')->insert([
            'user_id' => 1,
            'contest_id' => 1,
            'questions_answer_id' => 1,
            'question_id' => 1,
        ]);

        DB::table('questions')->insert([
            'content' => 'Ta và Nàng - Đen',
            'contest_id' => 1
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'A',
            'correct' => true,
            'content' => 'Ɲgàу thì không nghĩ, cứ đêm lại đâm đâm',
            'question_id' => 2
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'B',
            'correct' => false,
            'content' => 'Đệm êm chăn ấm nó cũng chả hoài năm',
            'question_id' => 2
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'C',
            'correct' => false,
            'content' => 'Lông bông ngàу tháng đâu chỉ một-hai năm',
            'question_id' => 2
        ]);

        DB::table('questions_answers')->insert([
            'abcd' => 'D',
            'correct' => false,
            'content' => 'Ɲhưng đói thì ăn, sợ gì no mà không tiêu',
            'question_id' => 2
        ]);

    }
}
