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
        Schema::create('iban_numbers', function (Blueprint $table) {
            $table->id();
            $table->string("iban", 100)->unique();
            $table->string("country", 100)->nullable();
            $table->string("sepa_country", 50)->nullable();
            $table->string("checksum", 50)->nullable();
            $table->string("bban", 255);
            $table->string("bank_code", 100)->nullable();
            $table->string("account_number", 255)->nullable();
            $table->string("branch_code", 50)->nullable();
            $table->string("check_digit", 50)->nullable();
            $table->string("swift_code", 50)->nullable();
            $table->string("bank_name", 100)->nullable();
            $table->string("branch", 100)->nullable();
            $table->string("address", 255)->nullable();
            $table->string("city", 100)->nullable();
            $table->string("zip", 50)->nullable();
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
        Schema::dropIfExists('iban_numbers');
    }
};
