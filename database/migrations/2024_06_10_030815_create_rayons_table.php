<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRayonsTable extends Migration
{
    public function up()
    {
        Schema::create('rayons', function (Blueprint $table) {
            $table->id();
            $table->string('libelle'); // Name of the section
            $table->string('partie'); // Part of the library
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rayons');
    }
}
