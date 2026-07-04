<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MasjidCare - Mosque Management Dashboard</title>
<meta name="description" content="MasjidCare dashboard for managing mosque programs, donations, and members.">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" onload="window.lucideLoaded=true; if(window.initLucide) window.initLucide();"></script>
<script>
  window.initLucide = function() { if(window.lucide) lucide.createIcons(); };
  document.addEventListener('DOMContentLoaded', function() { if(window.lucideLoaded) window.initLucide(); });
</script>
<style type="text/tailwindcss">
  :root {
    --primary: #093C5D;
    --primary-hover: #3B7597;
    --foreground: #080C1A;
    --secondary: #3B7597;
    --muted: #EFF2F7;
    --border: #F3F4F3;
    --card-grey: #F1F3F6;
    --card-message: #C9E6FC;
    --success: #30B22D;
    --success-light: #DCFCE7;
    --success-dark: #166534;
    --error: #ED6B60;
    --error-light: #FEE2E2;
    --error-dark: #991B1B;
    --warning: #FED71F;
    --warning-light: #FEF9C3;
    --warning-dark: #854D0E;
    --info: #165DFF;
    --info-light: #DBEAFE;
    --info-dark: #1E40AF;
    --font-sans: 'Lexend Deca', sans-serif;
  }
  @theme inline {
    --color-primary: var(--primary);
    --color-primary-hover: var(--primary-hover);
    --color-foreground: var(--foreground);
    --color-secondary: var(--secondary);
    --color-muted: var(--muted);
    --color-border: var(--border);
    --color-card-grey: var(--card-grey);
    --color-card-message: var(--card-message);
    --color-success: var(--success);
    --color-success-light: var(--success-light);
    --color-success-dark: var(--success-dark);
    --color-error: var(--error);
    --color-error-light: var(--error-light);
    --color-error-dark: var(--error-dark);
    --color-warning: var(--warning);
    --color-warning-light: var(--warning-light);
    --color-warning-dark: var(--warning-dark);
    --color-info: var(--info);
    --color-info-light: var(--info-light);
    --color-info-dark: var(--info-dark);
    --font-sans: var(--font-sans);
  }
  select {
    @apply appearance-none bg-no-repeat cursor-pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
    background-position: right 16px center;
    padding-right: 40px;
  }
  .scrollbar-hide::-webkit-scrollbar { display: none; }
  .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>
</head>
<body class="font-sans bg-muted min-h-screen overflow-x-hidden flex">

<!-- Mobile Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/80 z-40 lg:hidden hidden" onclick="toggleSidebar()"></div>

<!-- SIDEBAR -->
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
      <a href="#" class="group active cursor-pointer">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-muted transition-all duration-300">
          <i data-lucide="home" class="size-6 text-foreground"></i>
          <span class="font-semibold text-foreground">Home</span>
        </div>
      </a>
      <a href="#" class="group cursor-pointer">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-white hover:bg-muted transition-all duration-300">
          <i data-lucide="layout-dashboard" class="size-6 text-secondary group-hover:text-foreground transition-colors"></i>
          <span class="font-medium text-secondary group-hover:text-foreground transition-colors">Categories</span>
        </div>
      </a>
      <a href="#" class="group cursor-pointer">
        <div class="flex items-center rounded-xl p-4 gap-3 bg-white hover:bg-muted transition-all duration-300">
          <i data-lucide="list-collapse" class="size-6 text-secondary group-hover:text-foreground transition-colors"></i>
          <span class="font-medium text-secondary group-hover:text-foreground transition-colors">Collections</span>
        </div>
      </a>
      <a href="#" class="group cursor-pointer">
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

<!-- MAIN CONTENT -->
<main class="flex-1 lg:ml-[280px] flex flex-col min-h-screen w-full">

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



    <div class="p-5 md:p-8 lg:p-10">
        <div class="relative rounded-2xl overflow-hidden shadow min-h-[500px]">

            <!-- Background Cover Image -->
            <img
                src="https://4kwallpapers.com/images/walls/thumbs_2t/20209.jpg"
                alt="League of Legends"
                class="absolute inset-0 w-full h-full object-cover"
            >

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/60"></div>

            <!-- Content -->
            <div class="relative z-10 p-6 md:p-8 lg:p-10 flex flex-col md:flex-row justify-between items-center gap-6 min-h-[500px]">

                <div class="flex-1 text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start gap-2 mb-3">
                        <i class="fas fa-crown text-yellow-400 text-2xl"></i>
                        <span class="text-yellow-400 text-sm font-bold tracking-wider">
                            FEATURED GAME
                        </span>
                    </div>

                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-black tracking-tight">
                        <span class="bg-gradient-to-r from-yellow-400 via-yellow-300 to-amber-500 bg-clip-text text-transparent">
                            LEAGUE
                        </span>
                        <br>
                        <span class="text-white">OF LEGENDS</span>
                    </h2>

                    <p class="text-gray-300 max-w-lg mt-4 text-base md:text-lg">
                        Become a legend. Choose a champion, learn his skills, beat opponents in 5v5.
                    </p>

                    <button class="mt-6 bg-gradient-to-r from-yellow-400 to-amber-600 text-black font-bold px-8 py-3 rounded-full shadow-lg hover:scale-105 transition">
                        PRE-ORDER
                    </button>
                </div>

                <div class="flex-shrink-0">
                    <div class="w-36 h-36 md:w-48 md:h-48 rounded-full overflow-hidden border-2 border-yellow-400/50">
                        <img
                            src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_0.jpg"
                            alt="Ahri"
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>

            </div>
        </div>
    </div>

  <!-- Page Content Area -->
  <div class="flex-1 overflow-y-auto p-5 md:p-8">
    <!-- PROGRAMS SECTION HEADER & CONTROLS -->
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-6">
      <div>
        <h3 class="font-bold text-xl text-foreground mb-1">Games with discounts</h3>
        <p class="text-sm text-secondary">Limited offers · PC, PS3 & PS4 digital keys</p>
      </div>
      
      <div class="flex flex-col sm:flex-row gap-3">
        <!-- Search -->
        <div class="relative w-full sm:w-64">
          <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 size-5 text-secondary"></i>
          <input type="text" placeholder="Search programs..." class="w-full h-12 pl-11 pr-4 rounded-xl ring-1 ring-border focus:ring-2 focus:ring-primary outline-none text-sm font-medium bg-white transition-all duration-300">
        </div>
        <!-- Filter -->
        <div class="relative w-full sm:w-48">
          <select class="w-full h-12 pl-4 pr-10 rounded-xl ring-1 ring-border focus:ring-2 focus:ring-primary outline-none text-sm font-medium bg-white transition-all duration-300 text-foreground">
            <option value="">All Categories</option>
            <option value="charity">Charity & Welfare</option>
            <option value="education">Education</option>
            <option value="maintenance">Maintenance</option>
            <option value="events">Community Events</option>
          </select>
        </div>
      </div>
    </div>

    <!-- PROGRAM CARDS GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
      
      <!-- Card 1 -->
      <div class="flex flex-col rounded-2xl ring-1 ring-border hover:ring-primary transition-all duration-300 bg-white overflow-hidden group">
        <!-- Photo & Badge -->
        <div class="relative h-60 overflow-hidden bg-muted">
          <img src="https://i.ytimg.com/vi/ADBH1EgCud0/mqdefault.jpg" alt="Ramadan Food Drive" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute flex items-center top-4 right-4 bg-red-500 gap-1.5 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
            <i data-lucide="tag" class="size-4"></i>
            <span class="text-sm font-medium"> Hot Games</span>
          </div>
          <div class="absolute bottom-4 left-4">
            <span class="bg-black/60 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-lg border border-white/20">PRG-001</span>
          </div>
        </div>
        
        <!-- Content -->
        <div class="p-5 flex flex-col flex-1">
          <div class="mb-5">
            <span class="text-xs font-bold text-primary bg-primary/10 px-2.5 py-1 rounded-md mb-2.5 inline-block">Action</span>
            <h4 class="font-bold text-lg text-foreground leading-tight mb-1 line-clamp-1">God Of War</h4>
            <div class="flex items-center gap-1.5 text-secondary">
              <i data-lucide="gamepad-2" class="size-4"></i>
              <span class="text-sm font-medium">Controller Support</span>
            </div>
            <div class="mt-5 flex flex-col gap-4">
              <div class="pt-0 mt-auto flex items-center gap-2">
                  <button class="w-80 mt-2 py-3 flex items-center justify-center gap-2 bg-primary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <span>Buy Now</span>
                  </button>
                  <button class="w-20 mt-2 py-3 flex items-center justify-center gap-2 bg-secondary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <i data-lucide="shopping-cart"></i>
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 1 -->
      <div class="flex flex-col rounded-2xl ring-1 ring-border hover:ring-primary transition-all duration-300 bg-white overflow-hidden group">
        <!-- Photo & Badge -->
        <div class="relative h-60 overflow-hidden bg-muted">
          <img src="data:image/jpeg;base64,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" alt="Ramadan Food Drive" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute flex items-center top-4 right-4 bg-red-500 gap-1.5 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
            <i data-lucide="tag" class="size-4"></i>
            <span class="text-sm font-medium"> Hot Games</span>
          </div>
          <div class="absolute bottom-4 left-4">
            <span class="bg-black/60 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-lg border border-white/20">PRG-001</span>
          </div>
        </div>
        
        <!-- Content -->
        <div class="p-5 flex flex-col flex-1">
          <div class="mb-5">
            <span class="text-xs font-bold text-primary bg-primary/10 px-2.5 py-1 rounded-md mb-2.5 inline-block">Action</span>
            <h4 class="font-bold text-lg text-foreground leading-tight mb-1 line-clamp-1">Forza Horizon 5</h4>
            <div class="flex items-center gap-1.5 text-secondary">
              <i data-lucide="gamepad-2" class="size-4"></i>
              <span class="text-sm font-medium">Controller Support</span>
            </div>
            <div class="mt-5 flex flex-col gap-4">
              <div class="pt-0 mt-auto flex items-center gap-2">
                  <button class="w-80 mt-2 py-3 flex items-center justify-center gap-2 bg-primary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <span>Buy Now</span>
                  </button>
                  <button class="w-20 mt-2 py-3 flex items-center justify-center gap-2 bg-secondary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <i data-lucide="shopping-cart"></i>
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 1 -->
      <div class="flex flex-col rounded-2xl ring-1 ring-border hover:ring-primary transition-all duration-300 bg-white overflow-hidden group">
        <!-- Photo & Badge -->
        <div class="relative h-60 overflow-hidden bg-muted">
          <img src="data:image/jpeg;base64,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" alt="Ramadan Food Drive" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute flex items-center top-4 right-4 bg-red-500 gap-1.5 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
            <i data-lucide="tag" class="size-4"></i>
            <span class="text-sm font-medium"> Hot Games</span>
          </div>
          <div class="absolute bottom-4 left-4">
            <span class="bg-black/60 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-lg border border-white/20">PRG-001</span>
          </div>
        </div>
        
        <!-- Content -->
        <div class="p-5 flex flex-col flex-1">
          <div class="mb-5">
            <span class="text-xs font-bold text-primary bg-primary/10 px-2.5 py-1 rounded-md mb-2.5 inline-block">Action</span>
            <h4 class="font-bold text-lg text-foreground leading-tight mb-1 line-clamp-1">Black Myth Wukong</h4>
            <div class="flex items-center gap-1.5 text-secondary">
              <i data-lucide="gamepad-2" class="size-4"></i>
              <span class="text-sm font-medium">Controller Support</span>
            </div>
            <div class="mt-5 flex flex-col gap-4">
              <div class="pt-0 mt-auto flex items-center gap-2">
                  <button class="w-80 mt-2 py-3 flex items-center justify-center gap-2 bg-primary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <span>Buy Now</span>
                  </button>
                  <button class="w-20 mt-2 py-3 flex items-center justify-center gap-2 bg-secondary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <i data-lucide="shopping-cart"></i>
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 1 -->
      <div class="flex flex-col rounded-2xl ring-1 ring-border hover:ring-primary transition-all duration-300 bg-white overflow-hidden group">
        <!-- Photo & Badge -->
        <div class="relative h-60 overflow-hidden bg-muted">
          <img src="data:image/jpeg;base64,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" alt="Ramadan Food Drive" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute flex items-center top-4 right-4 bg-red-500 gap-1.5 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
            <i data-lucide="tag" class="size-4"></i>
            <span class="text-sm font-medium"> Hot Games</span>
          </div>
          <div class="absolute bottom-4 left-4">
            <span class="bg-black/60 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-lg border border-white/20">PRG-001</span>
          </div>
        </div>
        
        <!-- Content -->
        <div class="p-5 flex flex-col flex-1">
          <div class="mb-5">
            <span class="text-xs font-bold text-primary bg-primary/10 px-2.5 py-1 rounded-md mb-2.5 inline-block">Action</span>
            <h4 class="font-bold text-lg text-foreground leading-tight mb-1 line-clamp-1">Cyberpunk 2077</h4>
            <div class="flex items-center gap-1.5 text-secondary">
              <i data-lucide="gamepad-2" class="size-4"></i>
              <span class="text-sm font-medium">Controller Support</span>
            </div>
            <div class="mt-5 flex flex-col gap-4">
              <div class="pt-0 mt-auto flex items-center gap-2">
                  <button class="w-80 mt-2 py-3 flex items-center justify-center gap-2 bg-primary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <span>Buy Now</span>
                  </button>
                  <button class="w-20 mt-2 py-3 flex items-center justify-center gap-2 bg-secondary ring-1 ring-border hover:ring-primary hover:bg-primary/5 text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
                    <i data-lucide="shopping-cart"></i>
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

<!-- SEARCH MODAL -->
<div id="search-modal" class="fixed inset-0 bg-black/50 z-[100] hidden items-start justify-center pt-[10vh] px-4 backdrop-blur-sm transition-opacity duration-300 opacity-0">
  <div class="bg-white rounded-3xl w-full max-w-2xl max-h-[80vh] overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300" id="search-modal-content">
    <!-- Search Header -->
    <div class="p-4 border-b border-border">
      <div class="flex items-center gap-3 bg-muted rounded-2xl px-4 ring-1 ring-transparent focus-within:ring-primary transition-all">
        <i data-lucide="search" class="size-5 text-secondary"></i>
        <input type="text" id="search-input" placeholder="Search programs, members, or donations..." class="flex-1 h-14 bg-transparent outline-none text-foreground placeholder:text-secondary font-medium">
        <kbd class="hidden sm:inline-flex items-center gap-1 px-2 py-1 bg-white rounded-lg text-xs font-semibold text-secondary border border-border shadow-sm">ESC</kbd>
      </div>
    </div>
    <!-- Search Results -->
    <div class="p-4 overflow-y-auto max-h-[60vh]">
      <p class="text-xs font-bold text-secondary uppercase tracking-wider mb-3 px-2">Recent Searches</p>
      <div class="flex flex-col gap-1">
        <a href="#" class="flex items-center gap-4 p-3 rounded-2xl hover:bg-muted transition-all cursor-pointer group">
          <div class="size-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0">
            <i data-lucide="layers" class="size-5 text-primary"></i>
          </div>
          <div class="flex-1 min-w-0">
            <p class="font-semibold text-foreground truncate group-hover:text-primary transition-colors">Ramadan Food Drive</p>
            <p class="text-sm text-secondary truncate">Program • PRG-001</p>
          </div>
          <i data-lucide="arrow-up-left" class="size-4 text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i>
        </a>
        <a href="#" class="flex items-center gap-4 p-3 rounded-2xl hover:bg-muted transition-all cursor-pointer group">
          <div class="size-10 bg-success/10 rounded-xl flex items-center justify-center shrink-0">
            <i data-lucide="heart" class="size-5 text-success"></i>
          </div>
          <div class="flex-1 min-w-0">
            <p class="font-semibold text-foreground truncate group-hover:text-primary transition-colors">Recent Donations</p>
            <p class="text-sm text-secondary truncate">Report • Last 30 days</p>
          </div>
          <i data-lucide="arrow-up-left" class="size-4 text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- LOGOUT CONFIRMATION MODAL -->
<div id="logout-modal" class="fixed inset-0 bg-black/50 z-[100] hidden items-center justify-center p-4 backdrop-blur-sm transition-opacity duration-300 opacity-0">
  <div class="bg-white rounded-3xl p-6 max-w-sm w-full text-center shadow-2xl transform scale-95 transition-transform duration-300" id="logout-modal-content">
    <div class="w-16 h-16 bg-error/10 rounded-full flex items-center justify-center mx-auto mb-4">
      <i data-lucide="log-out" class="w-8 h-8 text-error"></i>
    </div>
    <h3 class="text-foreground text-xl font-bold mb-2">Sign Out</h3>
    <p class="text-secondary text-sm mb-6">Are you sure you want to sign out of MasjidCare?</p>
    <div class="flex gap-3">
      <button onclick="closeLogoutModal()" class="flex-1 py-3 ring-1 ring-border hover:ring-primary text-foreground font-semibold rounded-xl transition-all duration-300 cursor-pointer">
        Cancel
      </button>
      <button onclick="confirmLogout()" class="flex-1 py-3 bg-error hover:bg-error-dark text-white font-semibold rounded-xl transition-all duration-300 cursor-pointer">
        Sign Out
      </button>
    </div>
  </div>
</div>

<!-- PAGE NOT FOUND MODAL -->
<div id="page-not-found-modal" class="fixed inset-0 bg-black/50 z-[100] hidden items-center justify-center p-4 backdrop-blur-sm transition-opacity duration-300 opacity-0">
  <div class="bg-white rounded-3xl p-6 max-w-sm w-full text-center shadow-2xl transform scale-95 transition-transform duration-300" id="pnf-modal-content">
    <div class="w-16 h-16 bg-warning/10 rounded-full flex items-center justify-center mx-auto mb-4">
      <i data-lucide="alert-triangle" class="w-8 h-8 text-warning-dark"></i>
    </div>
    <h3 class="text-foreground text-xl font-bold mb-2">Page Not Available</h3>
    <p class="text-secondary text-sm mb-6">This page hasn't been created yet. Generate it using the chat!</p>
    <button onclick="closePageNotFoundModal()" class="w-full py-3 bg-primary text-white rounded-xl font-semibold hover:bg-primary-hover transition-all duration-300 cursor-pointer">
      Got it
    </button>
  </div>
</div>

<script>
  // Sidebar Toggle
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
    document.body.classList.toggle('overflow-hidden');
  }

  // Search Modal Logic
  const searchModal = document.getElementById('search-modal');
  const searchModalContent = document.getElementById('search-modal-content');
  const searchInput = document.getElementById('search-input');

  function openSearchModal() {
    searchModal.classList.remove('hidden');
    searchModal.classList.add('flex');
    // Small delay for transition
    setTimeout(() => {
      searchModal.classList.remove('opacity-0');
      searchModalContent.classList.remove('scale-95');
      searchInput.focus();
    }, 10);
  }

  function closeSearchModal() {
    searchModal.classList.add('opacity-0');
    searchModalContent.classList.add('scale-95');
    setTimeout(() => {
      searchModal.classList.add('hidden');
      searchModal.classList.remove('flex');
    }, 300);
  }

  searchModal.addEventListener('click', function(e) {
    if (e.target === this) closeSearchModal();
  });

  // Logout Modal Logic
  const logoutModal = document.getElementById('logout-modal');
  const logoutModalContent = document.getElementById('logout-modal-content');

  function showLogoutModal() {
    logoutModal.classList.remove('hidden');
    logoutModal.classList.add('flex');
    setTimeout(() => {
      logoutModal.classList.remove('opacity-0');
      logoutModalContent.classList.remove('scale-95');
    }, 10);
  }

  function closeLogoutModal() {
    logoutModal.classList.add('opacity-0');
    logoutModalContent.classList.add('scale-95');
    setTimeout(() => {
      logoutModal.classList.add('hidden');
      logoutModal.classList.remove('flex');
    }, 300);
  }

  function confirmLogout() {
    // In a real app, handle logout logic here
    closeLogoutModal();
    // Optional: show toast or redirect
  }

  // Page Not Found Modal Logic
  const pnfModal = document.getElementById('page-not-found-modal');
  const pnfModalContent = document.getElementById('pnf-modal-content');

  function closePageNotFoundModal() {
    pnfModal.classList.add('opacity-0');
    pnfModalContent.classList.add('scale-95');
    setTimeout(() => {
      pnfModal.classList.add('hidden');
      pnfModal.classList.remove('flex');
    }, 300);
  }

  // Global Event Listeners
  document.addEventListener('DOMContentLoaded', function() {
    // Intercept all empty links
    document.querySelectorAll('a[href="#"]').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        // Don't show PNF for search results in modal
        if(!this.closest('#search-modal')) {
          pnfModal.classList.remove('hidden');
          pnfModal.classList.add('flex');
          setTimeout(() => {
            pnfModal.classList.remove('opacity-0');
            pnfModalContent.classList.remove('scale-95');
          }, 10);
        } else {
            closeSearchModal();
        }
      });
    });

    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        if (!searchModal.classList.contains('hidden')) closeSearchModal();
        if (!logoutModal.classList.contains('hidden')) closeLogoutModal();
        if (!pnfModal.classList.contains('hidden')) closePageNotFoundModal();
      }
      if ((e.metaKey || e.ctrlKey) && e.key === 'k') { 
        e.preventDefault(); 
        openSearchModal(); 
      }
    });
  });
</script>
</body>
</html>