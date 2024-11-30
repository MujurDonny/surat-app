<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->unique();
            $table->string('kode_surat')->nullable();
            $table->date('tanggal_surat');
            $table->text('perihal');
            $table->string('pengirim');
            $table->string('kepada');
            $table->enum('jenis_surat', ['Undangan', 'Surat Tugas', 'Surat Resmi', 'Lainnya']);
            $table->enum('sifat', ['Rahasia', 'Penting', 'Biasa']);
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surat_masuk');
    }
}

