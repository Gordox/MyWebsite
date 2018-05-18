<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('works')->insert([
        [
          "work_type" => "hb",
          "title" => "Test Title 1",
          "long_description" => "Long description 1",
          "short_description" => "Short description 1",
          "tags" => "C#; AI; XNA",
          "img_url" => "null",
          "vid_url" => "null",
          "download_url" => "null"
      ],
      [
        "work_type" => "pro",
        "title" => "Test Title 2",
        "long_description" => "Long description 2",
        "short_description" => "Short description 2",
        "tags" => "C++; XML; 2D",
        "img_url" => "null",
        "vid_url" => "null",
        "download_url" => "null"
    ]
      ]);

    }
}
