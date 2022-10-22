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
        Schema::create('produk_pemesanan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->unsignedBigInteger('id_pemesanan');
            $table->foreign('id_pemesanan')->references('id')->on('desk_pemesanans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_pemesanan');
    }
};
