<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePupuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pupuks', function (Blueprint $table) {
            $table->id();
            $table->string('namatanaman');
            $table->string('judul');
            $table->longText('isi');
            $table->string('gambar_tanaman')->nullable();
            $table->string('keterangan');
            $table->enum('tahapanPupuk', ['Tahap Pembibitan', 'Tahap Vegetatif', 'Tahap Berbunga', 'Tahap Berbuah', 'Tahap Panen']);
            $table->enum('jenisPemupukan', ['Pemupukan Organik', 'Pemupukan Kimiawi']);
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
        Schema::dropIfExists('pupuks');
    }
}
