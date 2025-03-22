<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:8',
            'phone_number' => 'required|string|max:15',
            'city' => 'required|string|max:100',
        ]);

        Order::create($request->only(['name', 'phone_number', 'city']));

        return redirect()->route('watches.index')->with('success', 'Order created successfully!');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:8',
            'phone_number' => 'required|string|max:15',
            'city' => 'required|string|max:100',
        ]);
        $order->update($request->only(['name', 'phone_number', 'city']));
        return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }
}
