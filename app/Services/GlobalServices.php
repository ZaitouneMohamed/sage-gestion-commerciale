<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class GlobalServices
{
    public function EditQtyProductAfterMouvement($productId, $qty, $status)
    {
        $product = Product::find($productId);

        if (!$product) {
            throw new \Exception('Product not found');
        }

        if ($status == 'entree') {
            $product->qty += $qty;
        } else {
            $product->qty -= $qty;
        }

        $product->save();
    }
}
