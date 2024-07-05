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
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn([
                'default_date_format',
                'default_language',
                'invoice_footer_text',
                'invoice_header',
                'show_email',
                'show_address',
                'show_order_tax',
                'show_discount',
                'show_shipping',
                'show_ice',
                'backup_status',
                'backup_schedule',
                'receipt_printer_type',
                'printer_id',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('companies', function (Blueprint $table) {
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
        });
    }
};
