<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('Posts')->insert([
           "title" => "命名の必要性",
           "body" => "命名はデータの基準を考える"
        ]);
    }
}
