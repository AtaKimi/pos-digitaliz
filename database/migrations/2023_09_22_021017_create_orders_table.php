<?php

use App\Enums\OrderStatus;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desk_id')->constrained('desks');
            $table->string('code')->unique()->nullable();
            $table->enum('status', OrderStatus::getValues())->default(OrderStatus::PENDING);
            $table->boolean('is_paid')->default(false);
            $table->integer('sub_total')->default(0);
            $table->integer('tax_total')->default(0);
            $table->integer('service_total')->default(0);
            $table->integer('total')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
