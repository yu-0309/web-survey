<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('questions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'性別',
            'answercontent1'=>'男性',
            'answercontent2'=>'女性',
            'answercontent3'=>'',
            'answercontent4'=>'',
            'answercontent5'=>'',
            'answercontent6'=>'',
            'answercontent7'=>'',
            'answercontent8'=>'',
            'answercontent9'=>'',
            'answercontent10'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'年齢',
            'answercontent1'=>'１０代',
            'answercontent2'=>'２０代',
            'answercontent3'=>'３０代',
            'answercontent4'=>'４０代',
            'answercontent5'=>'５０代',
            'answercontent6'=>'６０代',
            'answercontent7'=>'７０代以上',
            'answercontent8'=>'',
            'answercontent9'=>'',
            'answercontent10'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'支持候補者',
            'answercontent1'=>'',
            'answercontent2'=>'',
            'answercontent3'=>'',
            'answercontent4'=>'',
            'answercontent5'=>'',
            'answercontent6'=>'',
            'answercontent7'=>'',
            'answercontent8'=>'',
            'answercontent9'=>'',
            'answercontent10'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'支持政党',
            'answercontent1'=>'',
            'answercontent2'=>'',
            'answercontent3'=>'',
            'answercontent4'=>'',
            'answercontent5'=>'',
            'answercontent6'=>'',
            'answercontent7'=>'',
            'answercontent8'=>'',
            'answercontent9'=>'',
            'answercontent10'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
    }
}
