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
        Schema::create('billing_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('order_id');
            $table->string('customer_id');
            // $table->string('country');
            // $table->string('div_id');
            // $table->string('dist_id');
            // $table->string('upa_id');
            $table->mediumText('address');
            $table->string('phone');
            $table->string('email');
            $table->string('company_name')->nullable();
            $table->mediumText('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_details');
    }
};
