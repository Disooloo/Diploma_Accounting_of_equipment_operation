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

            $table->string('title_company');
            $table->string('title_branch');
            $table->string('title_status');
            $table->integer('number_system');
            $table->integer('number_individual');
            $table->integer('number_individual_bix');
            $table->integer('number_parties');
            $table->string('title_spawn');
            $table->string('code_product')->nullable();
            $table->string('code_activation')->nullable();
            $table->integer('number_Quantity')->default(1);
            $table->integer('money_cost')->default(0);
            $table->integer('money_sum')->default(0);
            $table->string('title_seller');
            $table->string('service_organization')->nullable();
            $table->date('data_inventory')->nullable(); //
            $table->boolean('inventory_boolean')->default(0); // Учитывание в инвенторизации. 0 -> нет
            $table->date('warranty_do')->nullable();
            $table->date('license_do')->nullable();

            $table->integer('id_order')->nullable();
            $table->string('title_wrote')->nullable();
            $table->string('qr_code')->nullable();



            $table->string('title_domain')->nullable();
            $table->string('system_name')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('MAC_address')->nullable();
            $table->string('title_note')->nullable();

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
