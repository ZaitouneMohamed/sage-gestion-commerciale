<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends Controller
{
    public function Index(Request $request)
    {
        $data = Setting::getData();
        return Inertia::render('Admin/settings/Index' , compact('data'));

    }
}
