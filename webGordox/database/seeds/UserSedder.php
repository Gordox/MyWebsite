<?php

use Illuminate\Database\Seeder;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
          "name" => "Anton",
          "email" => "antonsvensson94@hotmail.se",
          "password" => "hej",
          "admin" => true,
          "remember_token" => str_random(10)
        ]
        ]);
    }
}
