<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArabicFootnotesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arabic_footnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('arabic_id')->unsigned();
            $table->string('heading');
            $table->longText('notes')->nullable();
            $table->string('files')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('arabic_id')->references('id')->on('arabics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('arabic_footnotes');
    }
}
