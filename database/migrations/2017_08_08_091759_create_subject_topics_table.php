<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned();
            $table->integer('lecturer_id')->unsigned();
            $table->string('name');
            $table->text('overview');
            $table->boolean('is_approved');
            $table->integer('arrangement_id')->unsigned();
            $table->timestamps();

            $table->foreign('subject_id')
                ->references('id')->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('lecturer_id')
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
        Schema::dropIfExists('subject_topics');
    }
}
