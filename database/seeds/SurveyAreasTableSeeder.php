<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SurveyAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('survey_areas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $surveyareas = [
            ['survey_prefecture_id' => '1','name' => '札幌市','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['survey_prefecture_id' => '1','name' => '千歳市','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['survey_prefecture_id' => '1','name' => '石狩市','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ];

        DB::table('survey_areas')->insert($surveyareas);
    }
}
