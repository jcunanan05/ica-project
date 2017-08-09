<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumOutlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_outline', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('curriculum_subject_id')->unsigned(); 
            $table->integer('course_id')->unsigned(); 
            $table->integer('curriculum_year_id')->unsigned(); 
            $table->integer('curriculum_semester_id')->unsigned(); 
            $table->timestamps(); 
 
            $table->foreign('curriculum_subject_id') 
              ->references('id')->on('curriculum_subjects') 
              ->onDelete('cascade') 
              ->onUpdate('cascade'); 
 
            $table->foreign('course_id') 
              ->references('id')->on('courses') 
              ->onDelete('cascade') 
              ->onUpdate('cascade'); 
 
            $table->foreign('curriculum_year_id') 
              ->references('id')->on('curriculum_years') 
              ->onDelete('cascade') 
              ->onUpdate('cascade'); 
 
            $table->foreign('curriculum_semester_id') 
              ->references('id')->on('curriculum_semesters') 
              ->onDelete('cascade') 
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_outline');
    }
}
