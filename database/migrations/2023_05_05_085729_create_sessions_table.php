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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('participant');
            $table->tinyInteger('place_id');
            $table->tinyInteger('type')->comment('0: Bình thường, 1: Dịch vụ');
            $table->float('price', 0,15);
            $table->text('start');
            $table->text('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
