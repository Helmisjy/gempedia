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
</div>

<div class="max-w-[1920px] mx-auto px-4 sm:px-6 lg:px-10 py-6 lg:py-8">

  <!-- LAYOUT: 2 columns -->
  <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.1fr] gap-6 lg:gap-8">

    <!-- LEFT COLUMN: produk & aksi -->
    <div class="bg-white rounded-[2.5rem] border border-slate-300  shadow-lg shadow-primary-500/5 p-6 md:p-7">
      
      <!-- status -->
      <div class="flex items-center gap-3 mb-5">
        <span class="w-3 h-3 rounded-full bg-secondary-500 shadow-[0_0_0_2px_rgba(42,157,143,0.25)] inline-block"></span>
        <span class="font-semibold text-primary-900 text-base">Finished<span class="font-normal text-primary-500 text-sm ml-1">· Estimasi hari ini</span></span>
      </div>

      <!-- product summary -->
        @foreach($order->items as $item)
        <div class="bg-primary-50/60 p-5 md:p-6 rounded-2xl border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center gap-5 mb-3">
            <div class="w-[88px] h-[88px] bg-primary-100/50 rounded-2xl flex items-center justify-center text-primary-600 text-4xl shrink-0 shadow-inner">
                <img src="{{ $item->game->cover}}" alt="">
            </div>
            <div class="flex-1">
                <h3 class="font-bold text-xl text-primary-900 tracking-[-0.3px]">{{ $item->title }}</h3>
                <div class="flex flex-wrap items-center gap-2 text-primary-600 text-sm font-medium mt-0.5">
                    <span><i class="fas fa-circle text-secondary-500 text-[10px]"></i> {{ $item->platform_name }}</span>
                    <span class="flex items-center gap-1"><i class="fas fa-tag text-primary-400 text-xs"></i>{{ $item->size_gb }} GB</span>
                </div>
            </div>
            <div class="font-bold text-xl text-primary-800 bg-white px-4 py-1.5 rounded-full border border-slate-200 shadow-sm shrink-0">
                {{ $item->size_gb }} GB
            </div>
        </div>
        @endforeach
    </div>

    <!-- RIGHT COLUMN: detail customer & pengiriman -->
    <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-lg shadow-primary-500/5 p-6 md:p-7 mb-5">
      <h4 class="text-lg font-semibold text-secondary-800 flex items-center gap-2 mb-5">
        <i data-lucide="circle-user-round"></i> Informasi Pemesan
      </h4>

      <div class="space-y-4">
        <!-- nama -->
        <div class="border-b border-slate-200 pb-3">
            <div class="flex justify-between">
                <span class="font-normal text-sm tracking-wide flex items-center gap-1.5">
                  <i data-lucide="user" class="text-primary-400"></i>Nama lengkap
                </span>
                <div class="font-semibold text-primary-900 flex items-center gap-2 mt-0.5">
                  {{ $order->customer_name }}<span class="bg-primary-100 text-primary-700 text-[0.65rem] font-semibold px-3 py-0.5 rounded-full">VIP</span>
                </div>
            </div>
        </div>

        <!-- email -->
        <div class="border-b border-slate-200 pb-3">
            <div class="flex justify-between">
                <span class="font-normal text-sm tracking-wide text-primary-500 flex items-center gap-1.5">
                  <i data-lucide="mail" class="text-primary-400"></i></i> Email
                </span>
                <div class="font-medium text-primary-900">{{ $order->email ?? '-' }}</div>
            </div>
        </div>

        <!-- whatsapp -->
        <div class="border-b border-slate-200 pb-3">
            <div class="flex justify-between">
                <span class="font-normal text-sm tracking-wide text-primary-500 flex items-center gap-1.5">
                  <i data-lucide="message-circle-check" class="text-primary-400"></i>Whatsapp
                </span>
                <div class="font-medium text-primary-900">{{ $order->whatsapp}}</div>
            </div>
        </div>

        <!-- Jumlah Game -->
        <div class="border-b border-slate-200 pb-3">
            <div class="flex justify-between">
                <span class="font-normal text-sm tracking-wide text-primary-500 flex items-center gap-1.5">
                  <i data-lucide="scroll-text" class="text-primary-400"></i>Jumlah Game
                </span>
                <div class="font-medium text-primary-900">{{ $order->total_games}}</div>
            </div>
        </div>

        <!-- Total Storage -->
        <div class="border-b border-slate-200 pb-3">
            <div class="flex justify-between">
                <span class="font-normal text-sm tracking-wide text-primary-500 flex items-center gap-1.5">
                  <i data-lucide="database" class="text-primary-400"></i>Jumlah Storage
                </span>
                <div class="font-medium text-primary-900">{{ $order->total_size_gb}} GB</div>
            </div>
        </div>

        <!-- Package -->
        <div class="border-b border-slate-200 pb-3">
            <div class="flex justify-between">
                <span class="font-normal text-sm tracking-wide text-primary-500 flex items-center gap-1.5">
                  <i data-lucide="box" class="text-primary-400"></i>Package
                </span>
                <div class="font-medium text-primary-900">{{ $order->recommended_package }}</div>
            </div>
        </div>

    </div>
  </div>
</div>

@endsection
