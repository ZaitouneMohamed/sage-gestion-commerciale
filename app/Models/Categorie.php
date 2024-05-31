<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'parent_id',
    ];
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
