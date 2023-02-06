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
        Schema::create('reservation_costs', function (Blueprint $table) {
            $table->id();
            $table->integer('reservation_id')->nullable();
            $table->string('user_id')->nullable();
            $table->tinyInteger('type_id')->nullable();
            $table->integer('data_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('amount')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('status_time')->nullable();
            $table->integer('status_user_id')->nullable();
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
        Schema::dropIfExists('reservation_costs');
    }
};
