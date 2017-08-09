<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentExamScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exam_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->integer('correct_items')->unsigned();
            $table->integer('total_items')->unsigned();
            $table->decimal('rating', 3, 2);
            $table->boolean('is_passed')->default(false);
            $table->timestamps();

            $table->foreign('subject_id')
                ->references('id')->on('subjects')
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
        Schema::dropIfExists('student_exam_scores');
    }
}
