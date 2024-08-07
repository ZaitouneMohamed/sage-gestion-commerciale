<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categorie::latest()->where('parent_id' , null)->with('children')->paginate(7);
        $categories= Categorie::where('parent_id' , null)->get();
        return Inertia::render('Admin/categories/Index', compact('data',"categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "category_name" => "required|unique:categories,category_name|max:100",
        ]);
        Categorie::create($request->all());
        return redirect()->back()->with(
            [
                "success" => "Categorie create with success"
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $this->validate($request, [
            "category_name" => "required|unique:categories,category_name|max:100",
        ]);
        $categorie->update($request->all());
        return redirect()->back()->with(
            [
                "success" => "Categorie update with success"
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->back()->with(
            [
                "success" => "Categorie delete with success"
            ]
        );
    }
}
