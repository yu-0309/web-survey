<?php

use Illuminate\Database\Seeder;

class TotalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('totals')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $totals = [
            ['name' => 'なし'],
            ['name' => 'あり'],
        ];

        DB::table('totals')->insert($totals);
    }
}
