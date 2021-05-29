<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShweFootnotesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shwe_footnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shwe_id')->unsigned();
            $table->string('heading');
            $table->longText('notes')->nullable();
            $table->string('files')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('shwe_id')->references('id')->on('shwes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shwe_footnotes');
    }
}
