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
        $data = Order::latest()->paginate(15);
        return Inertia::render('Admin/orders/Index', compact('data'));
    }

    public function CreateNewOrder()
    {
        $data = [
            "products" => Product::all(),
            "clients" => Customer::all(),
        ];
        return Inertia::render('Admin/orders/Create', compact('data'));
    }

    public function StoreOrder(Request $request)
    {
        $this->validate($request, [
            "customer" => "required|exists:customers,id",
            "date" => "required|date"
        ]);
        try {
            $order = Order::create([
                "customer_id" => $request->customer,
                "order_date" => $request->date,
            ]);
            foreach ($request->selectedProducts as $item) {
                $order->orderDetails()->create([
                    'product_name' => $item['name'],
                    'product_ref' => $item['ref'],
                    'product_price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'remise' => $item['remise']
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->route("admin.order.list")->with([
            "success" => "Order create with success"
        ]);
    }
}
