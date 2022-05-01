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
        Schema::create('informatives', function (Blueprint $table) {
            $table->id();            
            $table->string('d_codigo',6)->nullable();
            $table->string('d_asenta')->nullable();
            $table->string('d_tipo_asenta')->nullable();
            $table->string('D_mnpio')->nullable();
            $table->string('d_estado')->nullable();
            $table->string('d_ciudad')->nullable();
            $table->string('d_CP',6)->nullable();
            $table->integer('c_estado')->nullable();
            $table->string('c_oficina',6)->nullable();
            $table->string('c_CP',6)->nullable();
            $table->integer('c_tipo_asenta')->nullable();
            $table->integer('c_mnpio')->nullable();
            $table->string('id_asenta_cpcons',6)->nullable();
            $table->string('d_zona')->nullable();
            $table->integer('c_cve_ciudad')->nullable();
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
        Schema::dropIfExists('informatives');
    }
};
