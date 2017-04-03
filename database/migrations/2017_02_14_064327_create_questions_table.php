<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exam_id');
            $table->foreign('exam_id')->references('id')->on('lesson_exams');
            $table->string('name', 150)->nullable();
            $table->tinyInteger('type')->default(\App\Models\Question::TYPE_QUESTION);
            $table->boolean('is_show_media_first')->default(false);
            $table->tinyInteger('answer_type')->default(\App\Models\Question::ANSWER_TYPE_SINGLE_CHOICE);
            $table->text('media')->nullable();
            $table->tinyInteger('media_type')->nullable();
            $table->string('content')->nullable();
            $table->text('correct_answer_id')->nullable();
            $table->text('answer_explain')->nullable();
            $table->integer('explain_price')->default(0);
            $table->integer('exp')->default(0);
            $table->integer('coin')->nullable();
            $table->double('drop_coin_rate')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
