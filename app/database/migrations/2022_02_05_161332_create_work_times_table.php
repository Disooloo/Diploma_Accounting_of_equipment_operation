<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_times', function (Blueprint $table) {
            $table->id();
            $table->string('name_team');
            $table->string('general_manager');
            $table->boolean('d1')->default('0');
            $table->boolean('d2')->default('0');
            $table->boolean('d3')->default('0');
            $table->boolean('d4')->default('0');
            $table->boolean('d5')->default('0');
            $table->boolean('d6')->default('0');
            $table->boolean('d7')->default('0');
            $table->boolean('d8')->default('0');
            $table->boolean('d9')->default('0');
            $table->boolean('d10')->default('0');
            $table->boolean('d11')->default('0');
            $table->boolean('d12')->default('0');
            $table->boolean('d13')->default('0');
            $table->boolean('d14')->default('0');
            $table->boolean('d15')->default('0');
            $table->boolean('d16')->default('0');
            $table->boolean('d17')->default('0');
            $table->boolean('d18')->default('0');
            $table->boolean('d19')->default('0');
            $table->boolean('d20')->default('0');
            $table->boolean('d21')->default('0');
            $table->boolean('d22')->default('0');
            $table->boolean('d23')->default('0');
            $table->boolean('d24')->default('0');
            $table->boolean('d25')->default('0');
            $table->boolean('d26')->default('0');
            $table->boolean('d27')->default('0');
            $table->boolean('d28')->default('0');
            $table->boolean('d29')->default('0');
            $table->boolean('d30')->default('0');
            $table->boolean('d31')->default('0');
            $table->string('dop1')->default('0');
            $table->string('dop2')->default('0');

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
        Schema::dropIfExists('work_times');
    }
}
