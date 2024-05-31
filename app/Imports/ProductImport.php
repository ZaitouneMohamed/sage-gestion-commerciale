<?php

namespace App\Imports;

use App\Models\Categorie;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $parentCategory = Categorie::firstOrCreate(
            ['category_name' => $row[1]],
            ['parent_id' => null]
        );

        $subCategory = Categorie::firstOrCreate(
            ['category_name' => $row[2], 'parent_id' => $parentCategory->id]
        );

        // Create the product and associate it with the subcategory
        return new Product([
            'ref' => $row[0],
            'name' => $row[3],
            'price' => $row[4],
            'price_f' => $row[4],
            'tva' => $row[5],
            'category_id' => $subCategory->id,
        ]);
    }
}
