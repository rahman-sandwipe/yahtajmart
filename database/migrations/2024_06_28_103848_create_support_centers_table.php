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
        Schema::create('support_centers', function (Blueprint $table) {
            $table->id();
            $table->string('m_number');
            $table->string('s_number')->nullable();
            $table->string('m_email');
            $table->string('s_email')->nullable();
            $table->string('m_address');
            $table->string('s_address')->nullable();
            
            $table->text('google_maps')->nullable();
            $table->text('contacts_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_centers');
    }
};
