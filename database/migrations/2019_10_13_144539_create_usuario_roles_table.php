<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id','fk_usuariorole_roles')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_usuariorole_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('estado');
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
        Schema::dropIfExists('usuario_roles');
    }
}
