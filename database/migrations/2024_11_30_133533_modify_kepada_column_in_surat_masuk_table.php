<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyKepadaColumnInSuratMasukTable extends Migration
{
    /**
     * Jalankan migrasi untuk mengubah kolom 'kepada' agar bisa NULL.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_masuk', function (Blueprint $table) {
            $table->string('kepada')->nullable()->change();
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
            $table->string('kepada')->nullable(false)->change();
        });
    }
}
