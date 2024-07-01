<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CompanyController extends Controller
{
    public function index()
    {
        $data = User::findOrFail(Auth::user()->id)->with('Company')->get();;
        return Inertia::render("Admin/companie/Index",compact('data'));

    }
    public function update(Request $request)
    {

    }
}
