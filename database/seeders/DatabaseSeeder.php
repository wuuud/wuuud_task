<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // MemoSeeder（シーダークラス）の呼び出し
        $this->call(TaskSeeder::class);
    }
}
