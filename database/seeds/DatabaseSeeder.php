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
        $this->call([
            SurveysTableSeeder::class,
            UserTableSeeder::class,
            QuestionsheetsTableSeeder::class,
            RolesTableSeeder::class,
            TeamsTableSeeder::class,
            TermsTableSeeder::class,
            QuestionsTableSeeder::class,
        ]);
    }
}
