<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttemptedQuestionsAnswersMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attempted_questions_answers_map', function (Blueprint $table) {
            $table->unsignedBigInteger('attempt_id');
            $table->unsignedBigInteger('question_id');
            $table->tinyText('answers_json');
            $table->timestamps();
            $table->foreign('attempt_id')->references('id')->on('attempts_users_tests_map');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->unique(['attempt_id', 'question_id']);
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
        Schema::dropIfExists('attempted_questions_answers_map');
        Schema::enableForeignKeyConstraints();
    }
}
