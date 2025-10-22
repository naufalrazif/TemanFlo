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
        Schema::create('produks', function (Blueprint $table) {
    $table->id();
    $table->enum('jenis_buket', ['buket_bunga', 'buket_snack', 'buket_boneka', 'buket_uang']);
    $table->set('tema', ['graduation', 'birthday', 'wedding']);
    $table->enum('size', ['kecil', 'sedang', 'besar']);
    $table->text('deskripsi');
    $table->decimal('harga', 10, 2);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
