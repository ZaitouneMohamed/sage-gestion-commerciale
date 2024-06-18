<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductObserver
{
    public function creating(Product $product): void
    {
        $product->company_id = Auth::user()->company_id;
    }
    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        $product->company_id = Auth::user()->company_id;
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }
}
