<?php

use Illuminate\Database\Seeder;

use App\Professor;

class ProfessorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create([
            'name' => 'Gino',
            'password' => '12345678',
            'code' => '454785',
            'email' => 'gino@mail.com',
            'rol_id' => '2'
        ]);

        Professor::create([
            'name' => 'Jett',
            'password' => '12345678',
            'code' => '77788',
            'email' => 'jett@mail.com',
            'rol_id' => '2'
        ]);

        Professor::create([
            'name' => 'Efa',
            'password' => '12345678',
            'code' => '444411',
            'email' => 'efa@mail.com',
            'rol_id' => '2'
        ]);

        Professor::create([
            'name' => 'Ritchie',
            'password' => '12345678',
            'code' => '111222',
            'email' => 'rt@mail.com',
            'rol_id' => '2'
        ]);

        Professor::create([
            'name' => 'Hannah',
            'password' => '12345678',
            'code' => '555656',
            'email' => 'hann@mail.com',
            'rol_id' => '2'
        ]);
    }
}
