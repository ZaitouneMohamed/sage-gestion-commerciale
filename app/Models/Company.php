<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'company_logo',
        'company_name',
        'company_email',
        'company_phone',
        'company_address',
        'company_tax',
        'telegram_channel',
        'default_date_format',
        'default_language',
        'invoice_footer_text',
        'invoice_header',
        'show_email',
        'show_address',
        'show_order_tax',
        'show_discount',
        'show_shipping',
        'backup_status',
        'backup_schedule',
        'receipt_printer_type',
        'printer_id',
    ];

    protected $casts = [
        'show_email' => 'boolean',
        'show_address' => 'boolean',
        'show_order_tax' => 'boolean',
        'show_discount' => 'boolean',
        'show_shipping' => 'boolean',
        'backup_status' => 'boolean',
    ];

    protected $attributes = [
        'default_language' => 'en',
        'show_email' => true,
        'show_address' => true,
        'show_order_tax' => true,
        'show_discount' => true,
        'show_shipping' => true,
        'backup_status' => false,
        'receipt_printer_type' => 'browser',
    ];
}
