<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        // 通过 factory 方法生成 100 个用户并保存到数据库中
        factory(\App\User::class, 100)->create();
    }
}
