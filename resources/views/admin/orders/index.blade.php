@extends('admin.layouts.app')

@section('content')

    <!-- Mobile Title & CTA (Visible only on small screens) -->
    <div class="flex flex-col gap-4 mb-6 sm:hidden">
        <h2 class="font-bold text-2xl text-foreground">Donations</h2>
        <button onclick="showAddDonationModal()" class="flex items-center justify-center gap-2 w-full py-3 bg-primary text-white rounded-xl font-semibold hover:bg-primary-hover transition-all duration-300 cursor-pointer">
            <i data-lucide="plus" class="size-5"></i>
            <span>New Donation</span>
        </button>
    </div>

    <!-- Financial Stats (4-column grid) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-4 md:mb-6">
      <!-- Total -->
      <div class="flex flex-col rounded-2xl border border-border p-6 gap-3 bg-white">
        <div class="flex items-center gap-[6px]">
          <div class="size-11 bg-primary/10 rounded-xl flex items-center justify-center shrink-0">
            <i data-lucide="wallet" class="size-6 text-primary"></i>
          </div>
          <p class="font-medium text-secondary">Total Orders</p>
        </div>
        <p class="font-bold text-[32px] leading-10">{{ $totalOrders }}</p>
      </div>
      <!-- Zakat -->
      <div class="flex flex-col rounded-2xl border border-border p-6 gap-3 bg-white">
        <div class="flex items-center gap-[6px]">
          <div class="size-11 bg-success/10 rounded-xl flex items-center justify-center shrink-0">
            <i data-lucide="coins" class="size-6 text-success"></i>
          </div>
          <p class="font-medium text-secondary">Net Profit</p>
        </div>
        <p class="font-bold text-[32px] leading-10">IDR {{ number_format($netProfit, 0, ',', '.') }}</p>
      </div>
      <!-- Sadaqah -->
      <div class="flex flex-col rounded-2xl border border-border p-6 gap-3 bg-white">
        <div class="flex items-center gap-[6px]">
          <div class="size-11 bg-info/10 rounded-xl flex items-center justify-center shrink-0">
            <i data-lucide="heart-handshake" class="size-6 text-info"></i>
          </div>
          <p class="font-medium text-secondary">Revenue</p>
        </div>
        <p class="font-bold text-[32px] leading-10">IDR {{ number_format($totalRevenue, 0, ',', '.') }}</p>
      </div>
      <!-- Waqf -->
      <div class="flex flex-col rounded-2xl border border-border p-6 gap-3 bg-white">
        <div class="flex items-center gap-[6px]">
          <div class="size-11 bg-warning/10 rounded-xl flex items-center justify-center shrink-0">
            <i data-lucide="building" class="size-6 text-warning-dark"></i>
          </div>
          <p class="font-medium text-secondary">Total Games</p>
        </div>
        <p class="font-bold text-[32px] leading-10">{{ $totalGames }} Games</p>
      </div>
    </div>

    <!-- Controls: Search & Filter -->
    <div class="flex flex-col sm:flex-row gap-4 mb-6">
      <div class="relative flex-1">
        <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 size-5 text-secondary"></i>
        <input type="text" class="w-full h-12 pl-11 pr-4 rounded-2xl ring-1 ring-border focus:ring-2 focus:ring-primary outline-none font-medium transition-all duration-300 bg-white" placeholder="Search donor, code, or program...">
      </div>
      <div class="relative w-full sm:w-48 shrink-0">
        <select class="w-full h-12 pl-4 pr-10 rounded-2xl ring-1 ring-border focus:ring-2 focus:ring-primary outline-none font-medium transition-all duration-300 bg-white text-foreground">
          <option value="">All Types</option>
          <option value="zakat">Zakat</option>
          <option value="sadaqah">Sadaqah</option>
          <option value="waqf">Waqf</option>
        </select>
      </div>
      <div class="relative w-full sm:w-48 shrink-0">
        <select class="w-full h-12 pl-4 pr-10 rounded-2xl ring-1 ring-border focus:ring-2 focus:ring-primary outline-none font-medium transition-all duration-300 bg-white text-foreground">
          <option value="">All Status</option>
          <option value="verified">Verified</option>
          <option value="pending">Pending</option>
          <option value="rejected">Rejected</option>
        </select>
      </div>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-3xl border border-border overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[1100px]">
          <thead class="bg-muted/50 border-b border-border">
            <tr>
              <th class="w-[25%] px-6 py-4 text-left text-xs font-semibold text-secondary uppercase tracking-wider">Customer</th>
              <th class="w-[15%] px-6 py-4 text-left text-xs font-semibold text-secondary uppercase tracking-wider">Contact</th>
              <th class="w-[10%] px-6 py-4 text-left text-xs font-semibold text-secondary uppercase tracking-wider">Game</th>
              <th class="w-[15%] px-6 py-4 text-left text-xs font-semibold text-secondary uppercase tracking-wider">Amount</th>
              <th class="w-[10%] px-6 py-4 text-left text-xs font-semibold text-secondary uppercase tracking-wider">Status</th>
              <th class="w-[15%] px-6 py-4 text-right text-xs font-semibold text-secondary uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-border" id="donationsTableBody">
            @foreach($orders as $order)
            <!-- Row 1 -->
            <tr class="hover:bg-muted/30 transition-colors duration-200" data-item-id="DN-1001">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3">
                  <img src="https://png.pngtree.com/png-clipart/20250820/original/pngtree-whatsapp-default-profile-photo-vector-png-image_22204331.png" class="size-10 rounded-full object-cover shrink-0" alt="Ahmad Ali">
                  <div class="flex flex-col min-w-0">
                    <p class="font-semibold text-foreground truncate">{{ $order->customer_name }}</p>
                    <p class="text-sm text-secondary truncate">{{ $order->customer_email }}</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex flex-col">
                  <p class="font-semibold text-foreground text-sm">{{ $order->whatsapp }}</p>
                  <p class="text-sm text-secondary truncate">Whatsapp</p>
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-primary/10 text-primary">
                  {{ $order->total_games }} game • {{ $order->total_size_gb }}
                </span>
              </td>
              <td class="px-6 py-4">
                <div class="flex flex-col">
                  <p class="font-bold text-foreground">Rp {{ number_format($order->package_price, 0, ',', '.') }} GB</p>
                  <p class="text-xs text-secondary">COD</p>
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-success-light text-success-dark">
                  {{ $order->status }}
                </span>
              </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex items-center justify-end gap-2">
                        <button onclick="verifyDonation('DN-1005')" class="px-3 py-1.5 bg-success text-white text-xs font-semibold rounded-lg hover:bg-success-dark transition-colors cursor-pointer">
                            Verify
                        </button>
                        <a href="{{ route('admin.orders.show', $order) }}" class="size-8 flex items-center justify-center rounded-lg ring-1 ring-border hover:ring-primary hover:text-primary text-secondary transition-all cursor-pointer" title="Edit">
                            <i data-lucide="edit-2" class="size-4"></i>
                        </a>
                        <button onclick="showDeleteModal('DN-1001')" class="size-8 flex items-center justify-center rounded-lg ring-1 ring-border hover:ring-error hover:text-error hover:bg-error/5 text-secondary transition-all cursor-pointer" title="Delete">
                            <i data-lucide="eye" class="size-4"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      {{ $orders->links() }}

@endsection
