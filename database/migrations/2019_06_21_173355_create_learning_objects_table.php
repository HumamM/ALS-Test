<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->enum('learning_goal', ['knowledge', 'comprehension', 'application']);
            //$table->string('taxonomy');
            $table->string('language');
            //$table->enum('learning_mode', ['independent','collaborative','group work','mixed']);
            $table->integer('typical_learning_time');
            $table->enum('media_format', ['text','audio','PPT','video','multimedia']);
            //$table->enum('activity_type', ['Topic list','Lesson','Announcement','Forum','Quiz','Survey/Poll','Exercise','Assignment','Glossary','Email/Chat','Wiki','Workshop','References']);
            $table->enum('difficulty_level', ['beginner','intermediate','advanced']);
            //$table->enum('level', ['easy', 'hard']);
            //$table->string('active/reflective_FSLSM', 20);
            //$table->string('sensing/intuitive_FSLSM', 20);
            //$table->string('sequential/global_FSLSM', 20);
            //$table->string('verbal/visual_FSLSM', 20);
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
        Schema::dropIfExists('learning_objects');
    }
}
