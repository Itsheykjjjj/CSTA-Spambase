<?php

use App\Models\Department;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Role::class, 'role_id')->constrained('roles')->cascadeOnDelete();
            $table->foreignIdFor(Permission::class, 'perm_id')->constrained('permissions')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 20)->unique();
            $table->string('pass_hash');
            $table->string('image')->default('default.jpg')->nullable();
            $table->string('lname', 100);
            $table->string('fname', 100);
            $table->string('mname', 100)->nullable();
            $table->foreignIdFor(Role::class, 'role_id')->constrained('roles')->cascadeOnDelete();
            $table->foreignIdFor(Department::class, 'dept_id')->constrained('departments')->cascadeOnDelete();
            $table->string('email', 255)->unique();
            $table->string('phone_num', 20)->unique()->nullable();
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
            $table->unsignedTinyInteger('is_deleted')->default(0);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('users');
        Schema::dropIfExists('role_permissions');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
