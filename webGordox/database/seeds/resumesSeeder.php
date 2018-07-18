<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class resumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('resumes')->insert([
        [
          "resume_description" => "Hej",
          "pdf_file" => "none",
          "doc_file" => "none",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
        ]);
    }
}
