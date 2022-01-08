<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Patronymic');
            $table->string('Avatar');
            $table->string('Post');
            $table->text('Description');
            $table->string('Adress');
            $table->string('Phone');
            $table->string('ServeseNumber');
            $table->string('Department');
            $table->string('Company');
            $table->string('Branch');
            $table->string('Education');
            $table->string('Skill');
            $table->dateTime('Hired');
            $table->string('Password');
            $table->string('PensionInsurant');
            $table->string('MedicalPolicy');
            $table->dateTime('Dismissed');
            $table->bigInteger('Dismissed_team')->default(0);
            $table->string('email');
            $table->string('role')->default('Пользователь');
            $table->bigInteger('Pс_id')->unsigned();
            $table->bigInteger('monitor_id')->unsigned();
            $table->bigInteger('mebel_id')->unsigned();
            $table->bigInteger('dop1_id')->unsigned();
            $table->bigInteger('dop2_id')->unsigned();
            $table->bigInteger('dop3_id')->unsigned();
            $table->bigInteger('passed')->default(false);
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
        Schema::dropIfExists('teams');
    }
}
