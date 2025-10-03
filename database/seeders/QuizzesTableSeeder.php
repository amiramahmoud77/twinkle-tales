<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'level' => 1,
                'question' => 'What does a pilot fly?',
                'options' => json_encode(['Car', 'Plane', 'Boat']),
                'correct_answer' => 'Plane',
            ],
            [
                'level' => 1,
                'question' => 'What does a farmer grow?',
                'options' => json_encode(['Animals', 'Crops', 'Computers']),
                'correct_answer' => 'Crops',
            ],
        ]);
    }
}

