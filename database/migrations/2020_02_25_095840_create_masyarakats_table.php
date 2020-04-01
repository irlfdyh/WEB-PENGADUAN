<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            // buat Kolom
            $table->increments('id_masyarakat');
            $table->char('nik', 16)->unique();
            $table->string('nama', 35);
            $table->string('username', 25)->unique();
            $table->string('password');
            $table->string('telp', 13);
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
        Schema::dropIfExists('masyarakat');
    }
}
