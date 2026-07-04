<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('whatsapp');
            $table->string('email')->nullable();
            $table->string('shipping_method');
            $table->text('notes')->nullable();
            $table->string('status')->default('Pending');
            $table->unsignedInteger('total_games')->default(0);
            $table->decimal('total_size_gb', 10, 2)->default(0);
            $table->string('recommended_package')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
