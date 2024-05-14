<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('priorities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('priorities');
        Schema::dropIfExists('statuses');
        Schema::dropIfExists('conditions');
    }
};
