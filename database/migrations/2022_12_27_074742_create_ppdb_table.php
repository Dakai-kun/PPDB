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
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->enum('JK', ['laki-laki','perempuan']);
            $table->string('nama');
            $table->string('sekolah');
            $table->string('n_sekolah')->nullable();
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('no_ay');
            $table->string('no_ib');
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
        Schema::dropIfExists('ppdb');
    }
};
