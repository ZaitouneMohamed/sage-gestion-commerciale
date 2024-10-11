<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $fillable = ['name', 'slug', 'price', 'currency', 'interval', 'trial_days', 'description'];

    public $timestamps = false;
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    // Override the route key name to use the slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($plan) {
            // Generate the slug from the name
            $plan->slug = Str::slug($plan->name);
        });
    }
}
