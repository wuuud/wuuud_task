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
        
        DB::table('tasks')->insert([
        'title' => 'PHP',
        'body'  => 'PHPは、Hypertext Preprocessorの略です。',
        ]);

    }
}
