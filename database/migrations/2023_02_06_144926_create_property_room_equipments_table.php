<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_room_equipments', function (Blueprint $table) {
            $table->id();
            $table->integer('property_room_id')->nullable();
            $table->integer('equipment_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('unit_amount')->nullable();
            $table->tinyInteger('is_chargeable')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('property_room_equipments');
    }
};
