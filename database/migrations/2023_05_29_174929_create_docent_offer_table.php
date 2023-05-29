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
        Schema::create('docent_offer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docent_id');
            $table->unsignedBigInteger('offer_id');
            $table->date('application_date');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docent_offer');
    }
};
