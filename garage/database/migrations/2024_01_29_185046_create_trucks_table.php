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
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 64);
            $table->string('plate', 64);
            $table->unsignedBigInteger('mechanic_id')->nullable();              // sukuriamas mechaniku id truck lenteleje
            $table->foreign('mechanic_id')->references('id')->on('mechanics');   // rysio aprašas tarp lenteliu: i uzsieni keliauja/rysi daro mechaniku id stulpelis. su kuo jis susirisa - su stulpeliu id. , kur jis randasi - mechanics lenteleje.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
