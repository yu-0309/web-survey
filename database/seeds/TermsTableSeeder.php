<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('terms')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $terms = [
            ['name' => 'テスト'],
            ['name' => '期日前'],
            ['name' => '当日'],
        ];

        DB::table('terms')->insert($terms);
    }
}
