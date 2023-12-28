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
        Schema::create('transaksi_penjualan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('qty');
            $table->integer('paket');
            $table->bigInteger('total');
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status_payment',['paid','unpaid']);
            $table->enum('status_transaksi',["aproved","waiting","rejected"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penjualan');
    }
};


