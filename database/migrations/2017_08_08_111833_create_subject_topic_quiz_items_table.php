<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTopicQuizItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_topic_quiz_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_question_id')->unsigned();
            $table->integer('subject_topic_id')->unsigned();
            $table->timestamps();

            $table->foreign('subject_question_id')
                ->references('id')->on('subject_questions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('subject_topic_id')
                ->references('id')->on('subject_topics')
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
        Schema::dropIfExists('subject_topic_quiz_items');
    }
}
