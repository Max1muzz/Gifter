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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('link', 512);
            $table->string('link_shopi', 512)->nullable();
            $table->string('link_amazon', 512)->nullable();
            $table->unsignedMediumInteger('price');
            $table->string('title', 128);
            $table->string('content', 512);
            $table->string('img', 512);
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
        Schema::dropIfExists('products');
    }
};
