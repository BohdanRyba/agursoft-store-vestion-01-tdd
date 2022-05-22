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
            $table->unsignedInteger('category_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->text('properties');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('quantity')->nullable();
            $table->integer('discount_percent')->nullable();
            $table->integer('discount_amount')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('price_dollar')->nullable();
            $table->integer('price_euro')->nullable();
            $table->integer('old_price')->nullable();
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
