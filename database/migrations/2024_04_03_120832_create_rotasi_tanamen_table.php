<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRotasiTanamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotasi_tanamen', function (Blueprint $table) {
            $table->id();
            $table->string('namatanaman');
            $table->string('judul');
            $table->longText('isi');
            $table->string('gambar_tanaman')->nullable();
            $table->string('keterangan');
            $table->enum('jenisInformasi', ['Sebelum', 'Sesudah']);
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
        Schema::dropIfExists('rotasi_tanamen');
    }
}
