<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTopicResources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_topic_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resource_type_id')->unsigned();
            $table->string('value');
            $table->timestamps();

            $table->foreign('resource_type_id')
                ->references('id')->on('subject_topic_resource_types')
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
        Schema::dropIfExists('subject_topic_resources');
    }
}
