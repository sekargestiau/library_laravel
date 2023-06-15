<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinjam_buku', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_books')->unsigned();
            $table->string('nama');
            $table->string('nim');
            $table->string('prodi');
            $table->string('fakultas');
            $table->string('judul_buku');
            $table->string('kode_buku');
            $table->date('tgl_pinjam');
            $table->timestamps();
        });
        Schema::table('pinjam_buku', function(Blueprint $table){
            $table->foreign('id_books')->references('id')->on('books')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam_buku');
    }
};
