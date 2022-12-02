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
        Schema::create('responden', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kusioner');
            $table->string('nama');
            $table->string('telp');
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('no_antrian');
            $table->boolean('selesai')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responden');
    }
};
