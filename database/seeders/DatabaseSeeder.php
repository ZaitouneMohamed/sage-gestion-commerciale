<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Super_admin_role_and_user::class);
        $this->call(PLanSeeder::class);
        $this->call(CompanieSeeder::class);
        \App\Models\User::factory(1)->create();
        // \App\Models\Categorie::factory(10)->create();
        // \App\Models\Supplier::factory(10)->create();
        // \App\Models\Customer::factory(10)->create();
        // \App\Models\Product::factory(50)->create();
        // \App\Models\Order::factory(100)->create();
        // \App\Models\OrderDetail::factory(500)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
