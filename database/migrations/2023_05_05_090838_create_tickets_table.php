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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('campaign_id');
            $table->text('name');
            $table->float('price', 0, 15)->nullable()->default(0);
            $table->tinyInteger('validity')->comment('0: None, 1: Giới hạn số lượng, 2: Giới hạn ngày')->default(0);
            $table->bigInteger('amount')->nullable()->default(0);
            $table->text('until')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
