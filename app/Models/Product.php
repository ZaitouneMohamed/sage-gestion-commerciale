<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'description', 'price', 'stock_quantity',
        'category_id', 'supplier_id'
    ];

    protected $appends = [
        'categorie_name',
        'supplier_name',
    ];

    public function getCategorieNameAttribute(): string
    {
        return $this->category->category_name;
    }

    public function getSupplierNameAttribute(): string
    {
        return $this->supplier->supplier_name;
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
