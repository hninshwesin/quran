<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUhtaylwinooFootnotesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uhtaylwinoo_footnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uhtaylwinoo_id')->unsigned();
            $table->string('heading');
            $table->longText('notes')->nullable();
            $table->string('files')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('uhtaylwinoo_id')->references('id')->on('uhtaylwinoos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uhtaylwinoo_footnotes');
    }
}
