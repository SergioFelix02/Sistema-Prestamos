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
        Schema::create('amortizacions', function (Blueprint $table) {
            $table->id();
            $table->integer('pago');
            $table->date('fecha');
            $table->foreignId('prestamo_id')->constrained()->cascadeOnDelete();
            $table->integer('interes');
            $table->foreignId('abono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amortizacions');
    }
};
