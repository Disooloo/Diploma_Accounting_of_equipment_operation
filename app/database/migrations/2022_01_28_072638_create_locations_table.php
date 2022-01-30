<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('local');
            $table->bigInteger('id_branches')->unsigned();
            $table->text('Description');
            $table->integer('Accountant_code'); //Бух номер местоположения (214 | 211 ...)
            $table->string('phone');
            $table->string('Adress');
            $table->string('Cordinates');
            $table->string('Site');
            $table->string('Email');
            $table->string('Contact_person');
            $table->string('Requisites'); // Реквизиты
            $table->string('Note'); // Примечание
            $table->string('img');
            $table->boolean('Location_warehouse')->default(1);
            $table->boolean('Location_repair')->default(0);
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
        Schema::dropIfExists('locations');
    }
}
