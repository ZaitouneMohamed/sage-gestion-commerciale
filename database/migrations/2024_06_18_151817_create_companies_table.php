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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_email')->nullable();
            $table->string('company_phone')->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_ice')->nullable();
            $table->string('company_tax', 192)->nullable();
            $table->string('telegram_channel', 192)->nullable();

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

            $table->boolean('backup_status')->default(0);
            $table->string('backup_schedule')->nullable();

            $table->enum('receipt_printer_type', ['browser', 'printer'])->default('browser');
            $table->integer('printer_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
