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
        Schema::create('kandang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ayam_id')->constrained('ayam')->onDelete('cascade');
            $table->string('Nama', 200);
            $table->integer('Kapasitas');
            $table->string('Kondisi', 500);
            $table->integer('Jumlah');
            $table->string('Kesehatan', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandang');
    }
};
