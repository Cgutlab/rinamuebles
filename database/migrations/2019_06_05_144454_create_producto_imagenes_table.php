<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_imagenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('imagen')->nullable();
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete("cascade");
            $table->string('orden')->nullable();
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
        Schema::dropIfExists('producto_imagenes');
    }
}
