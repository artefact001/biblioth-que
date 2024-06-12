<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}





// class AddLibelleColumnToCategoriesTable extends Migration {
    // public function up() {
    //     Schema::table('categories', function (Blueprint $table) {
    //         $table->string('libelle')->nullable(); // Vous pouvez ajuster les options selon vos besoins
    //     });
    // }

    // public function down() {
    //     Schema::table('categories', function (Blueprint $table) {
    //         $table->dropColumn('libelle');
    //     });
    // }
// }
