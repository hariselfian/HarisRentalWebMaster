<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangSewaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_sewaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('harga');
            $table->string('deskripsi');
            $table->Integer('category_id')->unsigned();
            $table->string('image');
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
        Schema::dropIfExists('barang_sewaans');
    }
}
