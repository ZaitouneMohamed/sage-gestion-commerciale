<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function OrdersList()
    {
        $data = Order::paginate(15);
        return Inertia::render('Admin/orders/Index',compact('data'));
        }

        public function CreateNewOrder()
        {
            $data = [
                "products" => Product::all(),
                "clients" => Customer::all(),
            ];
        return Inertia::render('Admin/orders/Create',compact('data'));

    }
}
