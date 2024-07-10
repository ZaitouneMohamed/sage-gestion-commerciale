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
        'company_ice',
        'telegram_channel',
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
        return $this->Image ? asset("images/Company/" . $this->Image->url) : '';
    }

}
