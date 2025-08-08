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
        Schema::create('log_base_reports', function (Blueprint $table) {
            $table->id();
            $table->string('log_base');
            $table->string('ration_status');
            $table->string('pol_status');
            $table->string('ammunition_status');
            $table->string('medical_sup_status');
            $table->longText('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_base_reports');
    }
};
