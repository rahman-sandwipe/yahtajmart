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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('feedback_id');
            $table->string('client_id')->nullable();
            $table->string('author_id')->nullable();
            $table->string('thumb')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->text('description')->nullable();
            $table->enum('status',['public','private'])->default('private');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
