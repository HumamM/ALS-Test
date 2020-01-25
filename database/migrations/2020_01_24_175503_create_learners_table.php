<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('birthdate');
            $table->string('gender');
            $table->integer('phone')->nullable();
            $table->string('education_qualification')->nullable();
            $table->string('education_occupation')->nullable();
            $table->string('education_university')->nullable();
            $table->string('education_from_month')->nullable();
            $table->string('education_from_year')->nullable();
            $table->string('education_to_month')->nullable();
            $table->string('education_to_year')->nullable();
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
        Schema::dropIfExists('learners');
    }
}
