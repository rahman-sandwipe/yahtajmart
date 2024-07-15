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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();            
            $table->string('blogID');
            $table->string('slug')->unique();
            $table->string('cat_id');
            $table->string('author_id');
            $table->string('headline');
            $table->integer('views')->default(0);
            $table->mediumText('intro');
            $table->longText('contents');
            $table->string('thumb');
            $table->string('caption')->nullable();
            $table->enum('status',['public','private'])->default('public');
            $table->string('meta_tags')->nullable();
            $table->string('meta_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
