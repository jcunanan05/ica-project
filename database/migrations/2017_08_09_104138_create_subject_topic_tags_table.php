<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTopicTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_topic_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_topic_id')->unsigned();
            $table->integer('curriculum_outline_id')->unsigned();
            $table->timestamps();

            $table->foreign('subject_topic_id') 
              ->references('id')->on('subject_topics') 
              ->onDelete('cascade') 
              ->onUpdate('cascade');

              $table->foreign('curriculum_outline_id') 
              ->references('id')->on('curriculum_outline') 
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
        Schema::dropIfExists('subject_topic_tags');
    }
}
