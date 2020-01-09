<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tag_id')->unsigned()->default(0);
            $table->foreign('tag_id')
                  ->references('id')->on('tags')
                  ->onDelete('cascade'); 
            $table->integer('post_id')->unsigned()->default(0);
            $table->foreign('post_id')
                  ->references('id')->on('posts')
                  ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_post');
    }
}
