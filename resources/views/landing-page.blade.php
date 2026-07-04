<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>GAMEPEDIA</title>
  <!-- Tailwind CSS v3 + Font Awesome + Google Fonts -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'sans': ['Inter', 'system-ui', 'Segoe UI', 'sans-serif'],
          },
          colors: {
            'game-dark': '#0a0c10',
            'game-card': '#15171e',
            'game-border': '#2a2d36',
            'accent-purple': '#8b5cf6',
            'accent-cyan': '#06b6d4',
            'league-gold': '#d4af37',
            'league-dark': '#0f0f1a',
          },
          boxShadow: {
            'glow': '0 8px 20px rgba(139, 92, 246, 0.15)',
            'card': '0 10px 25px -5px rgba(0, 0, 0, 0.5)',
            'hero-glow': '0 0 40px rgba(212, 175, 55, 0.2)',
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background: #0a0c10;
      scroll-behavior: smooth;
    }
    /* Sidebar mobile transition */
    .mobile-sidebar {
      transition: transform 0.3s ease-in-out;
      transform: translateX(-100%);
      z-index: 1000;
    }
    .mobile-sidebar.open {
      transform: translateX(0);
    }
    .sidebar-overlay {
      transition: opacity 0.3s ease;
      opacity: 0;
      pointer-events: none;
    }
    .sidebar-overlay.open {
      opacity: 1;
      pointer-events: auto;
    }
    /* Desktop sidebar sticky */
    .desktop-sidebar {
      height: calc(100vh - 4rem);
      position: sticky;
      top: 4rem;
    }
    @media (max-width: 1023px) {
      .desktop-sidebar {
        display: none;
      }
    }
    .game-card-hover {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .game-card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 30px -12px rgba(0,0,0,0.6), 0 0 0 1px rgba(139,92,246,0.3);
    }
    .discount-badge {
      background: linear-gradient(135deg, #10b981, #059669);
    }
    .btn-primary {
      transition: all 0.2s;
    }
    .btn-primary:active {
      transform: scale(0.97);
    }
    .hero-league {
      background: linear-gradient(135deg, rgba(15,15,26,0.95) 0%, rgba(20,12,40,0.9) 100%), url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMSIgZD0iTTAgMGg0MHY0MEgweiIvPjxwYXRoIGQ9Ik0yMCA1TDM1IDIwIDIwIDM1IDUgMjB6IiBmaWxsPSIjZmZkY2M0IiBmaWxsLW9wYWNpdHk9IjAuMDMiLz48L3N2Zz4=');
      background-repeat: repeat;
    }
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #1f1f2e;
    }
    ::-webkit-scrollbar-thumb {
      background: #8b5cf6;
      border-radius: 8px;
    }
    /* Navbar blur effect */
    .navbar-blur {
      background: rgba(10, 12, 16, 0.85);
      backdrop-filter: blur(12px);
    }
    /* Prevent body scroll when sidebar open on mobile */
    body.sidebar-open {
      overflow: hidden;
    }
  </style>
</head>
<body class="font-sans text-gray-200 bg-game-dark antialiased">

  <!-- ========== TOP NAVIGATION BAR (SEARCH, AKUN, KERANJANG, HAMBURGER) ========== -->
  <header class="sticky top-0 z-50 navbar-blur border-b border-game-border shadow-md">
    <div class="max-w-[1920px] mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-wrap items-center justify-between gap-3">
      <!-- Left side: Hamburger (mobile only) + Logo -->
      <div class="flex items-center gap-2">
        <!-- Hamburger button - visible only on mobile/tablet -->
        <button id="hamburgerBtn" class="lg:hidden w-9 h-9 rounded-lg bg-game-card border border-game-border flex items-center justify-center hover:bg-gray-800 transition">
          <i class="fas fa-bars text-gray-200 text-lg"></i>
        </button>
        
        <div class="flex items-center gap-2">
          <div class="bg-gradient-to-br from-accent-purple to-accent-cyan p-1.5 rounded-lg shadow-md">
            <i class="fas fa-gamepad text-white text-sm sm:text-base"></i>
          </div>
          <h1 class="text-lg sm:text-xl font-extrabold tracking-tight bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">GAMEPEDIA</h1>
          <span class="hidden md:inline-block text-[10px] font-semibold bg-gray-800/60 px-2 py-0.5 rounded-full border border-gray-700 ml-1">PC · PS3 · PS4</span>
        </div>
      </div>

      <!-- Search bar (flexible width) -->
      <div class="relative flex-1 max-w-md mx-2 sm:mx-4">
        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
        <input type="text" id="searchInput" placeholder="Search for games, bundles, or platforms..." class="w-full bg-game-card/80 border border-game-border rounded-full py-2 pl-10 pr-4 text-sm focus:outline-none focus:border-accent-purple focus:ring-1 focus:ring-accent-purple/50 transition text-gray-200 placeholder:text-gray-500">
      </div>

      <!-- Right side: Akun & Cart -->
      <div class="flex items-center gap-3 sm:gap-4">
        <!-- Cart button with badge -->
        <div id="cartBtn" class="relative cursor-pointer group">
          <div class="bg-game-card hover:bg-gray-800 transition rounded-full w-9 h-9 flex items-center justify-center border border-game-border">
            <i class="fas fa-shopping-cart text-gray-200 text-base"></i>
          </div>
          <span class="absolute -top-1 -right-1 bg-accent-purple text-white text-[10px] font-bold rounded-full w-4 h-4 flex items-center justify-center shadow-sm">3</span>
        </div>
        
        <!-- Akun dropdown / profile -->
        <div id="profileBtn" class="flex items-center gap-2 cursor-pointer group relative">
          <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-accent-purple to-indigo-600 flex items-center justify-center shadow-md hover:scale-105 transition">
            <i class="fas fa-user-astronaut text-white text-sm"></i>
          </div>
          <div class="hidden sm:block text-right">
            <p class="text-xs text-gray-400 leading-tight">Akun</p>
            <p class="text-sm font-semibold leading-tight">Winotikk</p>
          </div>
          <i class="fas fa-chevron-down text-gray-500 text-xs hidden sm:block group-hover:text-accent-purple transition"></i>
        </div>
      </div>
    </div>
  </header>

  <!-- Main wrapper with sidebar (mobile + desktop) -->
  <div class="flex flex-col lg:flex-row max-w-[1920px] mx-auto relative">
    
    <!-- ========== MOBILE SIDEBAR (drawer) ========== -->
    <div id="mobileSidebar" class="fixed top-0 left-0 w-80 h-full bg-game-card border-r border-game-border z-[1000] mobile-sidebar lg:hidden flex flex-col shadow-2xl">
      <div class="p-5 flex flex-col h-full overflow-y-auto">
        <!-- Close button inside sidebar -->
        <div class="flex justify-end mb-4">
          <button id="closeSidebarBtn" class="w-8 h-8 rounded-full bg-gray-800 hover:bg-gray-700 flex items-center justify-center">
            <i class="fas fa-times text-gray-300"></i>
          </button>
        </div>
        
        <!-- User info inside mobile sidebar -->
        <div class="flex items-center gap-3 pb-4 mb-4 border-b border-game-border">
          <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-accent-purple to-indigo-600 flex items-center justify-center shadow-md">
            <i class="fas fa-user-astronaut text-white text-xl"></i>
          </div>
          <div>
            <p class="text-xs text-gray-400">Welcome back,</p>
            <p class="text-base font-bold">Winotikk</p>
          </div>
        </div>
        
        <nav class="space-y-2 flex-1">
          <div class="flex items-center gap-3 text-gray-300 hover:text-white transition cursor-pointer bg-gray-800/30 rounded-xl px-3 py-2.5">
            <i class="fas fa-home w-5 text-accent-purple"></i>
            <span class="font-medium">Home</span>
          </div>
          <div class="flex items-center gap-3 text-gray-400 hover:text-white transition cursor-pointer px-3 py-2.5 rounded-xl hover:bg-gray-800/20">
            <i class="fas fa-th-large w-5"></i>
            <span class="font-medium">Categories</span>
          </div>
          <div class="flex items-center gap-3 text-gray-400 hover:text-white transition cursor-pointer px-3 py-2.5 rounded-xl hover:bg-gray-800/20">
            <i class="fas fa-database w-5"></i>
            <span class="font-medium">My Library</span>
          </div>
          
          <!-- Fast Launch Section -->
          <div class="pt-6 mt-6 border-t border-game-border">
            <div class="flex justify-between items-center mb-3 px-1">
              <span class="text-xs uppercase tracking-wider text-gray-400 font-semibold"><i class="fas fa-bolt text-yellow-500 mr-1"></i> FAST LAUNCH</span>
            </div>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fab fa-windows text-blue-400 w-4"></i> Minecraft</li>
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fab fa-playstation text-indigo-400 w-4"></i> Red Dead Redemption 2</li>
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fas fa-gun text-amber-500 w-4"></i> Far Cry 6</li>
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fas fa-car text-red-400 w-4"></i> Mafia: Definitive Edition</li>
            </ul>
          </div>
          
          <!-- Platform badges -->
          <div class="mt-8 flex gap-2 flex-wrap pt-4">
            <span class="bg-gray-800/60 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1"><i class="fab fa-windows"></i> PC Games</span>
            <span class="bg-gray-800/60 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1"><i class="fab fa-playstation"></i> PS3</span>
            <span class="bg-gray-800/60 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1"><i class="fab fa-playstation"></i> PS4</span>
          </div>
        </nav>
      </div>
    </div>

    <!-- Overlay untuk mobile sidebar -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/70 z-[999] sidebar-overlay lg:hidden"></div>

    <!-- ========== DESKTOP SIDEBAR (full height, selalu terlihat) ========== -->
    <aside class="hidden lg:block w-72 xl:w-80 bg-game-card/90 backdrop-blur-sm border-r border-game-border desktop-sidebar overflow-y-auto">
      <div class="p-5 flex flex-col h-full">
        <nav class="space-y-2 flex-1">
          <div class="flex items-center gap-3 text-gray-300 hover:text-white transition cursor-pointer bg-gray-800/30 rounded-xl px-3 py-2.5">
            <i class="fas fa-home w-5 text-accent-purple"></i>
            <span class="font-medium">Home</span>
          </div>
          <div class="flex items-center gap-3 text-gray-400 hover:text-white transition cursor-pointer px-3 py-2.5 rounded-xl hover:bg-gray-800/20">
            <i class="fas fa-th-large w-5"></i>
            <span class="font-medium">Categories</span>
          </div>
          <div class="flex items-center gap-3 text-gray-400 hover:text-white transition cursor-pointer px-3 py-2.5 rounded-xl hover:bg-gray-800/20">
            <i class="fas fa-database w-5"></i>
            <span class="font-medium">My Library</span>
          </div>
          
          <div class="pt-6 mt-6 border-t border-game-border">
            <div class="flex justify-between items-center mb-3 px-1">
              <span class="text-xs uppercase tracking-wider text-gray-400 font-semibold"><i class="fas fa-bolt text-yellow-500 mr-1"></i> FAST LAUNCH</span>
            </div>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fab fa-windows text-blue-400 w-4"></i> Minecraft</li>
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fab fa-playstation text-indigo-400 w-4"></i> Red Dead Redemption 2</li>
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fas fa-gun text-amber-500 w-4"></i> Far Cry 6</li>
              <li class="flex items-center gap-2 text-gray-300 px-2 py-1.5 rounded-lg hover:bg-gray-800/30 transition"><i class="fas fa-car text-red-400 w-4"></i> Mafia: Definitive Edition</li>
            </ul>
          </div>
          
          <div class="mt-8 flex gap-2 flex-wrap pt-4">
            <span class="bg-gray-800/60 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1"><i class="fab fa-windows"></i> PC Games</span>
            <span class="bg-gray-800/60 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1"><i class="fab fa-playstation"></i> PS3</span>
            <span class="bg-gray-800/60 px-3 py-1.5 rounded-lg text-xs flex items-center gap-1"><i class="fab fa-playstation"></i> PS4</span>
          </div>
        </nav>
        
        <div class="mt-auto pt-6 border-t border-game-border mt-6">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-accent-purple to-indigo-600 flex items-center justify-center shadow-md">
              <i class="fas fa-user-astronaut text-white text-sm"></i>
            </div>
            <div>
              <p class="text-xs text-gray-400">My Vault</p>
              <p class="text-sm font-semibold">Winotikk</p>
            </div>
            <i class="fas fa-store text-gray-500 ml-auto text-xs"></i>
          </div>
        </div>
      </div>
    </aside>

    <!-- ========== MAIN CONTENT AREA ========== -->
    <main class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 overflow-x-hidden">
      
      <!-- ========== HERO SECTION - LEAGUE OF LEGENDS ========== -->
      <div class="hero-league rounded-2xl overflow-hidden border border-game-border shadow-hero-glow mb-10 relative">
        <div class="p-6 md:p-8 lg:p-10 flex flex-col md:flex-row justify-between items-center gap-6">
          <div class="flex-1 text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start gap-2 mb-3">
              <i class="fas fa-crown text-league-gold text-2xl"></i>
              <span class="text-league-gold text-sm font-bold tracking-wider">FEATURED GAME</span>
            </div>
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-black tracking-tight">
              <span class="bg-gradient-to-r from-league-gold via-yellow-400 to-amber-500 bg-clip-text text-transparent">LEAGUE</span><br>
              <span class="text-white">of LEGENDS</span>
            </h2>
            <p class="text-gray-300 max-w-lg mx-auto md:mx-0 mt-4 text-base md:text-lg">
              Become a legend. Choose a champion, learn his skills, beat opponents in 5v5.
            </p>
            <button id="preorderBtn" class="mt-6 bg-gradient-to-r from-league-gold to-amber-600 text-black font-bold px-8 py-3 rounded-full shadow-lg hover:shadow-xl transition transform hover:scale-105 flex items-center gap-2 mx-auto md:mx-0">
              <i class="fas fa-gamepad"></i> PRE-ORDER
              <i class="fas fa-arrow-right text-sm"></i>
            </button>
          </div>
          <div class="flex-shrink-0 mt-4 md:mt-0">
            <div class="w-36 h-36 md:w-48 md:h-48 rounded-full bg-gradient-to-br from-league-gold/30 to-purple-700/30 flex items-center justify-center backdrop-blur-sm border-2 border-league-gold/50 shadow-2xl">
              <i class="fas fa-dragon text-7xl md:text-8xl text-league-gold"></i>
            </div>
          </div>
        </div>
        <div class="absolute top-0 right-0 w-40 h-40 bg-league-gold/5 rounded-full blur-3xl -z-0"></div>
        <div class="absolute bottom-0 left-0 w-60 h-20 bg-purple-600/10 blur-2xl"></div>
      </div>

      <!-- ========== DISCOUNT GAMES SECTION ========== -->
      <div class="mb-10">
        <div class="flex flex-wrap justify-between items-center mb-6">
          <div>
            <h3 class="text-2xl font-bold flex items-center gap-2"><i class="fas fa-tag text-green-400"></i> Games with discounts</h3>
            <p class="text-gray-400 text-sm mt-1">Limited offers · PC, PS3 & PS4 digital keys</p>
          </div>
          <a href="#" class="text-sm text-accent-purple hover:text-accent-cyan transition flex items-center gap-1 mt-2 sm:mt-0">View all <i class="fas fa-arrow-right text-xs"></i></a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- Game 1 - God of War -->
            <div class="bg-game-card rounded-xl border border-game-border overflow-hidden game-card-hover">
                <div class="relative h-48 game-cover" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXNWPlNpjiLR46IiHBr4nT3iDYXfPCcKiBn9JS4scEzg&s'); background-size: cover; background-position: center;">
                    <div class="absolute top-2 left-2 discount-badge bg-amber-600 text-white text-xs font-bold px-2 py-0.5 rounded-md shadow">-50%</div>
                    <div class="absolute bottom-2 right-2 bg-black/70 backdrop-blur-sm px-1.5 py-0.5 rounded text-[10px]"><i class="fab fa-windows"></i> PC/PS5</div>
                </div>
                <div class="p-3"><div class="flex justify-between"><h4 class="font-bold text-lg">God of War</h4><span class="text-[10px] bg-gray-800 px-2 py-0.5 rounded-full">BASIC GAME</span></div>
                <div class="flex items-baseline gap-2 mt-2"><span class="text-gray-400 line-through text-sm">$29.99</span><span class="text-2xl font-bold text-green-400">$14.99</span></div>
                <button class="w-full mt-3 py-2 rounded-full bg-accent-purple/20 text-accent-purple text-sm font-medium hover:bg-accent-purple hover:text-white transition btn-primary buy-btn" data-game="Cyberpunk 2077">Buy Now</button></div>
            </div>

          <!-- Game 2 - Cyberpunk 2077 -->
          <div class="bg-game-card rounded-xl border border-game-border overflow-hidden game-card-hover">
            <div class="relative h-48 game-cover" style="background-image: url('https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/header.jpg'); background-size: cover; background-position: center;">
              <div class="absolute top-2 left-2 discount-badge bg-amber-600 text-white text-xs font-bold px-2 py-0.5 rounded-md shadow">-50%</div>
              <div class="absolute bottom-2 right-2 bg-black/70 backdrop-blur-sm px-1.5 py-0.5 rounded text-[10px]"><i class="fab fa-windows"></i> PC/PS5</div>
            </div>
            <div class="p-3"><div class="flex justify-between"><h4 class="font-bold text-lg">Cyberpunk 2077</h4><span class="text-[10px] bg-gray-800 px-2 py-0.5 rounded-full">BASIC GAME</span></div>
            <div class="flex items-baseline gap-2 mt-2"><span class="text-gray-400 line-through text-sm">$29.99</span><span class="text-2xl font-bold text-green-400">$14.99</span></div>
            <button class="w-full mt-3 py-2 rounded-full bg-accent-purple/20 text-accent-purple text-sm font-medium hover:bg-accent-purple hover:text-white transition btn-primary buy-btn" data-game="Cyberpunk 2077">Buy Now</button></div>
          </div>

          <!-- Game 3 - Control -->
          <div class="bg-game-card rounded-xl border border-game-border overflow-hidden game-card-hover">
            <div class="relative h-48 game-cover" style="background-image: url('https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1551360/capsule_616x353.jpg?t=1746471508'); background-size: cover; background-position: center;">
              <div class="absolute top-2 left-2 discount-badge bg-amber-600 text-white text-xs font-bold px-2 py-0.5 rounded-md shadow">-50%</div>
              <div class="absolute bottom-2 right-2 bg-black/70 backdrop-blur-sm px-1.5 py-0.5 rounded text-[10px]"><i class="fab fa-windows"></i> PC/PS5</div>
            </div>
            <div class="p-3"><div class="flex justify-between"><h4 class="font-bold text-lg">Forza Horizon 5</h4><span class="text-[10px] bg-gray-800 px-2 py-0.5 rounded-full">BASIC GAME</span></div>
            <div class="flex items-baseline gap-2 mt-2"><span class="text-gray-400 line-through text-sm">$49.99</span><span class="text-2xl font-bold text-green-400">$14.99</span></div>
            <button class="w-full mt-3 py-2 rounded-full bg-accent-purple/20 text-accent-purple text-sm font-medium hover:bg-accent-purple hover:text-white transition btn-primary buy-btn" data-game="Cyberpunk 2077">Buy Now</button></div>
          </div>

          <!-- Game 4 - Hogwarts Legacy -->
          <div class="bg-game-card rounded-xl border border-game-border overflow-hidden game-card-hover">
            <div class="relative h-48 game-cover" style="background-image: url('data:image/jpeg;base64,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'); background-size: cover; background-position: center;">
              <div class="absolute top-2 left-2 discount-badge bg-amber-600 text-white text-xs font-bold px-2 py-0.5 rounded-md shadow">-50%</div>
              <div class="absolute bottom-2 right-2 bg-black/70 backdrop-blur-sm px-1.5 py-0.5 rounded text-[10px]"><i class="fab fa-windows"></i> PC/PS5</div>
            </div>
            <div class="p-3"><div class="flex justify-between"><h4 class="font-bold text-lg">Hogwarts Legacy</h4><span class="text-[10px] bg-gray-800 px-2 py-0.5 rounded-full">BASIC GAME</span></div>
            <div class="flex items-baseline gap-2 mt-2"><span class="text-gray-400 line-through text-sm">$79.99</span><span class="text-2xl font-bold text-green-400">$14.99</span></div>
            <button class="w-full mt-3 py-2 rounded-full bg-accent-purple/20 text-accent-purple text-sm font-medium hover:bg-accent-purple hover:text-white transition btn-primary buy-btn" data-game="Cyberpunk 2077">Buy Now</button></div>
          </div>

        </div>
      </div>

      <!-- ========== ADDITIONAL ROW : BESTSELLERS ========== -->
      <div class="mt-8 mb-8">
        <div class="flex items-center justify-between border-b border-game-border pb-2 mb-4">
          <h3 class="text-xl font-semibold flex items-center gap-2"><i class="fab fa-playstation text-accent-cyan"></i> Trending on PS4/PS3 & PC</h3>
          <span class="text-xs text-gray-400">top picks</span>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <div class="flex items-center gap-3 bg-game-card/40 p-3 rounded-xl border border-game-border hover:bg-game-card/80 transition">
            <div class="w-10 h-10 rounded-lg bg-purple-800/40 flex items-center justify-center"><i class="fab fa-playstation text-xl"></i></div>
            <div>
                <p class="font-semibold text-sm">The Last of Us Remastered</p>
                <p class="text-xs text-gray-400">PS4 · $19.99 <span class="line-through text-gray-500 ml-1">$39.99</span></p>
            </div>
            <button class="ml-auto text-xs bg-green-700/40 px-2 py-1 rounded-full trend-btn">-50%</button>
          </div>
          <div class="flex items-center gap-3 bg-game-card/40 p-3 rounded-xl border border-game-border hover:bg-game-card/80 transition">
            <div class="w-10 h-10 rounded-lg bg-blue-800/40 flex items-center justify-center"><i class="fab fa-windows text-xl"></i></div>
            <div>
                <p class="font-semibold text-sm">Elden Ring</p>
                <p class="text-xs text-gray-400">PC/PS5 · $44.99</p>
            </div>
            <button class="ml-auto text-xs bg-amber-700/40 px-2 py-1 rounded-full trend-btn">HOT</button>
          </div>
          <div class="flex items-center gap-3 bg-game-card/40 p-3 rounded-xl border border-game-border hover:bg-game-card/80 transition">
            <div class="w-10 h-10 rounded-lg bg-cyan-800/40 flex items-center justify-center"><i class="fas fa-dragon text-xl"></i></div>
            <div>
                <p class="font-semibold text-sm">Ghost of Tsushima</p>
                <p class="text-xs text-gray-400">PS4 Director's Cut · $29.99</p>
            </div>
            <button class="ml-auto text-xs bg-green-700/40 px-2 py-1 rounded-full trend-btn">-40%</button>
          </div>
        </div>
      </div>
      
      <!-- ========== FOOTER ========== -->
      <footer class="border-t border-game-border pt-6 mt-8 text-gray-400 text-sm flex flex-col sm:flex-row justify-between items-center gap-4">
        <div class="flex items-center gap-2">
          <div class="w-7 h-7 rounded-full bg-accent-purple/30 flex items-center justify-center"><i class="fas fa-user text-white text-xs"></i></div>
          <span>Winotikk · View profile</span>
          <i class="fas fa-external-link-alt text-[10px] text-gray-500"></i>
        </div>
        <div class="flex gap-5 items-center flex-wrap">
          <a href="#" class="hover:text-white transition"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-white transition"><i class="fab fa-discord"></i></a>
          <a href="#" class="hover:text-white transition"><i class="fab fa-steam"></i></a>
          <span class="text-xs">© 2025 PLAY GAMESTORE — PC, PS3, PS4</span>
        </div>
      </footer>
    </main>
  </div>

  <!-- JavaScript for sidebar toggle and interactions -->
  <script>
    // DOM elements
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');
    
    function openSidebar() {
      mobileSidebar.classList.add('open');
      sidebarOverlay.classList.add('open');
      document.body.classList.add('sidebar-open');
    }
    
    function closeSidebar() {
      mobileSidebar.classList.remove('open');
      sidebarOverlay.classList.remove('open');
      document.body.classList.remove('sidebar-open');
    }
    
    if (hamburgerBtn) {
      hamburgerBtn.addEventListener('click', openSidebar);
    }
    if (closeSidebarBtn) {
      closeSidebarBtn.addEventListener('click', closeSidebar);
    }
    if (sidebarOverlay) {
      sidebarOverlay.addEventListener('click', closeSidebar);
    }
    
    // Close sidebar on window resize if open (when switching to desktop)
    window.addEventListener('resize', function() {
      if (window.innerWidth >= 1024) {
        closeSidebar();
      }
    });
    
    // Buy Now button handlers
    const buyBtns = document.querySelectorAll('.buy-btn');
    buyBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const card = btn.closest('.bg-game-card');
        let gameTitle = '';
        if(card) {
          const titleEl = card.querySelector('h4');
          if(titleEl) gameTitle = titleEl.innerText;
        }
        alert(`✨ ${gameTitle || 'Game'} added to cart! Proceed to secure checkout. (Demo Mockup)`);
      });
    });
    
    // Pre-order hero button
    const preorderBtn = document.getElementById('preorderBtn');
    if(preorderBtn) {
      preorderBtn.addEventListener('click', () => {
        alert('🔥 PRE-ORDER LEAGUE OF LEGENDS: Exclusive skin & early access! (Demo)');
      });
    }
    
    // Cart icon click demo
    const cartBtn = document.getElementById('cartBtn');
    if(cartBtn) {
      cartBtn.addEventListener('click', () => {
        alert('🛒 Your cart has 3 items. Proceed to checkout? (Mockup UI)');
      });
    }
    
    // Profile click demo
    const profileBtn = document.getElementById('profileBtn');
    if(profileBtn) {
      profileBtn.addEventListener('click', () => {
        alert('👤 Akun Winotikk — My orders, Library & Settings (demo)');
      });
    }
    
    // Search bar alert demo
    const searchInput = document.getElementById('searchInput');
    if(searchInput) {
      searchInput.addEventListener('keypress', (e) => {
        if(e.key === 'Enter') {
          alert(`🔍 Mencari: "${searchInput.value}" — fitur search akan terintegrasi dengan Laravel.`);
        }
      });
    }
    
    // Sidebar navigation demo
    const allNavItems = document.querySelectorAll('#mobileSidebar nav > div, #mobileSidebar .flex.items-center.gap-3.cursor-pointer, .desktop-sidebar nav > div, .desktop-sidebar .flex.items-center.gap-3');
    allNavItems.forEach(item => {
      if(item.classList && (item.classList.contains('cursor-pointer') || item.closest('.cursor-pointer'))) {
        item.addEventListener('click', (e) => {
          if(window.innerWidth < 1024) closeSidebar();
          alert('Navigation demo — full website under development with Laravel & Tailwind.');
        });
      }
    });
    
    // Trending section button demo
    const trendBtns = document.querySelectorAll('.trend-btn');
    trendBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        alert('🎮 Game ini sedang populer! Tambahkan ke wishlist?');
      });
    });
  </script>
</body>
</html>