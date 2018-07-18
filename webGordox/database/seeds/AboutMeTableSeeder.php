<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutMeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('antons')->insert([
        [
          "name" => "Anton Svensson",
          "age" => "23",
          "code_tags" => "C#, C++, Java, Python, PHP, Javascript",
          "description" => "Hej",
          "img_url" => "none",
          "location" => "Sweden",
          "email" => "antonsvensson94@hotmail.se",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
        ]);
    }
}
