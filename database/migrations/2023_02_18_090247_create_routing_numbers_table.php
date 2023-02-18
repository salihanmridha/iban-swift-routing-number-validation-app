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
        Schema::create('routing_numbers', function (Blueprint $table) {
            $table->id();
            $table->string("routing_number", 50)->unique();
            $table->string("date_of_revision", 50)->nullable();
            $table->string("new_routing_number", 50)->nullable();
            $table->string("bank", 255);
            $table->string("address", 255)->nullable();
            $table->string("city", 100)->nullable();
            $table->string("state", 100)->nullable();
            $table->string("zip", 100)->nullable();
            $table->string("phone", 100)->nullable();
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
        Schema::dropIfExists('routing_numbers');
    }
};
