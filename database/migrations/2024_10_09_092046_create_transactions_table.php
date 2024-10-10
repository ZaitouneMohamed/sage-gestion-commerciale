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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Reference to the user
            $table->unsignedBigInteger('subscription_id'); // Reference to the subscription
            $table->string('gateway'); // 'stripe', 'paypal', 'cmi'
            $table->string('transaction_id'); // Transaction ID from the gateway
            $table->decimal('amount', 8, 2); // Amount charged
            $table->string('currency')->default('MAD'); // Currency used in the transaction
            $table->enum('status', ['pending', 'completed', 'failed']); // Transaction status
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
