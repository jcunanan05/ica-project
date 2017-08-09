<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectQuestionChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_question_choices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_question_id')->unsigned();
            $table->string('value');
            $table->boolean('is_correct');
            $table->timestamps();

            $table->foreign('subject_question_id')
                ->references('id')->on('subject_questions')
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
        Schema::dropIfExists('subject_question_choices');
    }
}
