<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_project_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_category_id')->unsigned()->default(0);
            $table->foreign('project_category_id')
                  ->references('id')->on('project_categories')
                  ->onDelete('cascade'); 
            $table->integer('project_id')->unsigned()->default(0);
            $table->foreign('project_id')
                  ->references('id')->on('projects')
                  ->onDelete('cascade'); 
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
        Schema::dropIfExists('project_category');
    }
}
