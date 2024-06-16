<?php

namespace App\Imports;

use App\Models\Categorie;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoriesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Categorie([
            'name' => $row[0],
        ]);
    }
}
