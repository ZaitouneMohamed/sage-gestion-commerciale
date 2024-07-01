<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Mouvement;
use App\Models\Product;
use App\Services\GlobalServices;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MouvementController extends Controller
{
    protected $globalServices;

    public function __construct(GlobalServices $globalServices)
    {
        $this->globalServices = $globalServices;
    }

    public function index()
    {
        return Inertia::render("Admin/mouvement/Index", with([
            "data" => Mouvement::getData(),
            "products" => Product::all("id", "name"),
        ]));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => "required|exists:products,id",
            'motif' => "required|numeric",
            'type' => "required|in:entree,sortie",
            'qte' => "required|numeric",
        ]);

        Mouvement::create($validatedData);

        return redirect()->route('admin.mouvement.index')->with([
            'success' => "Mouvement created successfully"
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Mouvement $mouvement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mouvement $mouvement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mouvement $mouvement)
    {
        $this->validate($request, [
            'product_id' => "required|exists:products,id",
            'motif' => "required|numeric",
            'type' => "required|in:entree,sortie",
            'qte' => "required|numeric",
        ]);
        $mouvement->update($request->all());
        return redirect()->route('admin.mouvement.index')->with([
            'success' => "Mouvement edit with success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mouvement $mouvement)
    {
        if ($mouvement) {
            $mouvement->delete();
            return redirect()->route('admin.mouvement.index')->with([
                'success' => "Mouvement deleted with success"
            ]);
        }
    }
}
