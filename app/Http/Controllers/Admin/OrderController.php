<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::query()->latest()->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load('items.gamePlatform.platform');

        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'status' => ['required', 'in:Pending,Diproses,Selesai,Dibatalkan'],
        ]);

        $order->update($data);

        return redirect()->route('admin.orders.index')->with('success', 'Status order berhasil diperbarui.');
    }
}
