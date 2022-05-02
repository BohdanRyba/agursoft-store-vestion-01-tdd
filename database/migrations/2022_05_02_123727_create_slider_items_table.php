<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_items', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('slider_id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('btn_link')->nullable();
            $table->string('btn_color')->nullable();
            $table->text('image')->nullable();
            $table->text('bg_image')->nullable();
            $table->string('btn_enabled')->default(false)->nullable();
            $table->boolean('btn_link_external')->default(false)->nullable();

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
        Schema::dropIfExists('slider_items');
    }
};
