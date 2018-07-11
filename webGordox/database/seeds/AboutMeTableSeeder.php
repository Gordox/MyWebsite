<?php

use Illuminate\Database\Seeder;

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
          "code_tags" => "C#;PHP;C++;Java;Python;Javascript",
          "description" => "Hej",
          "img_url" => "NONE",
          "location" => "Sweden",
          "email" => "antonsvensson94@hotmail.se"
        ]
        ]);
    }
}
