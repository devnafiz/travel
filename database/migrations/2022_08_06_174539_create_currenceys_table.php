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
        Schema::create('currenceys', function (Blueprint $table) {
            $table->id();

            $table->string('name',191)->nullable();
            $table->string('code',191)->nullable();
            $table->string('symbol',191)->nullable();
            $table->string('format',191)->nullable();
            $table->string('exchange_rate',191)->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('currenceys');
    }
};
