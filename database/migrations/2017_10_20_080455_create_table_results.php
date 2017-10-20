<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidate_exam_id')->nullable();
            $table->foreign('candidate_exam_id')
                ->references('candidate_exam_id')->on('candidates')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('course_code')->nullable();
            $table->foreign('course_code')
                ->references('course_code')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('grade');
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
        Schema::dropIfExists('results');
    }
}
