<?php

use Illuminate\Database\Seeder;

class QuestionsheetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('questionsheets')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('questionsheets')->insert([ [
            'survey_id'=>'1',
            'date'=>'20200501',
            'term_id'=>'2',
            'total_flag'=>'1',
            'memo'=>'test'
            ]
        ]);
    }
}