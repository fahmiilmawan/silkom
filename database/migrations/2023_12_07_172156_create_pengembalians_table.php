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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_barang')->unsigned();
            $table->foreign('id_user')->references('id')->on('user')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_barang')->references('id')->on('barang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->dateTime('waktu_pengembalian');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian');
    }
};
