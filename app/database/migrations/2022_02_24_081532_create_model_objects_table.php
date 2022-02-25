<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_objects', function (Blueprint $table) {
            $table->id();
            $table->string('title_view');
            $table->string('title_type');
            $table->string('title_model');
            $table->text('title_description');
            $table->string('object_img');
            $table->string('title_teams');
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
        Schema::dropIfExists('model_objects');
    }
}
