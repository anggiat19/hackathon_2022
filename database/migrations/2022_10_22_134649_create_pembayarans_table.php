<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konsumen');
            $table->foreign('id_konsumen')->references('id')->on('konsumens');
            $table->unsignedBigInteger('id_pemesanan');
            $table->foreign('id_pemesanan')->references('id')->on('desk_pemesanans');
            $table->double('total_biaya');
            $table->enum('status', ['lunas', 'belum lunas']);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
