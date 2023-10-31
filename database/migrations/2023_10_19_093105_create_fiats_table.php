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
        Schema::create('fiats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('symbol');
            $table->string('type');
            $table->string('currency_base');
            $table->string('currency_quote');
            $table->date('datetime');
            $table->double('open');
            $table->double('high');
            $table->double('low');
            $table->double('close');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiats');
    }
};
