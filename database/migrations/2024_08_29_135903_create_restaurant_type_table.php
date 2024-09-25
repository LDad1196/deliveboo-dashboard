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

        Schema::create('restaurant_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')->constrained()->cascadeOnDelete(); //CASCADEONDELETE MI SERVE PER CANCELLARE IL PROGETTO SENNO CON IL CONSTRAINED MI DA ERRORE;
            $table->foreignId('type_id')->constrained()->cascadeOnDelete(); //CASCADEONDELETE MI SERVE PER CANCELLARE IL PROGETTO SENNO CON IL CONSTRAINED MI DA ERRORE;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_type');
    }
};
