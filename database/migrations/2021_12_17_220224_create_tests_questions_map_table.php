<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsQuestionsMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_questions_map', function (Blueprint $table) {
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('question_id');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->unique(['test_id', 'question_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tests_questions_map');
        Schema::enableForeignKeyConstraints();
    }
}
