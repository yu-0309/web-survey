<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('teams')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $teams = [
            ['name' => '全国','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '北海道支社','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '青森支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '盛岡支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '東北総局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '秋田支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '山形支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '福島支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '水戸支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '宇都宮支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '前橋支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => 'さいたま支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '千葉支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '東京社会部','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '立川支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '横浜支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '新潟支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '富山支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '金沢支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '福井支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '甲府支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '長野支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '岐阜市局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '静岡支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '中部支社','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '津支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '大津支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '京都総局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '大阪本社','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '神戸総局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '奈良支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '和歌山支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '鳥取支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '松江支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '岡山支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '広島支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '山口支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '徳島支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '高松支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '松山支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '高知支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '西部本社','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '佐賀支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '長崎支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '熊本支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '大分支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '宮崎支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '鹿児島支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '那覇支局','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '鳥取・島根','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '徳島・高知','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局１','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局２','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局３','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局４','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局５','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局６','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局７','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局８','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局９','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '予備支局１０','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ];

        DB::table('teams')->insert($teams);
        
    }
}
