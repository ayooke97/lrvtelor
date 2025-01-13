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
        Schema::create('pakan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kandang_id')->nullable()->constrained('kandang')->onDelete('cascade');
            $table->string('nama_pakan', 200);
            $table->string('komposisi');
            $table->date('tglmasuk');
            $table->date('tglkeluar');
            $table->integer('total');
            $table->integer('kebutuhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakan');
    }
};
