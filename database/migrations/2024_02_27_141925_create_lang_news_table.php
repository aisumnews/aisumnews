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
        Schema::create('lang_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news');
            $table->text('title');
            $table->text('content');
            $table->string('author')->nullable();
            $table->string('image')->nullable();
            $table->string('country')->nullable();
            $table->string('language')->default('eng_Latn');
            $table->string('topic')->default('TOPNEWS');
            //TOPNEWS, WORLD, NATION, BUSINESS, TECHNOLOGY, ENTERTAINMENT, SPORTS, SCIENCE, HEALTH.
            $table->string('publisher')->nullable();
            $table->string('url')->nullable();
            $table->string('published_at');
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lang_news');
    }
};
