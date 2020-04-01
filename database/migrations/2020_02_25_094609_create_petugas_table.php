<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id_petugas');
            $table->string('nama_petugas', 35);
            $table->string('username', 25)->unique();
            $table->string('password');
            $table->string('telp', 13);
            $table->enum('level',['admin', 'petugas']);
            $table->unsignedInteger('user_id');

            $table->foreign('user_id')
                ->on('users') // relasi ke table mana
                ->references('id') // kolom apa yang berlasi
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('petugas');
    }
}
