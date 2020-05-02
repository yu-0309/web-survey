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
            'answercontent11'=>'',
            'answercontent12'=>'',
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
            'answercontent11'=>'',
            'answercontent12'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'今回の支持候補者',
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
            'answercontent11'=>'',
            'answercontent12'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'今回の支持政党',
            'answercontent1'=>'自民',
            'answercontent2'=>'立憲民主',
            'answercontent3'=>'国民民主',
            'answercontent4'=>'公明',
            'answercontent5'=>'共産',
            'answercontent6'=>'日本維新の会',
            'answercontent7'=>'社民',
            'answercontent8'=>'Ｎ国',
            'answercontent9'=>'れいわ',
            'answercontent10'=>'その他',
            'answercontent11'=>'特になし',
            'answercontent12'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'重視している政策・課題',
            'answercontent1'=>'景気・雇用対策',
            'answercontent2'=>'社会保障',
            'answercontent3'=>'医療・福祉',
            'answercontent4'=>'防災対策',
            'answercontent5'=>'教育・子育て支援',
            'answercontent6'=>'観光の活性化',
            'answercontent7'=>'消費増税',
            'answercontent8'=>'憲法改正',
            'answercontent9'=>'その他',
            'answercontent10'=>'特になし',
            'answercontent11'=>'',
            'answercontent12'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'前回の支持政党',
            'answercontent1'=>'自民',
            'answercontent2'=>'公明',
            'answercontent3'=>'立憲民主',
            'answercontent4'=>'社民',
            'answercontent5'=>'共産',
            'answercontent6'=>'日本維新の会',
            'answercontent7'=>'希望',
            'answercontent8'=>'社民',
            'answercontent9'=>'自由',
            'answercontent10'=>'日本のこころ',
            'answercontent11'=>'その他',
            'answercontent12'=>'特になし',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('questions')->insert([ [
            'questionsheet_id'=>'1',
            'questioncontent'=>'普段の支持政党',
            'answercontent1'=>'自民',
            'answercontent2'=>'立憲民主',
            'answercontent3'=>'国民民主',
            'answercontent4'=>'公明',
            'answercontent5'=>'共産',
            'answercontent6'=>'日本維新の会',
            'answercontent7'=>'社民',
            'answercontent8'=>'Ｎ国',
            'answercontent9'=>'れいわ',
            'answercontent10'=>'その他',
            'answercontent11'=>'特になし',
            'answercontent12'=>'',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);        
    }
}
