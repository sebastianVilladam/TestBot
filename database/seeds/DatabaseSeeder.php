<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(ProfessorsSeeder::class);
        $this->call(AdministratorsSeeder::class);
        $this->call(EventsSeeder::class);
    }
}
