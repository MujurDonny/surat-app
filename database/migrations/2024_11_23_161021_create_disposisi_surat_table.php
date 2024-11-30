<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiSuratTable extends Migration
{
    public function up()
    {
        Schema::create('disposisi_surat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surat_masuk_id');
            $table->foreign('surat_masuk_id')->references('id')->on('surat_masuk')->onDelete('cascade');
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('catatan');
            $table->enum('status', ['Diterima', 'Diproses', 'Selesai']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disposisi_surat');
    }
}

