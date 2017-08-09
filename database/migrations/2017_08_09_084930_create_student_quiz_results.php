<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentQuizResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_quiz_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('subject_topic_id')->unsigned();
            $table->integer('subject_question_id')->unsigned();
            $table->boolean('is_correct')->default(false);
            $table->timestamps();

            $table->foreign('subject_topic_id')
                ->references('id')->on('subject_topics')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('student_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('student_quiz_results');
    }
}
