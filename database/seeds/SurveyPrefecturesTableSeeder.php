<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SurveyPrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('survey_prefectures')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $surveyprefectures = [
            ['survey_id' => '1','name' => '北海道','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['survey_id' => '2','name' => '東京','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['survey_id' => '3','name' => '熊本','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ];

        DB::table('survey_prefectures')->insert($surveyprefectures);
    }
}
