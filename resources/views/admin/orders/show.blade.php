@extends('admin.layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Detail Order</h1>
            <p class="text-sm text-slate-500">{{ $order->customer_name }} • {{ $order->whatsapp }}</p>
        </div>
        <form method="POST" action="{{ route('admin.orders.update', $order) }}">
            @csrf
            @method('PATCH')
            <select name="status" class="rounded-xl border border-slate-300 px-3 py-2">
                @foreach(['Pending','Diproses','Selesai','Dibatalkan'] as $status)
                    <option value="{{ $status }}" @selected($order->status === $status)>{{ $status }}</option>
                @endforeach
            </select>
            <button type="submit" class="ml-3 rounded-full bg-cyan-600 px-4 py-2 text-sm font-semibold text-white">Update Status</button>
        </form>
    </div>

    <div class="grid gap-6 lg:grid-cols-[1fr_0.6fr]">
        <div class="rounded-3xl border border-slate-200 bg-white p-6">
            <h2 class="mb-4 text-lg font-semibold">Daftar Game</h2>
            <ul class="space-y-3">
                @foreach($order->items as $item)
                    <li class="rounded-2xl border border-slate-200 px-4 py-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-semibold">{{ $item->title }}</p>
                                <p class="text-sm text-slate-500">{{ $item->platform_name }}</p>
                            </div>
                            <span class="text-sm font-semibold text-slate-700">{{ $item->size_gb }} GB</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="rounded-3xl border border-slate-200 bg-white p-6">
            <h2 class="mb-4 text-lg font-semibold">Informasi Order</h2>
            <dl class="space-y-3 text-sm text-slate-600">
                <div class="flex justify-between"><dt>Nama</dt><dd class="font-semibold text-slate-900">{{ $order->customer_name }}</dd></div>
                <div class="flex justify-between"><dt>WhatsApp</dt><dd class="font-semibold text-slate-900">{{ $order->whatsapp }}</dd></div>
                <div class="flex justify-between"><dt>Email</dt><dd class="font-semibold text-slate-900">{{ $order->email ?? '-' }}</dd></div>
                <div class="flex justify-between"><dt>Pengiriman</dt><dd class="font-semibold text-slate-900">{{ $order->shipping_method }}</dd></div>
                <div class="flex justify-between"><dt>Jumlah Game</dt><dd class="font-semibold text-slate-900">{{ $order->total_games }}</dd></div>
                <div class="flex justify-between"><dt>Total Storage</dt><dd class="font-semibold text-slate-900">{{ $order->total_size_gb }} GB</dd></div>
                <div class="flex justify-between"><dt>Paket</dt><dd class="font-semibold text-slate-900">{{ $order->recommended_package }}</dd></div>
                <div class="pt-3 border-t border-slate-200"><dt>Catatan</dt><dd class="mt-1 font-semibold text-slate-900">{{ $order->notes ?: '-' }}</dd></div>
            </dl>
        </div>
    </div>
</div>
@endsection
