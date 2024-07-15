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
            $table->string('productID')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('author_id');
            $table->string('title');
            $table->string('thumb');
            $table->string('width_or_size');
            $table->string('total_stock');
            $table->mediumText('sort_desc');
            $table->text('description')->nullable();
            $table->text('aditional_info')->nullable();
            $table->string('slug');
            $table->string('regular_price');
            $table->string('offer_price')->default(0);
            $table->string('total_discount')->default(0);
            $table->string('cat_id')->nullable();
            $table->enum('condition',['New','Best','Recommend','Sale'])->default('Sale');
            $table->enum('status',['public','private'])->default('public');
            $table->string('s_tags')->nullable();
            $table->mediumText('meta_tags')->nullable();
            $table->mediumText('meta_desc')->nullable();
            $table->timestamps();
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
