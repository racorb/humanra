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
        Schema::create('business_packages', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->integer('package_id');
            $table->integer('status')->default(0); // 1 => disable; 0 => active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_packages');
    }
};
