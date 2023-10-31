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
        //
        Schema::table('cryptos', function(Blueprint $table){
            $table->json('datetime')->change();
            $table->json('open')->change();
            $table->json('high')->change();
            $table->json('low')->change();
            $table->json('close')->change();
        });
        Schema::table('stocks', function(Blueprint $table){
            $table->json('datetime')->change();
            $table->json('open')->change();
            $table->json('high')->change();
            $table->json('low')->change();
            $table->json('close')->change();
            $table->json('volume')->change();
        });
        Schema::table('commodities', function(Blueprint $table){
            $table->json('datetime')->change();
            $table->json('value')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
