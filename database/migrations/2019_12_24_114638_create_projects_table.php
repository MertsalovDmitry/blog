<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header', 255)->unique();
            $table->string('slug')->unique();
            $table->string('title', 255);
            $table->string('image', 255);
            $table->text('about', 255);
            $table->text('details', 255);
            $table->text('requirements', 255);
            $table->text('description', 255);
            $table->string('client', 255);
            $table->boolean('active');
            $table->dateTime('start');
            $table->dateTime('finish');
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
        Schema::dropIfExists('projects');
    }
}
