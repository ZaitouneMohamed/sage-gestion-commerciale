<?php

namespace App\Observers;

use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class CategorieObserver
{

    /**
     * Handle the Categorie "created" event.
     */
    public function creating(Categorie $categorie): void
    {
        $categorie->company_id = Auth::user()->company_id;
    }
    public function created(Categorie $categorie): void
    {
        //
    }

    /**
     * Handle the Categorie "updated" event.
     */
    public function updated(Categorie $categorie): void
    {
        //
    }

    /**
     * Handle the Categorie "deleted" event.
     */
    public function deleted(Categorie $categorie): void
    {
        //
    }

    /**
     * Handle the Categorie "restored" event.
     */
    public function restored(Categorie $categorie): void
    {
        //
    }

    /**
     * Handle the Categorie "force deleted" event.
     */
    public function forceDeleted(Categorie $categorie): void
    {
        //
    }
}
