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
        Schema::create('procurements', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('item_id');
        $table->foreign('item_id')->references('id')->on('items');
        $table->integer('order_quantity');
        $table->decimal('total_cost', 10, 2);
        $table->date('procurement_date');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurements');
    }
};