<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPetugasIdNullableInSuratMasukTable extends Migration
{
    /**
     * Jalankan migrasi untuk mengubah kolom 'petugas_id' menjadi nullable.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_masuk', function (Blueprint $table) {
            $table->unsignedBigInteger('petugas_id')->nullable()->change(); // Mengubah kolom petugas_id untuk bisa NULL
        });
    }

    /**
     * Membatalkan migrasi jika diperlukan.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_masuk', function (Blueprint $table) {
            $table->unsignedBigInteger('petugas_id')->nullable(false)->change(); // Mengubah kembali agar tidak bisa NULL
        });
    }
}
