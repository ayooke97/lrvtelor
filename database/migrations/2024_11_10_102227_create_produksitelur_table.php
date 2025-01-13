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
        Schema::create('produksitelur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ayam_id')->constrained('ayam')->onDelete('cascade');
            $table->date('tglproduksi');
            $table->integer('jumlah');
            $table->string('kualitas');
            $table->integer('berat');
            $table->integer('ukuran');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksitelur');
    }
};
