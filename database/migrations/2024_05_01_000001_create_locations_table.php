<?php

use App\Models\Department;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('dept_code', 10)->unique();
            $table->string('name', 100)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->foreignIdFor(Department::class, 'dept_id')->constrained('departments')->cascadeOnDelete();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('designations');
        Schema::dropIfExists('departments');
    }
};
