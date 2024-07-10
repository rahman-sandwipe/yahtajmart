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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('web_name')->nullable();
            $table->string('web_tagline')->nullable();
            $table->string('web_link')->nullable();
            $table->string('web_logo')->nullable();
            $table->string('web_fevicon')->nullable();
            $table->string('web_timezone')->nullable();
            $table->mediumText('web_metatags')->nullable();
            $table->text('web_metadesc')->nullable();
            $table->string('web_authors')->nullable();
            $table->string('author_mail')->nullable();
            $table->string('author_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
