<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
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
            $table->string('candidate_exam_id');
            $table->string('candidate_name');
            $table->string('candidate_sex');
            $table->string('email');
            $table->string('phone number');
            $table->integer('candidate_type_id');
            $table->integer('centre_no');
            $table->integer('exam_year');
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
