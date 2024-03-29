<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recado', function (Blueprint $table) {
            $table->bigIncrements('idrecados');
            $table->char('titulo', 200);
            $table->string('conteudorecado')
            $table->foreing('idusuario')->refences('idusuario')->on('usuario')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
