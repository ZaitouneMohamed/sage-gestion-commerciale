<?php

namespace App\Models;

use App\Models\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model
{
    use HasFactory;
    protected $table = 'mouvements';
    protected $fillable = ['product_id', 'motif', 'type', 'stock_avant', 'qte', 'user_id', 'observation','company_id'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    protected $appends = [
        'added_by',
        'product_name',
    ];
    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);
    }
    public function getAddedByAttribute(): string
    {
        return $this->user?->name ?? "";
    }
    public function getProductNameAttribute(): string
    {
        return $this->product?->name ?? "";
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static public function getData()
    {
        $data = self::select("mouvements.*");

        // if (Request()->get('name')) {
        //     $data = $data->where('name', 'like', '%' . Request()->get('name') . '%');
        // }

        return $data->latest()->paginate(10);
    }
}
