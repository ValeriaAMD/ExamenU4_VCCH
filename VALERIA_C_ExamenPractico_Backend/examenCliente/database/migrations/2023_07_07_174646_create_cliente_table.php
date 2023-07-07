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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('name_complete');
            $table->date('birthdate');
            $table->string('address')->nullable();
            $table->string('city_CP')->nullable();
            $table->string('phone')->nullable();
            $table->string('e_address')->nullable();
            $table->timestamp('fecha_alta')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('client_grup')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
