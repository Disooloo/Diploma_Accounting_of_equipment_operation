<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeObjectViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_object_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('model');
            $table->string('img')->nullable();
            $table->string('team_title')->default('Свободно');

            $table->foreignId('type_object_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //$table->foreignId('type_object_id')->constrained()->onDelete('cascade');
//            $table->foreignId('type_object_id')->constrained();

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
        Schema::dropIfExists('type_object_views');
    }
}
