<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Reference to the user
            $table->unsignedBigInteger('plan_id'); // Reference to the plan
            $table->string('gateway'); // Payment gateway: 'stripe', 'paypal', 'cmi'
            $table->string('subscription_id')->nullable(); // Subscription ID from the gateway
            $table->string('payment_method_id')->nullable(); // ID of the payment method (e.g., for Stripe)
            $table->enum('status', ['active', 'inactive', 'canceled', 'trial', 'expired'])->default('active');
            $table->dateTime('trial_ends_at')->nullable(); // Trial end date
            $table->dateTime('ends_at')->nullable(); // Subscription end date
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
