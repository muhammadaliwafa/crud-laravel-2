<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            // $table->bigIncrements('id');
            
            $table->bigInteger('pertanyaan_id')->unsigned()->nullable();
            // $table->string('jawaban')->unsigned()->nullable();
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaans')->onDelete('cascade');
            $table->string('jawaban')->nullable();
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
        Schema::dropIfExists('jawabans', function(Blueprint $table){
            $table->dropForeign(['pertanyaan_id']);
            $table->dropColumn('pertanyaan_id');
        });
    }
}
