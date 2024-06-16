<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcelImportExportController extends Controller
{
    public function ImportProducts(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);
        Excel::import(new ProductImport, $request->file);
        return back()->with('success', 'Excel Data Imported successfully.');
    }
    public function ImportCategoris(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);
        Excel::import(new ProductImport, $request->file);
        return back()->with('success', 'Excel Data Imported successfully.');
    }
}
