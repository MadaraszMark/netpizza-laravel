<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pizza', function (Blueprint $table) {
            $table->string('nev')->primary();
            $table->string('kategorianev');
            $table->boolean('vegetarianus');
            $table->timestamps();

            $table->foreign('kategorianev')
                  ->references('nev')
                  ->on('kategoria')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pizza');
    }
};


