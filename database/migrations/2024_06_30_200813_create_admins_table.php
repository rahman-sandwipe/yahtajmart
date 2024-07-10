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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('adminID')->unique();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->enum('role',['author','seller','admin'])->default('seller');
            $table->enum('status',['public','private'])->default('private');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
