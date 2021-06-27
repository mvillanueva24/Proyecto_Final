<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        
        //connection('mysql')->
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('genero');
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
        //connection('mysql')->
        Schema::dropIfExists('categories');
    }
}
