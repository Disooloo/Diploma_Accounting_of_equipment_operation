<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVobjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vobjects', function (Blueprint $table) { //type_object_views
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('model')->nullable();
            $table->string('img')->nullable();
            $table->string('team_title')->default('Свободно');

            $table->foreignId('tobject_id')->constrained();

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
        Schema::dropIfExists('vobjects');
    }
}
