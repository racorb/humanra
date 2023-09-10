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
        Schema::create('deadline_companies', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('start_date');
            $table->string('finish_date');
            $table->integer('status')->default(1)->comment('0 => disable; 1 => enable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deadline_companies');
    }
};
