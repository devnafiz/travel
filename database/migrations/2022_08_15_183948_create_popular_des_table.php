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
        Schema::create('popular_des', function (Blueprint $table) {
            $table->id();
            $table->string('title', 191)->nullable();
            $table->string('Pname', 191)->nullable();
            $table->text('des', 65535)->nullable();
            $table->text('slug', 65535)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('image')->nullable();

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
        Schema::dropIfExists('popular_des');
    }
};
