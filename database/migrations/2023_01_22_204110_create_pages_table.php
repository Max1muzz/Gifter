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
        Schema::create('pages', function (Blueprint $table) {
            $table->smallInteger('id');
            $table->string('head', 128);
            $table->string('link_1', 1);
            $table->string('link_2', 1);
            $table->string('link_3', 1)->nullable()->default(null);
            $table->string('link_4', 1)->nullable()->default(null);
            $table->string('link_5', 1)->nullable()->default(null);
            $table->string('link_6', 1)->nullable()->default(null);
            $table->string('button_1', 32);
            $table->string('button_2', 32);
            $table->string('button_3', 32)->nullable()->default(null);
            $table->string('button_4', 32)->nullable()->default(null);
            $table->string('button_5', 32)->nullable()->default(null);
            $table->string('button_6', 32)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
