<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PLanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic Plan',
                'slug' => 'basic-plan',
                'price' => 9.99,
                'currency' => 'USD',
                'interval' => 'monthly',
                'trial_days' => 14,
                'description' => 'This is the basic plan with essential features.',
            ],
            [
                'name' => 'Standard Plan',
                'slug' => 'standard-plan',
                'price' => 19.99,
                'currency' => 'USD',
                'interval' => 'monthly',
                'trial_days' => 14,
                'description' => 'This plan offers more features and support.',
            ],
            [
                'name' => 'Premium Plan',
                'slug' => 'premium-plan',
                'price' => 29.99,
                'currency' => 'USD',
                'interval' => 'monthly',
                'trial_days' => 30,
                'description' => 'Our premium plan with all features included.',
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
