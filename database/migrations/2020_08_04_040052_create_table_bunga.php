<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBunga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bunga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode', 5)->unique();
            $table->string('nama', 50);
            $table->string('jenis', 50);
            $table->string('harga', 50);
            $table->string('keterangan', 100);
            $table->string('stok', 5);
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
        Schema::dropIfExists('bunga');
    }
}
