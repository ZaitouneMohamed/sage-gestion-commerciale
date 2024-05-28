<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class CustomarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::latest()->paginate(10);
        return Inertia::render('Admin/customer/Index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            "first_name" => "required|max:200",
            "last_name" => "required|max:200",
            "email" => "required|email|unique:customers,email|max:200",
        ]);
        Customer::create($request->all());
        return redirect()->back()->with(
            [
                "success" => "Customer create with success"
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
{
    $this->validate($request, [
        "first_name" => "required|max:200",
        "last_name" => "required|max:200",
        "email" => [
            "required",
            "email",
            Rule::unique('customers')->ignore($customer->id),
            "max:200"
        ],
    ]);

    $customer->update($request->all());

    return redirect()->route("admin.customer.index")->with('success', 'Customer updated with success');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->back()->with(
            [
                "success" => "Customer delete with success"
            ]
        );
    }
}
