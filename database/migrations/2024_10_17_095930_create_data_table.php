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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('NIP', 20);
            $table->string('Nama', 100);
            $table->string('Tempat', 100);
            $table->date('Tanggal_Lahir');
            $table->string('Jenis_Kelamin', 10);
            $table->string('Agama', 50);
            $table->string('Status', 20);
            $table->text('Alamat');
            $table->string('Posisi', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
