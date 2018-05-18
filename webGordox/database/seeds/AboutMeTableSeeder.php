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
      DB::table('anton')->insert([
        [
          "name" => "Anton Svensson",
          "age" => "23",
          "code_tags" => "C#;PHP;C++;Java;Python;Javascript",
          "description" => "Greatings traveler, you have come acros Anton Svensson's chamber of knowlage and portfolio! <br/>
          Here you can see my WORKS, ranging from Professional work to more hobby side projects of mine. <br/>
          Aside of my work I like exploring new and intresting knowlage to add to my collection of works. <br/>
          I have done work in these languages:  <br/>
          Feel free to explore as much as you like!",
          "img_url" => "http://3.bp.blogspot.com/-AbZ0jNwaazg/UHP1lMdqWBI/AAAAAAAAAO0/kdG27DNnjcw/s320/normal_naruto_uzumaki_by_meshugene_render_by_maksitobi.png"
        ]
        ]);
    }
}
