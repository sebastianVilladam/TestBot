<?php

use Illuminate\Database\Seeder;

use App\Adminsitrator;

class AdministratorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            'name' => 'Omar',
            'password' => '12345678',
            'rol_id' => '3'
        ]);

        Administrator::create([
            'name' => 'Ellie',
            'password' => '12345678',
            'rol_id' => '3'
        ]);

        Administrator::create([
            'name' => 'Leo',
            'password' => '12345678',
            'rol_id' => '3'
        ]);
    }
}
