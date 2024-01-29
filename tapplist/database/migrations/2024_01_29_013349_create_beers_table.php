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
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('tags')->nullable();
            $table->text('notes')->nullable();
            $table->string('style')->nullable();
            $table->json('price');
            $table->float('abv')->nullable();
            $table->date('date_brewed')->nullable();
            $table->string('glass_type')->nullable();
            $table->string('color')->nullable();
            $table->string('aroma')->nullable();
            $table->integer('ibu')->nullable();
            $table->float('untappd_rating')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beers');
    }
};
