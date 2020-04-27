<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('surveys')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('surveys')->insert([ [
            'name'=>'熊本知事選',
            'user_id'=>'43',
            'team_id'=>'43',
            'reference_date'=>'0501',
            'memo'=>'テスト',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
        DB::table('surveys')->insert([ [
            'name'=>'東京都知事選',
            'user_id'=>'13',
            'team_id'=>'13',
            'reference_date'=>'0701',
            'memo'=>'テスト',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]]);
    }
}
