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
            $table->tinyInteger('place_id');
            $table->text('title');
            $table->text('description');
            $table->text('vaccinator');
            $table->text('start');
            $table->text('end');
            $table->tinyInteger('type')->comment('0: Bình thường, 1: Dịch vụ');
            $table->float('cost', 0,15);
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
