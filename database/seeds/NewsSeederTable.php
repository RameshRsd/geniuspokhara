<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['title' => 'education', 'user_id' => 1],
            ['title' => 'weathers', 'user_id' => 4],
            ['title' => 'business', 'user_id' => 1],
            ['title' => 'love story', 'user_id' => 5]

        ]);

    }
}
