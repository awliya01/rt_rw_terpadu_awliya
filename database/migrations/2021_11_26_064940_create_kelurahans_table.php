<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelurahan',50);
            $table->string('nama_lurah',100);
            $table->string('masa_jabatan',50);
            $table->string('no_tlp',15);
            $table->string('email');
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
        Schema::dropIfExists('tb_kelurahan');
    }
}
