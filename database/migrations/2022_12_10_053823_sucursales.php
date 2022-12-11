<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            //borrado en cascada, si borro en sucursales se borra en la parte de empresa y empleados
            $table->engine = "InnoDB";
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->string("direccion");
            $table->string("telefono");
            /*"empresa_id , dato para la relacion */
            $table->bigInteger("empresa_id")->unsigned();
            $table->timestamps();

            /* realizando la relacion con la tabla empresa */
            $table->foreign("empresa_id")->references("id")->on("empresas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
