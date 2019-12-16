<?php

use Illuminate\Database\Seeder;

use App\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'body' => 'Pregunta de ingenieria numero 1',
            'option_a' => 'opcion de pregunta a',
            'option_b' => 'opcion de pregunta b',
            'option_c' => 'opcion de pregunta c',
            'option_d' => 'opcion de pregunta d',
            'correct' => 'c',
            'professor_id' => '1',
            'category_id' => '1'
        ]);

        Question::create([
            'body' => 'Pregunta de ingenieria numero 2',
            'option_a' => 'opcion de pregunta 2 a',
            'option_b' => 'opcion de pregunta 2 b',
            'option_c' => 'opcion de pregunta 2 c',
            'option_d' => 'opcion de pregunta 2 d',
            'correct' => 'a',
            'professor_id' => '1',
            'category_id' => '1'
        ]);

        Question::create([
            'body' => 'Pregunta de ingenieria numero 3',
            'option_a' => 'opcion de pregunta 3 a',
            'option_b' => 'opcion de pregunta 3 b',
            'option_c' => 'opcion de pregunta 3 c',
            'option_d' => 'opcion de pregunta 3 d',
            'correct' => 'b',
            'professor_id' => '2',
            'category_id' => '1'
        ]);

        Question::create([
            'body' => 'Pregunta de salud numero 1',
            'option_a' => 'opcion de pregunta a',
            'option_b' => 'opcion de pregunta b',
            'option_c' => 'opcion de pregunta c',
            'option_d' => 'opcion de pregunta d',
            'correct' => 'c',
            'professor_id' => '1',
            'category_id' => '2'
        ]);

        Question::create([
            'body' => 'Pregunta de ciencias sociales numero 2',
            'option_a' => 'opcion de pregunta 2 a',
            'option_b' => 'opcion de pregunta 2 b',
            'option_c' => 'opcion de pregunta 2 c',
            'option_d' => 'opcion de pregunta 2 d',
            'correct' => 'd',
            'professor_id' => '3',
            'category_id' => '3'
        ]);
    }
}
