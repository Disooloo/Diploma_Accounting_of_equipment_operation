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
            $table->string('Avatar')->default("http://fitm.asoiu.edu.az/upload/teacher_images/default.png");
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
//            $table->string('Password')->default("12345");
            $table->string('PensionInsurant')->default("asdsdadas");
            $table->string('MedicalPolicy')->default("asdsdadas");
            $table->date('Dismissed')->default('11.01.2022');;
            $table->bigInteger('Dismissed_team')->default(0);
            $table->string('email');
//            $table->string('role')->default('Сотрудник');
            $table->boolean('dop1_id')->default(0);
            $table->boolean('dop2_id')->default(0);
            $table->boolean('passed')->default(0);
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
