<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SettingsController extends Controller
{
    public function Index(Request $request)
    {
        $data = Setting::where("company_id" , Auth::user()->company->id)->first();
        return Inertia::render('Admin/settings/Index' , compact('data'));
    }

    public function UpdateSettings(Setting $setting , Request $request)
    {
        $setting->update($request->all());
        return redirect()->back()->with([
            "success" => "data update with success"
        ]);
    }
}
