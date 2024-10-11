<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PLan::latest()->paginate(10);
        return Inertia::render('super-admin/plans/Index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:plans,name',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:3',
            'interval' => 'required|in:daily,weekly,monthly,yearly',
            'trial_days' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
        ]);

        // Create the plan
        Plan::create($validatedData);
        return redirect()->route('super-admin.plan.index')->with([
            'success' => "Successfully updated"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:plans,name,' . $plan->id,
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:3',
            'interval' => 'required|in:daily,weekly,monthly,yearly',
            'trial_days' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
        ]);

        // Update the plan
        $plan->update($validatedData);
        return redirect()->route('super-admin.plan.index')->with([
            'success' => "Successfully updated"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('super-admin.plan.index')->with([
           'success' => "Successfully deleted"
        ]);
    }
}
