<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id(); // ID único para cada tarjeta
            $table->string('number'); // Número de la tarjeta
            $table->string('expiry'); // Fecha de expiración
            $table->string('cvc'); // Código CVC
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
