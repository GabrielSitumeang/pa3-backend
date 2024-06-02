<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajukans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('namatanaman');
            $table->string('judul');
            $table->Text('isi');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('ajukans');
    }
}
