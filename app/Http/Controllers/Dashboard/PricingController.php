<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Laravel\Cashier\Payment;
use Stripe\Exception\InvalidRequestException as StripeInvalidRequestException;
use Illuminate\Support\Arr;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PricingController extends Controller
{
    public function Index()
    {
        $data = Plan::all();
        return Inertia::render('Admin/pricing/Index', compact('data'));
    }

    public function checkout(Plan $plan , Request $request)
    {
        return $request->user()
            ->newSubscription($plan->product_id, $plan->gateway_id)
            ->checkout([
                'success_url' => route('success'),
                'cancel_url' => route('cancel'),
            ]);
    }

}
