<?php

use Illuminate\Database\Seeder;

use App\Subject;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name' => 'Matematicas basicas',
            'responce_time' => '300',
            'open_date' => '20/10/2019',
            'close_date' => '21/10/2019',
            'admin_id' => '2'
        ]);

        Subject::create([
            'name' => 'Logica de programacion',
            'responce_time' => '600',
            'open_date' => '5/09/2019',
            'close_date' => '6/09/2019',
            'admin_id' => '1'
        ]);

        Subject::create([
            'name' => 'Ingenieria de software',
            'responce_time' => '300',
            'open_date' => '15/10/2019',
            'close_date' => '20/10/2019',
            'admin_id' => '5'
        ]);
    }
}
