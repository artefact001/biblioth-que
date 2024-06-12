<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date_de_publication');
            $table->integer('nombre_de_pages');
            $table->string('auteur');
            $table->string('isbn');
            $table->string('editeur');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('rayon_id');
            $table->unsignedBigInteger('categorie_id');
            $table->timestamps();

            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('livres');
    }
};

