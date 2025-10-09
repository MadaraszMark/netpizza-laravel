<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategoria', function (Blueprint $table) {
            $table->string('nev')->primary();  // kategória neve = kulcs
            $table->integer('ar');             // kategória ára (Ft)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kategoria');
    }
};



