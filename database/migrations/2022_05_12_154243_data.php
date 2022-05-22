<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Data extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //koneksi tabel
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('isbn')->unique();
            $table->string('judul_buku');
            $table->string('pengarang', 64);
            $table->string('penerbit');
            $table->integer('tahun_terbit');
            $table->integer('cetakan');
            $table->integer('jumlah_halaman');
            $table->integer('image')->nullable();
            $table->date('updated_at')->nullable();
            $table->char('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('tb_buku');
    }
}
