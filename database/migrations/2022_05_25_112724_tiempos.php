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
        //
        Schema::create('tiempos', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('consultors_id')->unique();//campo de relacion con consultors
            $table->string('nombre_consultor');
            $table->float('horas_acumuladas');
            $table->string('tiene_derecho',2);
            $table->float('horas_consumidas');
            $table->timestamps();
            //Relacion el campo tiempos.consultors_id es igual a consultors.id si borras consultor se borra el tiempo
            $table->foreign('consultors_id')->references('id')->on('consultors')->onDelete("cascade")->onUpdate("cascade");

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
