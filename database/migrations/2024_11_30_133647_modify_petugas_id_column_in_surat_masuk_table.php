<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPetugasIdColumnInSuratMasukTable extends Migration
{
    /**
     * Jalankan migrasi untuk mengubah kolom 'petugas_id' agar bisa NULL.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_masuk', function (Blueprint $table) {
            $table->unsignedBigInteger('petugas_id')->nullable()->change();
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
            $table->unsignedBigInteger('petugas_id')->nullable(false)->change();
        });
    }
}
