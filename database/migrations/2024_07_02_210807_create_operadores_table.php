<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operadores', function (Blueprint $table) {
            $table->id();
            $table->string('paterno',50);
            $table->string('materno',50);
            $table->string('nombres',20);
            $table->decimal('ci',15);
            $table->string('opera',20);
            $table->string('cargo',50);
            $table->string('password', 10);
            $table->dateTime('f_cambio');
            $table->dateTime('f_caduca');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operadores');
    }
};
