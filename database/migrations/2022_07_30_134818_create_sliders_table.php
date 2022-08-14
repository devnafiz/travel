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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
                $table->string('link_by', 100)->nullable();
                $table->integer('category_id')->unsigned()->nullable()->index('sliders_category_id_foreign');
                $table->integer('child')->unsigned()->nullable()->index('sliders_child_foreign');
                $table->integer('grand_id')->unsigned()->nullable()->index('sliders_grand_id_foreign');
                $table->string('topheading', 191)->nullable();
                $table->string('heading', 191)->nullable();
                $table->string('buttonname', 191)->nullable();
                $table->string('btntextcolor', 100)->nullable();
                $table->string('btnbgcolor', 100)->nullable();
                $table->text('moredesc', 65535)->nullable();
                 $table->string('status', 1)->nullable();
                $table->string('moredesccolor', 100)->nullable();
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
        Schema::dropIfExists('sliders');
    }
};
