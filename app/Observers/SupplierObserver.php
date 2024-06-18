<?php

namespace App\Observers;

use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;

class SupplierObserver
{
    public function creating(Supplier $supplier): void
    {
        $supplier->company_id = Auth::user()->company_id;
    }
    /**
     * Handle the Supplier "created" event.
     */
    public function created(Supplier $supplier): void
    {
        //
    }

    /**
     * Handle the Supplier "updated" event.
     */
    public function updated(Supplier $supplier): void
    {
        //
    }

    /**
     * Handle the Supplier "deleted" event.
     */
    public function deleted(Supplier $supplier): void
    {
        //
    }

    /**
     * Handle the Supplier "restored" event.
     */
    public function restored(Supplier $supplier): void
    {
        //
    }

    /**
     * Handle the Supplier "force deleted" event.
     */
    public function forceDeleted(Supplier $supplier): void
    {
        //
    }
}
