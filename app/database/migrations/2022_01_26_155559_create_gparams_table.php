<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGparamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gparams', function (Blueprint $table) {
            $table->id();
            $table->string('general_manager');
            $table->string('city');
            $table->string('img_general_manager');
            $table->string('company_name');
            $table->string('company_adress');
            $table->string('company_INN');
            $table->string('company_KPP');
            $table->string('company_chet');
            $table->string('company_bink');
            $table->date('getting_started');
            $table->string('phone');
            $table->string('dop1')->nullable();
            $table->string('dop2')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('gparams');
    }
}
