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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('public_id');
            $table->string('author_id');
            $table->string('cat_id')->nullable();
            $table->string('title');
            $table->mediumText('intro');
            $table->string('file_size');
            $table->string('r_price');
            $table->string('s_price');
            $table->string('thumb');
            $table->string('images');
            $table->enum('status',['public','private'])->default('public');
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
        Schema::dropIfExists('photos');
    }
};
