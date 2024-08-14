<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->references('id')->on('award__years');
            $table->foreignId('regions_id')->references('id')->on('regions');
            $table->string('restaurant_name');
            $table->string('address');
            $table->string('web');
            $table->string('title_article');
            $table->string('main_photo');
            $table->string('article');
            $table->string('photo_article_1');
            $table->string('photo_article_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
