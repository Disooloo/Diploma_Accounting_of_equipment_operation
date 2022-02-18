<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');

//            $table->integer('typeViews_id');
//            $table->foreign('typeViews_id')->references('id')->on('type_object_views');
            $table->bigInteger('typeViews_id')->nullable();
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
        Schema::dropIfExists('type_objects');
    }
}
