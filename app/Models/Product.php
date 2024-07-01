<?php

namespace App\Models;

use App\Models\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref',
        'name',
        'price',
        'price_f',
        'tva',
        'category_id',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
    protected $appends = [
        'category_name',
        'supplier_name',
        'Qty'
    ];

    public function getCategoryNameAttribute(): string
    {
        return $this->category?->category_name ?? "gjw9";
    }

    public function getSupplierNameAttribute(): string
    {
        return $this->supplier?->supplier_name ?? "gjw9";
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function Mouvement()
    {
        return $this->hasMany(Mouvement::class);
    }
    //
    public function getQtyAttribute(): float
    {
        $entree = $this->Mouvement()->where('type' , 'entree')->sum("qte");
        $sortie = $this->Mouvement()->where('type' , 'sortie')->sum("qte");
        return $entree - $sortie;
    }
}
