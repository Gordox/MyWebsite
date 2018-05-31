<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('work_type', 5);
            $table->string('title');
            $table->text('long_description');
            $table->text('short_description');
            $table->string('tags');
            $table->boolean('has_more_info');
            $table->boolean('has_download_url');
            $table->string('vid_url');  //optional use
            $table->string('download_url'); //optional use
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
