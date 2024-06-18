<?php

namespace App\Models;

use App\Models\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'address','company_id',
        'city', 'postal_code', 'country', 'date_of_birth'
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
