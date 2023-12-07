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
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_peminjaman')->unsigned();
            $table->bigInteger('id_pengembalian')->unsigned();
            $table->foreign('id_peminjaman')->references('id')->on('peminjaman')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_pengembalian')->references('id')->on('pengembalian')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('status');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
