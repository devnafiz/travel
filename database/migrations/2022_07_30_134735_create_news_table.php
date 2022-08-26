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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
                $table->string('heading', 191);
                $table->text('slug', 65535);
                $table->string('image', 191)->nullable();
                $table->text('des', 65535);
                $table->string('user', 191);
                $table->integer('cat_id')->nullable();
                $table->text('about', 65535)->nullable();
                
                $table->enum('status', array('0','1'));
                
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
        Schema::dropIfExists('news');
    }
};
