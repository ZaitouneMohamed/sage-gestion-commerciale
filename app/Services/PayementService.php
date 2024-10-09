<?php

namespace App\Services;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayementService
{
    private $PayementMethod;

    public function __construct($payementMode)
    {
        $this->PayementMethod = $payementMode;
    }


    public function payMainFunction()
    {
        if ($this->PayementMethod == "paypal") {
            return $this->payByPaypal();
        }
        if ($this->PayementMethod == "stripe") {
            return $this->payByStripe();
        }

        if ($this->PayementMethod == "cmi") {
            return $this->payByCmi();
        }

    }

    public function payBYPaypal()
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $provider->setAccessToken($paypalToken);

        $order = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "100.00"
                    ]
                ]
            ]
        ]);

        if (isset($order['status']) && $order['status'] === 'CREATED') {
            // Find the approval URL in the PayPal response and return it
            foreach ($order['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return $link['href']; // This is the PayPal checkout URL
                }
            }
        }

        return "Unable to create PayPal order";
    }

    public function payByStripe()
    {
        return "Stripe";
    }

    public function payByCmi()
    {
        return "cmi";
    }

}
