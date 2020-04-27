<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $roles = [
            ['name' => '管理者'],
            ['name' => '一般'],
            ['name' => 'ゲスト'],
        ];

        DB::table('roles')->insert($roles);
        
    }
}
