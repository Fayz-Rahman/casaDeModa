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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->string('hero_image');
            $table->string('thumbnail_image')->nullable();
            $table->string('badge')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('compare_at_price', 10, 2)->nullable();
            $table->unsignedInteger('inventory')->default(0);
            $table->unsignedSmallInteger('display_order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_new_arrival')->default(false);
            $table->boolean('is_best_seller')->default(false);
            $table->string('strap_material')->nullable();
            $table->string('dial_color')->nullable();
            $table->json('specifications')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();

            $table->index(['is_featured', 'is_new_arrival', 'is_best_seller']);
            $table->index(['category_id', 'brand_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
