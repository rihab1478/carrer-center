<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtulisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utulisateur', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nom');
            $table->String('prenom');
            $table->String('email');
            $table->String('cin');
            $table->String('numero');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utulisateur');
    }
}
