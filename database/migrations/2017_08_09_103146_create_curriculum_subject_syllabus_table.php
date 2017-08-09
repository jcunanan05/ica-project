<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumSubjectSyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_subject_syllabus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curriculum_subject_id')->unsigned();
            $table->string('title');
            $table->string('overview')->nullable();
            $table->integer('arrangement_id')->unsigned();
            $table->timestamps();

            $table->foreign('curriculum_subject_id')
                ->references('id')->on('curriculum_subjects')
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
        Schema::dropIfExists('curriculum_subject_syllabus');
    }
}
