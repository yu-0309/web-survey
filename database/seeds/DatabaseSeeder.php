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
            RolesTableSeeder::class,
            TeamsTableSeeder::class,
            TermsTableSeeder::class,
            QuestionsTableSeeder::class,
            TotalsTableSeeder::class,
            SurveyUnitsTableSeeder::class,
            SurveyPrefecturesTableSeeder::class,
            SurveyAreasTableSeeder::class,
            SurveyPointsTableSeeder::class,
            SurveyUsersTableSeeder::class,
        ]);
    }
}
