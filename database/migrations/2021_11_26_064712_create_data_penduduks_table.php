<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_datapenduduk', function (Blueprint $table) {
            $table->id();
            $table->char('nik',16);
            $table->string('nama',100);
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan'])->nullable();
            $table->string('tempat_lahir',50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pekerjaan', 75)->nullable();
            $table->string('penghasilan',150)->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan',50)->nullable();
            $table->string('kelurahan',50)->nullable();
            $table->string('rt',50)->nullable();
            $table->string('rw',50)->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_rumah',50)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_id');
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
        Schema::dropIfExists('tb_datapenduduk');
    }
}
