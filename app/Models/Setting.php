<?php

namespace App\Models;

use App\Models\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        "company_id",
        "facture_prefix",
        "show_email"
    ];

    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);
    }
    static public function getData()
    {
        $data = self::select("settings.*");

        // if (Request()->get('name')) {
        //     $data = $data->where('name', 'like', '%' . Request()->get('name') . '%');
        // }

        return $data->latest()->paginate(10);
    }
}
