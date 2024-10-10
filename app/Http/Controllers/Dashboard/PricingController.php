<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use App\Services\PayementService;
use Illuminate\Http\Request;
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
        return Inertia::render('Admin/pricing/Checkout' , compact('plan'));
    }

    public function createSubscription(Request $request, Plan $plan)
    {
        // Validate the incoming request if necessary
        $request->validate([
            'payementMode' => 'required|string',
        ]);

        // Initialize the payment service with the selected payment method
        $paymentService = new PayementService($request->payementMode);

        // Process the payment
        $paymentResult = $paymentService->payMainFunction();

        // Check if the paymentResult is a URL for PayPal
        if (filter_var($paymentResult, FILTER_VALIDATE_URL)) {
            return redirect()->away($paymentResult); // Redirect to PayPal checkout page
        }

        dd($paymentResult);

        // Handle other payment methods and log success or failure
        if ($paymentResult === "Stripe payment successful" || $paymentResult === "CMI payment successful") {
            // Create a new subscription record in the database
            Subscription::create([
                'user_id' => auth()->user()->id,
                'plan_id' => $plan->id,
                'payment_method' => $request->payementMode,
                'status' => 'active',
                'trial_ends_at' => now()->addDays($plan->trial_days),
                'ends_at' => now()->addMonths(1), // Adjust based on your billing cycle
            ]);

            return redirect()->route('success.page'); // Redirect to a success page
        }

        // If the payment failed, redirect to an error page with an error message
        dd('Payment failed: ' . $paymentResult);
    }



}
