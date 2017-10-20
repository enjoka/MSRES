<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCandidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidate_exam_id')->unique();
            $table->string('candidate_name');
            $table->string('candidate_sex');
            $table->string('email');
            $table->string('phone number');
            $table->integer('candidate_type_id');
            $table->integer('exam_year');
            $table->integer('centre_no')->nullable()->unsigned();
            $table->foreign('centre_no')
                ->references('id')->on('centres')
                ->onUpdate('cascade')
                ->onDelete('set null');
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
        Schema::dropIfExists('candidates');
    }
}
