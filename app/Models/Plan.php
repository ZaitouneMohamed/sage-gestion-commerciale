<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $fillable = ['name', 'slug', 'price', 'currency', 'interval', 'trial_days', 'description'];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    // Override the route key name to use the slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
