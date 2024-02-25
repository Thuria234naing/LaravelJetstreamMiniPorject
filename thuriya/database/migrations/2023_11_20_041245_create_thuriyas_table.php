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
        Schema::create('thuriyas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('title')->nullable(true);
            $table->longText('description');
            $table->string('image')->nullable(true);
            $table->string('position')->nullable(true)->default('journalist');
            $table->integer('price')->nullable(true)->default(2000);
            $table->double('rating')->nullable(true)->dafault(4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuriyas');
    }
};
