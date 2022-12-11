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
        Schema::create('empleados', function (Blueprint $table) {
            //borrado en cascada, si borro en empleados se borra en la parte de sucursales t empresa
            $table->engine = "InnoDB";
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("dni");
            $table->string("telefono");
            /*"sucursal_id , dato para la relacion */
            $table->bigInteger("sucursal_id")->unsigned();
            $table->timestamps();

            /* realizando la relacion con la tabla categoria */
            $table->foreign("sucursal_id")->references("id")->on("sucursales")->onDelete("cascade");
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
