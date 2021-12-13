<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table-> string('g_email', 255);
            $table-> string('g_remitente', 255);
            $table-> string('g_telefono', 255);
            $table-> string('g_nif', 255);
            $table-> string('g_bultos', 255);
            $table-> string('r_pais', 255);
            $table-> string('r_cp', 255);
            $table-> string('r_poblacion', 255);
            $table-> string('r_direccion', 255);
            $table-> string('r_atencion', 255)->default('');
            $table-> string('r_telefono', 255);
            $table-> string('r_contacto', 255);
            $table-> string('r_observaciones', 255)->nullable();
            $table-> string('e_pais', 255);
            $table-> string('e_cp', 255);
            $table-> string('e_provincia', 255);
            $table-> string('e_poblacion', 255);
            $table-> string('e_direccion', 255);
            $table-> string('e_numero', 255);
            $table-> string('e_escalera', 255)->default('');
            $table-> string('e_planta', 255)->default('');
            $table-> string('e_puerta', 255)->default('');
            $table-> string('e_destinatario', 255);
            $table-> string('e_telefono', 255);
            $table-> string('e_atencion', 255)->default('');
            $table-> string('e_observaciones', 255)->nullable();
            $table-> string('tarifa', 255);
            $table-> string('terminado', 255);
            $table-> string('tipo_servicio', 255)->nullable();
            $table-> string('asignado', 255)->nullable();
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
        Schema::dropIfExists('paquetes');
    }
}
