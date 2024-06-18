<?php

namespace App\Models;

use App\Models\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        "supplier_name",
        "contact_name",
        "address",
        "city",
        'company_id',
        "postal_code",
        "phone",
        "email"
    ];

    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
}
