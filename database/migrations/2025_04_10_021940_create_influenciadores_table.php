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
        Schema::create('influenciadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('instagram_usuario')->unique();
            $table->unsignedInteger('seguidores');
            $table->string('categoria');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influenciadores');
    }
};
