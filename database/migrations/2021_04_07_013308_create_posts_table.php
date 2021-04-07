<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 500)->nullable();
            $table->string('url_limpia', 500)->nullable(); //tipo string si no mandamos longitud la toma de 254
            $table->text('contenido')->nullable(); //tipo text toma la longitud de manera dinamica
            $table->enum('posteado', ['si', 'no'])->default('no');; //Campo que te permite solo las opciones que especificas
            $table->bigInteger('id_categoria',false,true)->nullable(); //No es autoncrementable y si es nuleable
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
        Schema::dropIfExists('posts');
    }
}
