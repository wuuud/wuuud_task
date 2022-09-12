<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // foreach ($tasks as $task) [
        //         $title = 'title',
        //         $body = '$body',
        //     ];
        // DB::table('tasks')->insert($task);
        // 一件だけinsertする
        DB::table('tasks')->insert([
            'title' => 'テスト',
            'body' => 'テスト用データです。',
        ]);

    }
}
