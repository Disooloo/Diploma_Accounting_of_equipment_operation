<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string("Branches_name");
            $table->text("Description");
            $table->string('link_site');
            $table->string('Phone');
            $table->string('Email');
            $table->string('Contact_person');
            $table->string('Adress');
            $table->string('Requisites'); // Реквизиты
            $table->string('Note'); // Примечание
            $table->string('img');
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
        Schema::dropIfExists('branches');
    }
}
