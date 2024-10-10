<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #4A90E2;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
            color: #666;
        }

        .form-control {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
        }

        #card-element {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }

        #card-errors {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }

        button {
            background-color: #4A90E2;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #357ABD;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Checkout</h2>
        <p>Plan: <strong>{{ $plan->name }}</strong></p>
        <p>Amount: <strong>${{ number_format($amount) }}</strong></p>

        <form id="payment-form">
            <div class="form-control">
                <label for="card-element">Credit or debit card</label>
                <div id="card-element"></div>
                <div id="card-errors" role="alert"></div>
            </div>
            <button type="submit">Subscribe</button>
        </form>

        <div class="footer">
            <p>Thank you for choosing our service!</p>
            <p>&copy; {{ date('Y') }} - {{ env('APP_NAME') }}</p>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        // Adding event listeners for form submission and errors
        document.getElementById('payment-form').addEventListener('submit', async (event) => {
            event.preventDefault();

            // Simple client-side validation
            if (document.getElementById('card-element').innerHTML === '') {
                document.getElementById('card-errors').textContent = "Please enter your card information.";
                return;
            }

            const { setupIntent, error } = await stripe.confirmCardSetup('{{ $clientSecret }}', {
                payment_method: {
                    card: cardElement,
                },
            });

            if (error) {
                document.getElementById('card-errors').textContent = error.message;
            } else {
                createSubscription(setupIntent.payment_method);
            }
        });

        async function createSubscription(paymentMethodId) {
            const response = await fetch('{{ route('admin.subscription.create') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    payment_method_id: paymentMethodId,
                    plan_id: '{{ $plan->id }}'
                }),
            });

            const data = await response.json();
            if (data.success) {
                // Redirect to success page or show success message
                window.location.href = '/success-page';
            } else {
                // Handle error
                document.getElementById('card-errors').textContent = data.message;
            }
        }
    </script>
</body>

</html>
