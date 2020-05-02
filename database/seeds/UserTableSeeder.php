<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $users = [
            ['name' => '北海道','password' => bcrypt('password'),'role_id' => '2','tel'=>'1','email'=>'hokkaido@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '青森','password' => bcrypt('password'),'role_id' => '2','tel'=>'2','email'=>'aomori@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '岩手','password' => bcrypt('password'),'role_id' => '2','tel'=>'3','email'=>'iwate@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '宮城','password' => bcrypt('password'),'role_id' => '2','tel'=>'4','email'=>'miyagi@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '秋田','password' => bcrypt('password'),'role_id' => '2','tel'=>'5','email'=>'akita@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '山形','password' => bcrypt('password'),'role_id' => '2','tel'=>'6','email'=>'yamagata@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '福島','password' => bcrypt('password'),'role_id' => '2','tel'=>'7','email'=>'fukushima@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '茨城','password' => bcrypt('password'),'role_id' => '2','tel'=>'8','email'=>'ibaraki@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '栃木','password' => bcrypt('password'),'role_id' => '2','tel'=>'9','email'=>'tochigi@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '群馬','password' => bcrypt('password'),'role_id' => '2','tel'=>'10','email'=>'gunma@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '埼玉','password' => bcrypt('password'),'role_id' => '2','tel'=>'11','email'=>'saitama@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '千葉','password' => bcrypt('password'),'role_id' => '2','tel'=>'12','email'=>'chiba@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '東京','password' => bcrypt('password'),'role_id' => '2','tel'=>'13','email'=>'tokyo@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '神奈川','password' => bcrypt('password'),'role_id' => '2','tel'=>'14','email'=>'kanagawa@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '新潟','password' => bcrypt('password'),'role_id' => '2','tel'=>'15','email'=>'niigata@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '富山','password' => bcrypt('password'),'role_id' => '2','tel'=>'16','email'=>'toyama@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '石川','password' => bcrypt('password'),'role_id' => '2','tel'=>'17','email'=>'ishikawa@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '福井','password' => bcrypt('password'),'role_id' => '2','tel'=>'18','email'=>'fukui@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '山梨','password' => bcrypt('password'),'role_id' => '2','tel'=>'19','email'=>'yamanashi@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '長野','password' => bcrypt('password'),'role_id' => '2','tel'=>'20','email'=>'nagano@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '岐阜','password' => bcrypt('password'),'role_id' => '2','tel'=>'21','email'=>'gifu@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '静岡','password' => bcrypt('password'),'role_id' => '2','tel'=>'22','email'=>'shizuoka@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '愛知','password' => bcrypt('password'),'role_id' => '2','tel'=>'23','email'=>'aichi@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '三重','password' => bcrypt('password'),'role_id' => '2','tel'=>'24','email'=>'mie@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '滋賀','password' => bcrypt('password'),'role_id' => '2','tel'=>'25','email'=>'siga@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '京都','password' => bcrypt('password'),'role_id' => '2','tel'=>'26','email'=>'kyoto@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '大阪','password' => bcrypt('password'),'role_id' => '2','tel'=>'27','email'=>'oosaka@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '兵庫','password' => bcrypt('password'),'role_id' => '2','tel'=>'28','email'=>'hyogo@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '奈良','password' => bcrypt('password'),'role_id' => '2','tel'=>'29','email'=>'nara@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '和歌山','password' => bcrypt('password'),'role_id' => '2','tel'=>'30','email'=>'wakayama@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '鳥取','password' => bcrypt('password'),'role_id' => '2','tel'=>'31','email'=>'tottori@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '島根','password' => bcrypt('password'),'role_id' => '2','tel'=>'32','email'=>'shimane@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '岡山','password' => bcrypt('password'),'role_id' => '2','tel'=>'33','email'=>'okayama@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '広島','password' => bcrypt('password'),'role_id' => '2','tel'=>'34','email'=>'hiroshima@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '山口','password' => bcrypt('password'),'role_id' => '2','tel'=>'35','email'=>'yamaguchi@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '徳島','password' => bcrypt('password'),'role_id' => '2','tel'=>'36','email'=>'tokushima@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '香川','password' => bcrypt('password'),'role_id' => '2','tel'=>'37','email'=>'kagawa@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '愛媛','password' => bcrypt('password'),'role_id' => '2','tel'=>'38','email'=>'ehime@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '高知','password' => bcrypt('password'),'role_id' => '2','tel'=>'39','email'=>'kochi@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '福岡','password' => bcrypt('password'),'role_id' => '2','tel'=>'40','email'=>'fukuoka@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '佐賀','password' => bcrypt('password'),'role_id' => '2','tel'=>'41','email'=>'saga@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '長崎','password' => bcrypt('password'),'role_id' => '2','tel'=>'42','email'=>'nagasaki@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '熊本','password' => bcrypt('password'),'role_id' => '2','tel'=>'43','email'=>'kumamoto@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '大分','password' => bcrypt('password'),'role_id' => '2','tel'=>'44','email'=>'oita@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '宮崎','password' => bcrypt('password'),'role_id' => '2','tel'=>'45','email'=>'miyazaki@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '鹿児島','password' => bcrypt('password'),'role_id' => '2','tel'=>'46','email'=>'kagoshima@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => '沖縄','password' => bcrypt('password'),'role_id' => '2','tel'=>'47','email'=>'okinawa@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name' => 'admin','password' => bcrypt('password'),'role_id' => '1','tel'=>'48','email'=>'admin@abc.com','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ];

        DB::table('users')->insert($users);

    }
}
