<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hamas', function (Blueprint $table) {
            $table->id();
            $table->string('namatanaman');
            $table->string('judul');
            $table->longText('gejala');
            $table->string('info_lebih_lanjut');
            $table->longText('rekomendasi');
            $table->longText('pengendalian_hayati');
            $table->longText('pengendalian_kimiawi');
            $table->longText('obati_penyebab');
            $table->longText('tindakan_pencegahan');
            $table->longText('cegah_penyebab');
            $table->string('gambar_tanaman')->nullable();
            $table->string('keterangan');
            $table->enum('tahapanPupuk', ['Tahap Pembibitan', 'Tahap Vegetatif', 'Tahap Berbunga', 'Tahap Berbuah', 'Tahap Panen']);
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
        Schema::dropIfExists('hamas');
    }
}
