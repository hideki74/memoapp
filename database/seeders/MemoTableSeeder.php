<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => 1,
            'text' => 'test1',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'user_id' => 1,
            'text' => 'test2',
        ];

        DB::table('memos')->insert($param);

        $param = [
            'user_id' => 2,
            'text' => 'test3',
        ];

        DB::table('memos')->insert($param);
    }
}
