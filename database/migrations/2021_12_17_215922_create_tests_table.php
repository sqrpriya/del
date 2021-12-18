<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exam_id');
            $table->tinyText('title');
            $table->enum('type', ['previous', 'practice']);
            $table->unsignedSmallInteger('total_questions');
            $table->unsignedSmallInteger('time_in_minutes');
            $table->dateTime('held_on');
            $table->timestamps();
            $table->foreign('exam_id')->references('id')->on('exams');
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
        Schema::dropIfExists('tests');
        Schema::enableForeignKeyConstraints();
    }
}
