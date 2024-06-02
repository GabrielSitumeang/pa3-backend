<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjukanInformasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajukan_informasis', function (Blueprint $table) {
            $table->id();
            $table->string('namatanaman');
            $table->string('judul');
            $table->longText('isi');
            $table->string('gambar_tanaman')->nullable();
            $table->string('keterangan');
            $table->enum('informasi', ['Rotasi Tanaman', 'Pemantauan', 'Persiapan Lahan', 'Penanaman', 'Pemupukan', 'Irigasi', 'Panen dan Pasca Panen', 'Hama dan Penyakit']);
            $table->enum('status', ['request', 'approve',])->default('request');
            $table->string('tahapan')->nullable();
            $table->text('gejala')->nullable();
            $table->text('rekomendasi')->nullable();
            $table->text('penyebab')->nullable();
            $table->text('tindakanpencegahan')->nullable();
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
        Schema::table('ajukan_informasis', function (Blueprint $table) {
            $table->dropColumn(['tahapan', 'gejala', 'rekomendasi', 'penyebab', 'tindakanpencegahan']);
        });
    }
}
