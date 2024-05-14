<?php

use App\Models\Acquisition;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Designation;
use App\Models\Property;
use App\Models\Status;
use App\Models\Subcategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('acquisitions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->foreignIdFor(Category::class, 'categ_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->unique();
        });

        Schema::create('properties_parent', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->foreignIdFor(Brand::class, 'brand_id')->constrained('brands')->cascadeOnDelete();
            $table->foreignIdFor(Category::class, 'categ_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignIdFor(Subcategory::class, 'subcateg_id')->constrained('subcategories')->cascadeOnDelete();
            $table->string('image')->nullable()->default('default.jpg');
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
            $table->unsignedTinyInteger('is_deleted')->default(0);
        });

        Schema::create('properties_child', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class, 'prop_id')->constrained('properties_parent')->cascadeOnDelete();
            $table->string('prop_code', 100);
            $table->string('description')->nullable();
            $table->string('serial_num', 100)->nullable()->unique();
            $table->foreignIdFor(Acquisition::class, 'type_id')->constrained('acquisitions')->cascadeOnDelete();
            $table->date('acq_date')->nullable();
            $table->decimal('acq_price', 10)->default(0);
            $table->date('warranty_date')->nullable();
            $table->date('stock_date');
            $table->date('inventory_date');
            $table->foreignIdFor(Designation::class, 'desig_id')->constrained('designations')->cascadeOnDelete();
            $table->foreignIdFor(Designation::class, 'condi_id')->constrained('conditions')->cascadeOnDelete();
            $table->foreignIdFor(Status::class, 'status_id')->constrained('statuses')->cascadeOnDelete();
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->unsignedTinyInteger('is_active')->default(1);
            $table->unsignedTinyInteger('is_deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('properties');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('acquisitions');
    }
};
