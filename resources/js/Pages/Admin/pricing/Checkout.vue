<template>
    <div class="checkout-container">
      <div class="checkout-box">
        <h2>Checkout</h2>
        <p>Plan: <strong>{{ plan.name }}</strong></p>
        <p>Amount: <strong>${{ (amount / 100).toFixed(2) }}</strong></p>

        <form @submit.prevent="handleSubmit">
          <div class="form-control">
            <label for="card-element">Credit or debit card</label>
            <div id="card-element" class="card-input"></div>
            <div v-if="error" class="error-message">{{ error }}</div>
          </div>
          <button :disabled="loading" class="submit-button">
            <span v-if="loading">Processing...</span>
            <span v-else>Subscribe</span>
          </button>
        </form>

        <div class="footer">
          <p>Thank you for choosing our service!</p>
          <p>&copy; {{ currentYear }} - {{ appName }}</p>
        </div>
      </div>
    </div>
  </template>

  <script>
  import { ref, onMounted } from 'vue';

  export default {
    props: {
      plan: Object,
      amount: Number,
      clientSecret: String,
    },
    setup(props) {
      const loading = ref(false);
      const error = ref(null);
      const currentYear = new Date().getFullYear();
      const appName = import.meta.env.VITE_APP_NAME;

      // Ensure Stripe is imported from the global window object
      const stripe = window.Stripe(import.meta.env.STRIPE_KEY);
      const elements = stripe.elements();
      const cardElement = elements.create('card');

      onMounted(() => {
        cardElement.mount('#card-element');
      });

      const handleSubmit = async () => {
        loading.value = true;
        error.value = null;

        const { setupIntent, error: stripeError } = await stripe.confirmCardSetup(props.clientSecret, {
          payment_method: { card: cardElement },
        });

        if (stripeError) {
          error.value = stripeError.message;
          loading.value = false;
        } else {
          createSubscription(setupIntent.payment_method);
        }
      };

      const createSubscription = async (paymentMethodId) => {
        try {
          const response = await fetch('/admin/subscription/create', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ payment_method_id: paymentMethodId, plan_id: props.plan.id }),
          });

          const data = await response.json();
          if (data.success) {
            window.location.href = '/success-page';
          } else {
            error.value = data.message;
          }
        } catch (err) {
          error.value = 'An error occurred. Please try again.';
        } finally {
          loading.value = false;
        }
      };

      return {
        loading,
        error,
        currentYear,
        appName,
        handleSubmit,
      };
    },
  };
  </script>


  <style scoped>
  .checkout-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f4f8;
  }

  .checkout-box {
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
    color: #4A90E2;
  }

  .form-control {
    margin-bottom: 20px;
    text-align: left;
  }

  .card-input {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
  }

  .error-message {
    color: red;
    margin-top: 10px;
  }

  .submit-button {
    background-color: #4A90E2;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }

  .submit-button:disabled {
    background-color: #ccc;
  }

  .footer {
    margin-top: 20px;
    font-size: 12px;
    color: #777;
  }
  </style>
