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
        Schema::create('kasirs_produk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ProdukID');
            $table->string('NamaProduk');
            $table->decimal('Harga', 10, 2);
            $table->integer('Stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasirs_produk');
    }
};
