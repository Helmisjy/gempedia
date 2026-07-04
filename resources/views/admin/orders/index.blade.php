@extends('admin.layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Dashboard Order</h1>
            <p class="text-sm text-slate-500">Daftar order customer untuk layanan isi game.</p>
        </div>
    </div>

    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-600">Customer</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-600">Kontak</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-600">Game</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-600">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @foreach($orders as $order)
                    <tr>
                        <td class="px-4 py-3">{{ $order->customer_name }}</td>
                        <td class="px-4 py-3">{{ $order->whatsapp }}<br><span class="text-xs text-slate-500">{{ $order->email }}</span></td>
                        <td class="px-4 py-3">{{ $order->total_games }} game • {{ $order->total_size_gb }} GB</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full bg-cyan-100 px-3 py-1 text-sm text-cyan-700">{{ $order->status }}</span>
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.orders.show', $order) }}" class="text-sm font-semibold text-cyan-600">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $orders->links() }}
</div>
@endsection
