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
        Schema::create('game_platforms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('platform_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('game_code')
                ->unique();

            $table->decimal('size_gb', 10, 2);

            $table->string('version')
                ->nullable();

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();

            $table->unique([
                'game_id',
                'platform_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_platforms');
    }
};
