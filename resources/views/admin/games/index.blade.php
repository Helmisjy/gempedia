@extends('admin.layouts.app')

@section('content')

    <!-- Page Header & CTA -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
      <div>
        <h1 class="text-foreground text-2xl md:text-3xl font-bold mb-1">Games Collection</h1>
        <p class="text-secondary text-sm md:text-base">Manage games</p>
      </div>
      <div class="grid grid-cols-2 gap-2 w-full md:w-auto md:flex md:items-center md:gap-3">
        <!-- <button class="flex items-center justify-center gap-2 px-4 md:px-6 py-3 ring-1 ring-border bg-white hover:ring-primary rounded-full text-foreground font-semibold transition-all duration-300 cursor-pointer">
          <i data-lucide="download" class="w-5 h-5"></i>
          <span>Export</span>
        </button> -->
        <a href="{{ route('admin.games.create') }}" onclick="openAddEventModal()" class="flex items-center justify-center gap-2 px-4 md:px-6 py-3 bg-primary text-white rounded-full font-bold hover:bg-primary-hover transition-all duration-300 cursor-pointer shadow-sm shadow-primary/30">
          <i data-lucide="plus" class="w-5 h-5"></i>
          <span>Add Game</span>
        </a>
      </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8">
        <!-- Stat 1 -->
        <div class="flex flex-col rounded-2xl border border-border p-6 gap-3 bg-white shadow-sm">
            <div class="flex items-center gap-[6px]">
            <div class="size-11 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="gamepad-2" class="size-6 text-blue-500"></i>
            </div>
            <p class="font-medium text-secondary">Total Collection</p>
            </div>
            <p class="font-bold text-[32px] leading-10 text-foreground">{{ $totalCollection }} Games</p>
        </div>
        <!-- Stat 2 -->
        <div class="flex flex-col rounded-2xl border border-border p-6 gap-3 bg-white shadow-sm">
            <div class="flex items-center gap-[6px]">
                <div class="size-11 bg-warning/10 rounded-xl flex items-center justify-center shrink-0">
                    <i data-lucide="database" class="size-6 text-warning-dark"></i>
                </div>
                <p class="font-medium text-secondary">Total Storage</p>
            </div>
            <p class="font-bold text-[32px] leading-10 text-foreground">{{ number_format($totalStorage, 0) }} GB</p>
        </div>
        <!-- Stat 3 -->
        <div class="flex flex-col rounded-2xl border border-border p-6 gap-3 bg-white shadow-sm">
            <div class="flex items-center gap-[6px]">
                <div class="size-11 bg-success/10 rounded-xl flex items-center justify-center shrink-0">
                    <i data-lucide="check-circle" class="size-6 text-success"></i>
                </div>
                <p class="font-medium text-secondary">Largest size</p>
            </div>
            <div class="flex items-center gap-3">
                <p class="font-bold text-[30px] leading-10 text-foreground">{{ number_format($largestGame->size_gb,0) }} GBB</p>
                <p class="text-sm md:text-base">({{ $largestGame->game->title }})</p>  
            </div>
        </div>
    </div>

    <!-- Controls (Search & Filter) -->
    <div class="flex flex-col md:flex-row gap-4 mb-6">
      <div class="relative flex-1">
        <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 size-5 text-secondary"></i>
        <input type="text" class="w-full h-12 pl-11 pr-4 rounded-2xl ring-1 ring-border bg-white focus:ring-2 focus:ring-primary outline-none font-medium transition-all duration-300" placeholder="Search games by name, publisher, or code...">
      </div>
      <div class="flex gap-3">
        <div class="relative min-w-[160px]">
          <select class="w-full h-12 pl-4 pr-10 rounded-2xl ring-1 ring-border bg-white focus:ring-2 focus:ring-primary outline-none font-medium text-foreground transition-all duration-300">
            <option value="">All Categories</option>
            <option value="lecture">Action</option>
            <option value="workshop">Adventure</option>
            <option value="community">Sports</option>
            <option value="youth">Open World</option>
          </select>
        </div>
        <div class="relative min-w-[140px]">
          <select class="w-full h-12 pl-4 pr-10 rounded-2xl ring-1 ring-border bg-white focus:ring-2 focus:ring-primary outline-none font-medium text-foreground transition-all duration-300">
            <option value="">All Status</option>
            <option value="upcoming">Upcoming</option>
            <option value="ongoing">Ongoing</option>
            <option value="completed">Completed</option>
            <option value="cancelled">Cancelled</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Games Grid -->
    <div class="grid grid-cols-2 md:grid-cols-2 xl:grid-cols-5 gap-6">
      
        
      <!-- Game Card  -->
       @foreach($games as $game)
        <div class="flex flex-col rounded-2xl ring-1 ring-border bg-white overflow-hidden hover:ring-primary hover:shadow-md transition-all duration-300 group">
            <!-- Poster -->
            <div class="relative w-full aspect-[4/3] bg-muted overflow-hidden">
                <img src="{{ $game->cover ?: 'https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=900&q=80' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" style="height: 100%;" alt="{{ $game->title }}">
                <div class="absolute top-3 right-3">
                    <span class="px-3 py-1 bg-warning text-foreground text-xs font-bold rounded-full shadow-sm">{{ $game->genres->pluck('name')->join(', ') }}</span>
                </div>
                @foreach($game->gamePlatforms as $entry)
                <div class="absolute bottom-3 left-3">
                    <span class="px-2.5 py-1 bg-black/70 text-white text-xs font-medium rounded-lg backdrop-blur-sm">{{ $entry->size_gb }} GB</span>
                </div>
                @endforeach
            </div>
            <!-- Details -->
            <div class="p-5 flex flex-col gap-4 flex-1">
                <div>
                    <span class="text-xs font-bold text-primary bg-primary/10 px-2.5 py-1 rounded-md mb-2.5 inline-block">{{ $game->publisher }}</span>
                    <h4 class="font-bold text-lg text-foreground leading-tight line-clamp-2">{{ $game->title }}</h4>
                </div>
                </div>
                <!-- Actions -->
                <div class="p-5 pt-0 mt-auto flex items-center gap-2">
                <a href="{{ Route('admin.games.show', $game) }}" class="flex-1 cursor-pointer">
                    <div class="w-full py-2.5 bg-blue-100 text-blue-500 font-semibold rounded-xl hover:bg-primary hover:text-white transition-all text-sm text-center">Edit</div>
                </a>
                <a href="{{ Route('admin.games.show', $game) }}" class="size-10 flex items-center justify-center ring-1 ring-border rounded-xl hover:ring-primary text-red-500 transition-all shrink-0 bg-red-100 hover:bg-red-200">
                    <i data-lucide="trash-2" class="size-4"></i>
                </a>
            </div>
        </div>
        @endforeach


@endsection


