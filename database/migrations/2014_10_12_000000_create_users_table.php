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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('role_id');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('nic')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('phone')->nullable();
            $table->string('street_address')->nullable();
            $table->string('address2')->nullable();
            $table->string('town')->nullable();
            $table->tinyInteger('district_id')->nullable();
            $table->string('postcode')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
