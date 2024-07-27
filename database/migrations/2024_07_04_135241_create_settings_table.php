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
            $table->string('default_date_format')->nullable();
            $table->string('default_language', 192)->default('en');
            $table->string('invoice_footer_text')->nullable();
            $table->string('invoice_header')->nullable();
            $table->boolean('show_email')->default(1);
            $table->boolean('show_address')->default(1);
            $table->boolean('show_order_tax')->default(1);
            $table->boolean('show_discount')->default(1);
            $table->boolean('show_shipping')->default(1);
            $table->boolean('show_ice')->default(1);
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
