<?php

namespace App\Observers;

use App\Models\Mouvement;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class MouvementObserver
{
    public function creating(Mouvement $mouvement): void
    {
        $product = Product::find(request()->product_id);
        $mouvement->stock_avant = $product->qty;
        $mouvement->company_id = Auth::user()->company_id;
        $mouvement->user_id = Auth::user()->id;
    }
    /**
     * Handle the Mouvement "created" event.
     */
    public function created(Mouvement $mouvement): void
    {
        //
    }

    /**
     * Handle the Mouvement "updated" event.
     */
    public function updated(Mouvement $mouvement): void
    {
        //
    }

    /**
     * Handle the Mouvement "deleted" event.
     */
    public function deleted(Mouvement $mouvement): void
    {
        //
    }

    /**
     * Handle the Mouvement "restored" event.
     */
    public function restored(Mouvement $mouvement): void
    {
        //
    }

    /**
     * Handle the Mouvement "force deleted" event.
     */
    public function forceDeleted(Mouvement $mouvement): void
    {
        //
    }
}
