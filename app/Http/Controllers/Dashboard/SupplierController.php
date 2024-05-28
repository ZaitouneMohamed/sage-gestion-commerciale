<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Supplier::latest()->paginate(15);
        return Inertia::render("Admin/supplier/Index", compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "supplier_name" => "required|max:200"
        ]);
        Supplier::create($request->all());
        return redirect()->route('admin.supplier.index')->with([
            "success" => "supplier created with success"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $this->validate($request, [
            "supplier_name" => "required|max:200"
        ]);
        $supplier->update($request->all());
        return redirect()->route('admin.supplier.index')->with([
            "success" => "supplier updated with success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->back()->with(
            [
                "success" => "supplier delete with success"
            ]
        );
    }
}
