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
        Schema::create('kasirs_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('PelangganID');
            $table->string('NamaPelanggan');
            $table->text('Alamat');
            $table->string('NomorTelepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasirs_pelanggan');
    }
};
