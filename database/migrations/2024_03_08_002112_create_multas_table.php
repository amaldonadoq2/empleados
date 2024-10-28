<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multas', function (Blueprint $table) {
            // Datos del vehiculo
            $table->id();
            $table->string('id_boleta');
            $table->unsignedBigInteger('id_tipo_placa');
            $table->foreign('id_tipo_placa')->references('id')->on('tipos_placas_vehiculos');
            $table->string('num_placa')->nullable();
            $table->string('num_tarjeta_circulacion')->nullable();
            $table->string('nit')->nullable();
            $table->unsignedBigInteger('id_tipo_vehiculo');
            $table->foreign('id_tipo_vehiculo')->references('id')->on('tipos_vehiculos');
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marcas_vehiculos');
            $table->unsignedBigInteger('id_color');
            $table->foreign('id_color')->references('id')->on('colores_vehiculos');
            // Datos del infractor
            $table->string('nombre_conductor')->nullable();
            $table->boolean('conductor_ausente')->nullable();
            $table->unsignedBigInteger('id_genero');
            $table->foreign('id_genero')->references('id')->on('generos');
            $table->string('num_licencia')->nullable();
            $table->unsignedBigInteger('id_tipo_licencia');
            $table->foreign('id_tipo_licencia')->references('id')->on('tipos_licencias');
            $table->string('num_documento')->nullable();
            $table->string('direccion_domiciliar')->nullable();
            // Datos de la infracción
            $table->string('lugar_infraccion');
            $table->datetime('fecha_hora_infraccion');
            // Artículos infringidos
            $table->string('articulo1')->nullable();
            $table->decimal('costo_articulo1', 9, 2)->nullable();
            $table->string('articulo2')->nullable();
            $table->decimal('costo_articulo2', 9, 2)->nullable();
            $table->string('articulo3')->nullable();
            $table->decimal('costo_articulo3', 9, 2)->nullable();
            $table->text('base_legal');
            $table->decimal('monto_total', 9, 2);
            $table->unsignedBigInteger('id_agente');
            $table->foreign('id_agente')->references('id')->on('users');
            $table->boolean('firma_conductor'); //Si ó No
            $table->text('observaciones')->nullable();
            // Descuento
            $table->decimal('descuento_aplicado', 9, 2)->default(0.00); //%
            $table->decimal('total_descuento', 9, 2)->default(0.00);
            $table->decimal('total_pagar', 9, 2)->default(0.00);
            $table->unsignedBigInteger('id_estado_multa');
            $table->foreign('id_estado_multa')->references('id')->on('estados_multas');
            $table->datetime('fecha_pago')->nullable();
            $table->string('num_recibo')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('multas');
    }
}
