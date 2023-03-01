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
        Schema::create('swift_codes', function (Blueprint $table) {
            $table->id();
            $table->string("swift_code", 50)->unique();
            $table->string("bank", 50);
            $table->string("city", 50)->nullable();
            $table->string("branch", 255)->nullable();
            $table->string("address", 255)->nullable();
            $table->string("post_code", 100)->nullable();
            $table->string("country", 50)->nullable();
            $table->string("country_code", 50)->nullable();
            $table->string("breakdown_swift_code", 100)->nullable();
            $table->string("breakdown_bank_code", 100)->nullable();
            $table->string("breakdown_country_code", 100)->nullable();
            $table->string("breakdown_location_code", 100)->nullable();
            $table->string("breakdown_code_status", 100)->nullable();
            $table->string("breakdown_branch_code", 100)->nullable();
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
        Schema::dropIfExists('swift_codes');
    }
};
