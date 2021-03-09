<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktp', function (Blueprint $table) {
            $table->id('id');
            $table->string('NIK', 100 );
            $table->string('Nama', 999);
            $table->string('TempatLahir', 999);
            $table->date('TanggalLahir');
            $table->string('Jenis_Kelamin', 20);
            $table->string('Gol_Darah', 2);
            $table->string('Alamat', 999);
            $table->string('RT_RW', 20);
            $table->string('Dk', 256);
            $table->string('Ds', 256);
            $table->string('Kec', 256);
            $table->string('Agama', 20);
            $table->string('Status', 100);
            $table->string('Kerja', 100);
            $table->string('Kewarganegaraan', 256);
            $table->string('foto', 256);
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
        Schema::dropIfExists('ktp');
    }
}
