<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('code');
            $table->string('nama');
            $table->bigInteger('phone');
            $table->string('alamat');
            $table->string('team');
            $table->string('jersey');
            $table->enum('kategori', ['KOM 18-34', 'KOM 35-39','KOM 40-44','KOM 45-50','KOM UP 50','Non KOM','QOM 18-34','QOM Up 35']);
            $table->integer('paket');
            $table->enum('status',['belum registrasi','registrasi','racepack','racepack sudah diambil']);
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
        Schema::dropIfExists('members');
    }
};
