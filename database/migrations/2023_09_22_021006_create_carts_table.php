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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tenant_id')->foreign('tenant_id')->references('id')->on('tenants');
            $table->bigInteger('product_id')->foreign('product_id')->references('id')->on('products');
            $table->bigInteger('desk_id')->foreign('desk_id')->references('id')->on('desks');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
