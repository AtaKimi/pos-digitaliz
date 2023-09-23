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
        Schema::create('tenant_service_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tenant_id')->foreign('tenant_id')->references('id')->on('tenants');
            $table->bigInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->date('transfer_at');
            $table->integer('total');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_service_payments');
    }
};
