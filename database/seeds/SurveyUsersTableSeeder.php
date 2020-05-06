<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SurveyUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('survey_users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('survey_users')->insert([ [
            'survey_id'=>'1',
            'name'=>'読売　一郎',
            'password' => bcrypt('password'),
            'tel'=>'09012345678',
            'email'=>'yomiichiro@abc.com',
            'survey_area_id'=>'1',
            'role_id'=>'3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
            ]
        ]);
        DB::table('survey_users')->insert([ [
            'survey_id'=>'1',
            'name'=>'読売　二郎',
            'password' => bcrypt('password'),
            'tel'=>'09023456789',
            'email'=>'yomijiro@abc.com',
            'survey_area_id'=>'1',
            'role_id'=>'3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
            ]
        ]);
    }
}
