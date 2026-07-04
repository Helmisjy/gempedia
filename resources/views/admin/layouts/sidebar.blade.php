<aside id="sidebar" class="flex flex-col w-[280px] shrink-0 h-screen fixed inset-y-0 left-0 z-50 bg-white border-r border-border transform -translate-x-full lg:translate-x-0 transition-transform duration-300 overflow-hidden">
  <!-- Top Bar with logo and title -->
  <div class="flex items-center justify-between border-b border-border h-[90px] px-5 gap-3 shrink-0">
    <div class="flex items-center gap-3">
      <div class="w-11 h-11 bg-primary rounded-xl flex items-center justify-center shrink-0 shadow-sm shadow-primary/20">
        <i data-lucide="gamepad-2" class="w-6 h-6 text-white"></i>
      </div>
      <h1 class="font-bold text-xl text-foreground tracking-tight">Gamepedia</h1>
    </div>
    <button onclick="toggleSidebar()" aria-label="Close sidebar" class="lg:hidden size-11 flex shrink-0 bg-white rounded-xl p-[10px] items-center justify-center ring-1 ring-border hover:ring-primary transition-all duration-300 cursor-pointer">
      <i data-lucide="x" class="size-6 text-secondary"></i>
    </button>
  </div>

  <!-- Navigation Menu -->
  <div class="flex flex-col p-5 pb-28 gap-6 overflow-y-auto flex-1 scrollbar-hide">
    <div class="flex flex-col gap-1">
      <a href="{{ route('admin.orders.index') }}" class="group active">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-muted transition-all duration-300">
          <i data-lucide="home" class="size-6 text-foreground"></i>
          <span class="font-semibold text-foreground">Home</span>
        </div>
      </a>
      <a href="{{ route('admin.platforms.index') }}" class="group">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-white hover:bg-muted transition-all duration-300">
          <i data-lucide="server" class="size-6 text-secondary group-hover:text-foreground transition-colors"></i>
          <span class="font-medium text-secondary group-hover:text-foreground transition-colors">Platforms</span>
        </div>
      </a>
      <a href="{{ route('admin.genres.index') }}" class="group">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-white hover:bg-muted transition-all duration-300">
          <i data-lucide="layout-dashboard" class="size-6 text-secondary group-hover:text-foreground transition-colors"></i>
          <span class="font-medium text-secondary group-hover:text-foreground transition-colors">Categories</span>
        </div>
      </a>
      <a href="{{ route('admin.games.index') }}" class="group">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-white hover:bg-muted transition-all duration-300">
          <i data-lucide="list-collapse" class="size-6 text-secondary group-hover:text-foreground transition-colors"></i>
          <span class="font-medium text-secondary group-hover:text-foreground transition-colors">Collections</span>
        </div>
      </a>
      <a href="{{ route('admin.orders.index') }}" class="group">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-white hover:bg-muted transition-all duration-300">
          <i data-lucide="truck" class="size-6 text-secondary group-hover:text-foreground transition-colors"></i>
          <span class="font-medium text-secondary group-hover:text-foreground transition-colors">My Orders</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Bottom Profile Card -->
  <div class="absolute bottom-0 left-0 w-full bg-white border-t border-border p-4">
    <div class="flex items-center justify-between gap-3 p-2 rounded-2xl hover:bg-card-grey transition-all duration-300">
      <div class="flex items-center gap-3 min-w-0">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" alt="Imam Profile" class="size-10 rounded-full object-cover ring-2 ring-border shrink-0">
        <div class="min-w-0">
          <p class="font-semibold text-sm text-foreground truncate">Imam Ahmad</p>
          <p class="text-xs text-secondary truncate">Administrator</p>
        </div>
      </div>
      <button onclick="showLogoutModal()" aria-label="Logout" class="size-10 flex items-center justify-center rounded-xl hover:bg-error/10 group transition-all duration-300 cursor-pointer shrink-0">
        <i data-lucide="log-out" class="size-5 text-secondary group-hover:text-error transition-colors"></i>
      </button>
    </div>
  </div>
</aside>