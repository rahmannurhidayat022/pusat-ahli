<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('no_registrasi',25);
            $table->string('nama',50);
            $table->string('email');
            $table->string('no_hp',13);
            $table->enum('status',['SD/Sederajat','SMP/Sederajat','SMA/Sederajat','Mahasiswa','Umum']);
            $table->enum('waiting_fitur',['BA','TA']);
            $table->string('place',100);
            $table->enum('is_buy',['yes','no']);
            $table->enum('beli_koin',['1','2']);
            $table->enum('mapel',['MTK','Fisika','Biologi','Kimia','Geografi','Sejarah','Bahasa Indonesia']);
            $table->string('bukti_follow');
            $table->string('harga_total');
            $table->string('bukti_transfer');
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
        Schema::dropIfExists('registers');
    }
}
