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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->string('public_id');
            $table->string('author_id');
            $table->string('cat_id');
            $table->string('embed_code');
            $table->string('thumb');
            $table->text('intro');
            $table->enum('status',['public','private'])->default('public');
            $table->enum('flatform',['facebook','youtube'])->default('youtube');
            $table->text('meta_tags')->nullable();
            $table->text('meta_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
