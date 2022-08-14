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
        Schema::create('multi_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('position', 191)->nullable();
                $table->integer('row_id')->nullable();
                $table->boolean('default_currency')->nullable();
                $table->string('currency_id', 191)->nullable();
                $table->string('add_amount', 191)->nullable();
                $table->string('currency_symbol', 191)->nullable();
                $table->float('rate', 10, 0)->nullable();
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
        Schema::dropIfExists('multi_currencies');
    }
};
