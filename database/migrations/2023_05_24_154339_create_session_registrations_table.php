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
        Schema::create('session_registrations', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('session_id');
            $table->tinyInteger('registration_id');
            $table->timestamps();
        });
        Artisan::call('db:seed');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_registrations');
    }
};
