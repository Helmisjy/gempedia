  <!-- Top Header Bar -->
  <div class="flex items-center justify-between w-full h-[90px] shrink-0 border-b border-border bg-white px-5 md:px-8 sticky top-0 z-30">
    <div class="flex items-center gap-4">
      <button onclick="toggleSidebar()" aria-label="Open menu" class="lg:hidden size-11 flex items-center justify-center rounded-xl ring-1 ring-border hover:ring-primary transition-all duration-300 cursor-pointer">
        <i data-lucide="menu" class="size-6 text-foreground"></i>
      </button>
      <h2 class="font-bold text-2xl text-foreground hidden sm:block">Dashboard Overview</h2>
      <h2 class="font-bold text-xl text-foreground sm:hidden">Gamepedia</h2>
    </div>
    
    <div class="flex items-center gap-3">
      <button onclick="openSearchModal()" class="size-11 flex items-center justify-center rounded-xl ring-1 ring-border hover:ring-primary transition-all duration-300 cursor-pointer" aria-label="Search">
        <i data-lucide="search" class="size-5 text-secondary"></i>
      </button>
      <button class="size-11 flex items-center justify-center rounded-xl ring-1 ring-border hover:ring-primary transition-all duration-300 cursor-pointer relative" aria-label="Notifications">
        <i data-lucide="shopping-cart" class="size-5 text-secondary"></i>
        <span class="absolute top-2 right-2.5 size-2.5 rounded-full bg-error border-2 border-white"></span>
      </button>
      <button class="hidden sm:flex items-center justify-center gap-2 px-5 py-2.5 bg-primary text-white rounded-xl font-semibold hover:bg-primary-hover transition-all duration-300 cursor-pointer">
        <i data-lucide="plus" class="size-5"></i>
        <span>New Donation</span>
      </button>
    </div>
  </div>