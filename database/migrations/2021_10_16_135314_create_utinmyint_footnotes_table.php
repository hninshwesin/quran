<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtinmyintFootnotesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utinmyint_footnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('utinmyint_id')->unsigned();
            $table->string('heading');
            $table->longText('notes')->nullable();
            $table->string('files')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('utinmyint_id')->references('id')->on('utinmyints');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('utinmyint_footnotes');
    }
}
