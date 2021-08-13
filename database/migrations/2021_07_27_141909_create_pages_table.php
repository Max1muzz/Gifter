<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 16);
            $table->string('head', 512);
            $table->string('button_1', 256);
            $table->string('button_2', 256)->nullable();
            $table->string('button_3', 256)->nullable();
            $table->string('button_4', 256)->nullable();
            $table->string('button_5', 256)->nullable();
            $table->string('button_6', 256)->nullable();
            $table->string('link_1', 2);
            $table->string('link_2', 2)->nullable();
            $table->string('link_3', 2)->nullable();
            $table->string('link_4', 2)->nullable();
            $table->string('link_5', 2)->nullable();
            $table->string('link_6', 2)->nullable();
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
}
