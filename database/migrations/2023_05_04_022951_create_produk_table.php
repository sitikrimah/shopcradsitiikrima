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
        Schema::create('produk', function (Blueprint $table) {
            // $table->id();
            $table->string('kdproduk',6);
            $table->string('namaproduk',100);
            $table->string('merk',100);
            $table->string('jenisproduk',100);
            $table->string('harga',80);
            $table->string('stok',90);
            $table->string('kategori',50);
            $table->string('deskripsi',100);
            $table->text('foto');
            $table->primary('kdproduk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
