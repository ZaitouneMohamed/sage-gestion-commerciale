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

    protected $appends = [
        'company_logo',
    ];
    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getCompanyLogoAttribute()
    {
        return $this->Image ? asset("images/Company/" . $this->Image->url) : 'aaaa';
    }

}
