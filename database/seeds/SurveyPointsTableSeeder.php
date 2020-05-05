<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SurveyPointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('survey_points')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('survey_points')->insert([ [
            'survey_area_id'=>'1',
            'name'=>'山鼻南小学校',
            'address'=>'札幌市中央区南29条西12丁目1-1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('survey_points')->insert([ [
            'survey_area_id'=>'1',
            'name'=>'札幌市視聴覚障がい者情報センター',
            'address'=>'札幌市中央区大通西19丁目1-358',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('survey_points')->insert([ [
            'survey_area_id'=>'1',
            'name'=>'柏中学校',
            'address'=>'札幌市中央区南21条西5丁目1-2',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
    }
}
