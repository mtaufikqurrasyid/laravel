<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamTable extends Migration
{
    public function up()
    {
        Schema::create('peminjam', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('nama_peminjam');
            $table->string('judul_buku');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjam');
    }
}