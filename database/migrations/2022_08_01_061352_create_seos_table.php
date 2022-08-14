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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
               $table->string('project_name', 191)->nullable();
                $table->text('metadata_des', 65535)->nullable();
                $table->text('metadata_key', 65535)->nullable();
                $table->text('google_analysis', 65535)->nullable();
                $table->text('fb_pixel', 65535)->nullable();
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
        Schema::dropIfExists('seos');
    }
};
