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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('heading',191)->nullable();
            $table->text('des')->nullable();
            $table->string('mainimage',256)->nullable();
            $table->string('type')->nullable();
            $table->string('p_name')->nullable();
            $table->float('sale_price',10,0)->nullable();
            $table->float('discount_price',10,0)->nullable();
            $table->string('location',256)->nullable();
            $table->string('status')->default(1);
            $table->text('long_des')->nullable();
            $table->text('feature')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();


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
        Schema::dropIfExists('places');
    }
};
