<?php

namespace App\Models;

use App\Models\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'parent_id',
        'company_id',
    ];

    protected $append = [
        "category_children"
    ];

    public function getCategoryChildrenAttribute()
    {
        $children = [];
        foreach ($this->children as $child) {
            $children[] = $child;
            $children = array_merge($children, $child->children);
        }
        return $children;
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }

    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);
    }
    public function children()
    {
        return $this->hasMany(Categorie::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Categorie::class, 'parent_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
