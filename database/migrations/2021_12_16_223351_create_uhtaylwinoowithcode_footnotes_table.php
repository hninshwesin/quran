<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUhtaylwinoowithcodeFootnotesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uhtaylwinoowithcode_footnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uhtaylwinoowithcode_id')->unsigned();
            $table->string('heading');
            $table->longText('notes')->nullable();
            $table->string('files')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('uhtaylwinoowithcode_id')->references('id')->on('uhtaylwinoowithcodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uhtaylwinoowithcode_footnotes');
    }
}
