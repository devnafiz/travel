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
               $table->string('meta_title', 191)->nullable();
                $table->text('mata_author', 65535)->nullable();
                $table->text('meta_tag', 65535)->nullable();
                $table->text('meta_description', 65535)->nullable();
                $table->text('google_analytics', 65535)->nullable();
                 $table->text('bing_analytics', 65535)->nullable();
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
