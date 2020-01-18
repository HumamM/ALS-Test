<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningObjectLearningStyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_object_learning_style', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('learning_object_id');
            $table->unsignedBigInteger('learning_style_id');
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
        Schema::dropIfExists('learning_object_learning_style');
    }
}
