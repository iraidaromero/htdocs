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
        Schema::create('hermandades_bandas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_hermandad");
            $table->unsignedBigInteger("id_banda");
            $table->timestamps();
            $table->foreign("id_hermandad")->on("hermandades")->references("id");
            $table->foreign("id_banda")->on("bandas")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hermandades_bandas');
    }
};
