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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('tour_id',191)->nullable();
            $table->string('user_id',191)->nullable();
            $table->string('type',191)->nullable();
            $table->string('start_date',191)->nullable();
            $table->string('end_date',191)->nullable();
            $table->string('amount')->nullable();
            $table->string('status',1)->default(0);

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
        Schema::dropIfExists('orders');
    }
};
