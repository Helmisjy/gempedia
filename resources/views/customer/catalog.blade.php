<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamepedia - Isi Game PC & PS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" onload="window.lucideLoaded=true; if(window.initLucide) window.initLucide();"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.jsscript>"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
    window.initLucide = function() { if(window.lucide) lucide.createIcons(); };
    document.addEventListener('DOMContentLoaded', function() { if(window.lucideLoaded) window.initLucide(); });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(15, 23, 42, 0.5);
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(6, 182, 212, 0.4);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(6, 182, 212, 0.6);
        }

        .game-card-wrapper.selected .game-card {
            border-color: #06b6d4;
            box-shadow: 0 0 30px rgba(6, 182, 212, 0.4), inset 0 0 30px rgba(6, 182, 212, 0.1);
        }

        .game-card-wrapper.selected .game-card::before {
            content: '✓';
            position: absolute;
            top: 10px;
            right: 10px;
            width: 24px;
            height: 24px;
            background: rgba(6, 182, 212, 0.9);
            border: 2px solid #06b6d4;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
            z-index: 10;
            animation: checkPopIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        @keyframes checkPopIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .game-card img {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            object-fit: cover;
            background: rgba(15, 23, 42, 0.95);
        }

        .game-card:hover img {
            transform: scale(1.15);
            filter: brightness(1.25);
        }

        /* Checkbox Soft Touch Animation */
        /* Platform Filter Animation */
        .platform-btn {
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            overflow: hidden;
        }

        .platform-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(6, 182, 212, 0.2), transparent);
            transition: left 0.5s;
            z-index: -1;
        }

        .platform-btn:hover::before {
            left: 100%;
        }

        .platform-btn:hover {
            border-color: #06b6d4;
            background: rgba(6, 182, 212, 0.1);
            transform: translateY(-2px);
        }

        .platform-btn.active {
            border-color: #06b6d4;
            background: rgba(6, 182, 212, 0.2);
            color: #06b6d4;
        }

        /* Floating Selection Card */
        .selection-card {
            animation: floatUp 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            position: fixed;
            right: 2rem;
            bottom: 15rem;
            z-index: 40;
            max-width: 500px;
        }

        .selection-card.hidden {
            opacity: 0;
            pointer-events: none;
        }

        @keyframes floatUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .selection-card {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        .selection-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.1), transparent);
            border: 2px solid rgba(6, 182, 212, 0.2);
            animation: borderPulse 3s ease-in-out infinite;
        }

        @keyframes borderPulse {
            0%, 100% {
                border-color: rgba(6, 182, 212, 0.2);
                box-shadow: 0 0 20px rgba(6, 182, 212, 0.1);
            }
            50% {
                border-color: rgba(6, 182, 212, 0.5);
                box-shadow: 0 0 40px rgba(6, 182, 212, 0.3);
            }
        }

        .selection-card > * {
            position: relative;
            z-index: 1;
        }

        /* Button Ripple Effect */
        .btn-ripple {
            position: relative;
            overflow: hidden;
        }

        .btn-ripple::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            animation: ripple 0.6s ease-out;
            pointer-events: none;
        }

        .btn-ripple:active::after {
            animation: ripple 0.6s ease-out;
        }

        @keyframes ripple {
            0% {
                width: 0;
                height: 0;
            }
            100% {
                width: 300px;
                height: 300px;
            }
        }

        /* Text Selection Animation */
        .text-shimmer {
            background: linear-gradient(90deg, #06b6d4, #0891b2, #06b6d4);
            background-size: 200% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% {
                background-position: 200% center;
            }
            50% {
                background-position: -200% center;
            }
        }

        .decorative-panel {
            position: relative;
            overflow: hidden;
        }

        .decorative-panel::before {
            content: '';
            position: absolute;
            top: -2rem;
            right: -4rem;
            width: 20rem;
            height: 20rem;
            border-radius: 50%;
            background: rgba(6, 182, 212, 0.12);
            filter: blur(48px);
            z-index: 0;
        }

        .decorative-panel::after {
            content: '';
            position: absolute;
            bottom: -2.5rem;
            left: -3rem;
            width: 16rem;
            height: 16rem;
            border-radius: 50%;
            background: rgba(15, 23, 42, 0.75);
            filter: blur(32px);
            z-index: 0;
        }

        /* Modal Animation */
        .modal-enter {
            animation: modalIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            max-width: 100%;
        }

        @keyframes modalIn {
            0% {
                opacity: 0;
                transform: scale(0.95) translateY(20px);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .selection-card {
                right: 1rem;
                bottom: 1rem;
                max-width: 320px;
            }
        }

        @media (max-width: 768px) {
            .selection-card {
                left: 50%;
                right: auto;
                transform: translateX(-50%);
                width: min(92vw, 360px);
                max-width: 360px;
                bottom: 1rem;
            }

            #order-modal {
                align-items: flex-start;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            .modal-enter {
                border-radius: 28px;
                max-width: 100%;
                max-height: calc(100vh - 2rem);
                margin: 0 0.5rem;
            }

            .modal-enter > .flex {
                max-height: calc(100vh - 4rem);
            }
        }

        /* Loading Animation */
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(6, 182, 212, 0.2);
            }
            50% {
                box-shadow: 0 0 40px rgba(6, 182, 212, 0.4);
            }
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100">
    <!-- Header Section -->
    <div class="fixed top-0 left-0 right-0 z-30 border-b border-slate-800/50 bg-slate-950/80 backdrop-blur-md">
        <div class="mx-auto max-w-8xl px-4 py-4 sm:px-6 lg:px-12">
            <div class="flex items-center justify-between gap-4">
                <div class="flex-1">
                    <h1 class="text-3xl sm:text-4xl font-bold">GAMEPEDIA</h1>
                    <!-- <p class="text-xs sm:text-sm uppercase tracking-[0.3em] text-cyan-400">Koleksi Game Terlengkap</p> -->
                </div>
                <div class="flex items-center gap-4">
                    <button id="search-toggle" class="p-2 hover:bg-slate-800 rounded-lg transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="px-4 py-2 text-sm rounded-lg border border-slate-700 hover:border-cyan-500 transition">Dashboard</a>
                    @else
                    <a href="{{ url('/login') }}" class="px-4 py-2 text-sm rounded-lg bg-cyan-500 text-slate-950 font-semibold hover:bg-cyan-400 transition">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    
    <div class="pt-24 pb-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <div id="default-carousel" class="relative w-full h-[500px] group overflow-hidden rounded-2xl shadow-2xl shadow-black/30">
                <!-- Carousel Wrapper -->
                <div class="relative h-[500px]">
                    <div class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] opacity-0 scale-105 z-0 data-[active=true]:opacity-100 data-[active=true]:scale-100 data-[active=true]:z-10 data-[exit=true]:opacity-0 data-[exit=true]:scale-95" data-carousel-item="0" data-active="true">
                        <img src="https://images3.alphacoders.com/137/1374941.jpg" alt="League of Legends" class="absolute inset-0 w-full h-full object-cover scale-110 transition-transform duration-[3000ms] group-data-[active=true]:scale-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
        
                        <div class="relative z-10 h-full p-6 md:p-10 flex flex-col md:flex-row items-center justify-between">
                            <div class="flex-1 text-center md:text-left space-y-4 transform transition-all duration-700 delay-200 opacity-0 translate-y-8 data-[active=true]:opacity-100 data-[active=true]:translate-y-0">
                                <div class="inline-flex items-center justify-center md:justify-start gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
                                    <i class="fas fa-crown text-yellow-400 text-sm"></i>
                                    <span class="text-yellow-400 text-xs font-bold tracking-wider uppercase">Koleksi Digital</span>
                                </div>
        
                                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black tracking-tight leading-[1.1]">
                                    <span class="bg-gradient-to-r from-yellow-400 via-yellow-300 to-amber-500 bg-clip-text text-transparent">
                                        League of
                                    </span>
                                    <br>
                                    <span class="text-white">Legends</span>
                                </h2>
        
                                <p class="text-gray-300/90 max-w-lg text-sm md:text-base leading-relaxed">
                                    Rasakan epik pertempuran di medan perang Summoner's Rift. Pilih champion favoritmu dan menangkan pertarungan!
                                </p>
        
                                <button class="mt-2 bg-gradient-to-r from-yellow-400 to-amber-500 text-black font-bold px-8 py-3.5 rounded-full shadow-lg shadow-yellow-500/30 hover:shadow-yellow-500/50 hover:scale-105 hover:-translate-y-1 transition-all duration-300 active:scale-95">
                                    Order Now
                                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </button>
                            </div>
        
                            <div class="flex-shrink-0 mt-6 md:mt-0 transform transition-all duration-700 delay-300 opacity-0 scale-75 rotate-[-10deg] data-[active=true]:opacity-100 data-[active=true]:scale-100 data-[active=true]:rotate-0">
                                <div class="w-32 h-32 md:w-48 md:h-48 rounded-full overflow-hidden border-4 border-yellow-400/30 shadow-2xl shadow-yellow-500/20 transition-all duration-500 group-hover:border-yellow-400/70 group-hover:shadow-yellow-500/40">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_0.jpg" alt="Ahri" class="w-full h-full object-cover scale-110 transition-transform duration-700 group-hover:scale-100">
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Item 2 - Cyberpunk 2077 -->
                    <div class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] opacity-0 scale-105 z-0 data-[active=true]:opacity-100 data-[active=true]:scale-100 data-[active=true]:z-10 data-[exit=true]:opacity-0 data-[exit=true]:scale-95" data-carousel-item="1">
                        <img src="https://4kwallpapers.com/images/wallpapers/gta-6-game-art-5k-3840x2160-14300.jpg" alt="Cyberpunk 2077" class="absolute inset-0 w-full h-full object-cover scale-110 transition-transform duration-[3000ms] group-data-[active=true]:scale-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
        
                        <div class="relative z-10 h-full p-6 md:p-10 flex flex-col md:flex-row items-center justify-between">
                            <div class="flex-1 text-center md:text-left space-y-4 transform transition-all duration-700 delay-200 opacity-0 translate-y-8 data-[active=true]:opacity-100 data-[active=true]:translate-y-0">
                                <div class="inline-flex items-center justify-center md:justify-start gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
                                    <i class="fas fa-crown text-yellow-400 text-sm"></i>
                                    <span class="text-yellow-400 text-xs font-bold tracking-wider uppercase">Koleksi Digital</span>
                                </div>
        
                                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black tracking-tight leading-[1.1]">
                                    <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-500 bg-clip-text text-transparent">
                                        Cyberpunk
                                    </span>
                                    <br>
                                    <span class="text-white">2077</span>
                                </h2>
        
                                <p class="text-gray-300/90 max-w-lg text-sm md:text-base leading-relaxed">
                                    Masuki dunia futuristik Night City. Jadilah legenda di kota yang penuh dengan teknologi dan kejahatan.
                                </p>
        
                                <button class="mt-2 bg-gradient-to-r from-cyan-400 to-blue-500 text-black font-bold px-8 py-3.5 rounded-full shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:scale-105 hover:-translate-y-1 transition-all duration-300 active:scale-95">
                                    Order Now
                                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </button>
                            </div>
        
                            <div class="flex-shrink-0 mt-6 md:mt-0 transform transition-all duration-700 delay-300 opacity-0 scale-75 rotate-[-10deg] data-[active=true]:opacity-100 data-[active=true]:scale-100 data-[active=true]:rotate-0">
                                <div class="w-32 h-32 md:w-48 md:h-48 rounded-full overflow-hidden border-4 border-cyan-400/30 shadow-2xl shadow-cyan-500/20 transition-all duration-500 group-hover:border-cyan-400/70 group-hover:shadow-cyan-500/40">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yasuo_0.jpg" alt="Yasuo" class="w-full h-full object-cover scale-110 transition-transform duration-700 group-hover:scale-100">
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Item 3 - Valorant -->
                    <div class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] opacity-0 scale-105 z-0 data-[active=true]:opacity-100 data-[active=true]:scale-100 data-[active=true]:z-10 data-[exit=true]:opacity-0 data-[exit=true]:scale-95" data-carousel-item="2">
                        <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=1200&q=80" alt="Valorant" class="absolute inset-0 w-full h-full object-cover scale-110 transition-transform duration-[3000ms] group-data-[active=true]:scale-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
        
                        <div class="relative z-10 h-full p-6 md:p-10 flex flex-col md:flex-row items-center justify-between">
                            <div class="flex-1 text-center md:text-left space-y-4 transform transition-all duration-700 delay-200 opacity-0 translate-y-8 data-[active=true]:opacity-100 data-[active=true]:translate-y-0">
                                <div class="inline-flex items-center justify-center md:justify-start gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
                                    <i class="fas fa-crown text-yellow-400 text-sm"></i>
                                    <span class="text-yellow-400 text-xs font-bold tracking-wider uppercase">Koleksi Digital</span>
                                </div>
        
                                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black tracking-tight leading-[1.1]">
                                    <span class="bg-gradient-to-r from-red-400 via-orange-400 to-yellow-400 bg-clip-text text-transparent">
                                        Valorant
                                    </span>
                                    <br>
                                    <span class="text-white">Tactical FPS</span>
                                </h2>
        
                                <p class="text-gray-300/90 max-w-lg text-sm md:text-base leading-relaxed">
                                    Tunjukkan skill tembakanmu di game FPS taktis terbaik. Pilih agen dengan kemampuan unik dan menangkan pertandingan!
                                </p>
        
                                <button class="mt-2 bg-gradient-to-r from-red-400 to-orange-500 text-black font-bold px-8 py-3.5 rounded-full shadow-lg shadow-red-500/30 hover:shadow-red-500/50 hover:scale-105 hover:-translate-y-1 transition-all duration-300 active:scale-95">
                                    Order Now
                                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </button>
                            </div>
        
                            <div class="flex-shrink-0 mt-6 md:mt-0 transform transition-all duration-700 delay-300 opacity-0 scale-75 rotate-[-10deg] data-[active=true]:opacity-100 data-[active=true]:scale-100 data-[active=true]:rotate-0">
                                <div class="w-32 h-32 md:w-48 md:h-48 rounded-full overflow-hidden border-4 border-red-400/30 shadow-2xl shadow-red-500/20 transition-all duration-500 group-hover:border-red-400/70 group-hover:shadow-red-500/40">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jinx_0.jpg" alt="Jinx" class="w-full h-full object-cover scale-110 transition-transform duration-700 group-hover:scale-100">
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-6 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300 data-[active=true]:w-10 data-[active=true]:bg-yellow-400 data-[active=true]:shadow-lg data-[active=true]:shadow-yellow-500/50" data-slide-to="0" data-active="true" aria-label="Slide 1"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300 data-[active=true]:w-10 data-[active=true]:bg-cyan-400 data-[active=true]:shadow-lg data-[active=true]:shadow-cyan-500/50" data-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300 data-[active=true]:w-10 data-[active=true]:bg-red-400 data-[active=true]:shadow-lg data-[active=true]:shadow-red-500/50" data-slide-to="2" aria-label="Slide 3"></button>
                    </div>
        
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group/btn focus:outline-none opacity-0 hover:opacity-100 transition-opacity duration-300" id="prevBtn">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black/30 backdrop-blur-sm hover:bg-black/50 border border-white/10 hover:border-white/30 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m15 19-7-7 7-7"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group/btn focus:outline-none opacity-0 hover:opacity-100 transition-opacity duration-300" id="nextBtn">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black/30 backdrop-blur-sm hover:bg-black/50 border border-white/10 hover:border-white/30 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m9 5 7 7-7 7"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>



            <div class="mb-10 mt-12">
                <div class="flex flex-wrap justify-between items-center mb-6">
                    <div>
                        <h3 class="text-2xl font-bold flex items-center gap-2"><i data-lucide="tag"></i> Available Games</h3>
                        <p class="text-gray-400 text-sm mt-1">Limited offers · PC, PS3 & PS4 digital keys</p>
                    </div>
                    <a href="#" class="text-sm text-accent-purple hover:text-accent-cyan transition flex items-center gap-1 mt-2 sm:mt-0">View all <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
                <!-- Search Bar -->
                <div id="search-container" class="mb-8 hidden md:block">
                    <input type="text" id="search-input" placeholder="Cari game..." class="w-full px-4 py-3 rounded-lg border border-slate-700 bg-slate-900 focus:outline-none focus:border-cyan-500 transition">
                </div>
    
                <!-- Platform Filters -->
                <form id="order-form" method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="text-sm uppercase tracking-widest text-cyan-400 font-semibold">Filter Platform</span>
                            <button type="button" id="reset-filters" class="text-xs text-slate-400 hover:text-cyan-400 transition">Hapus Filter</button>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <button type="button" class="platform-btn platform-filter rounded-full border border-slate-700 px-4 py-2 text-sm transition" data-filter="all">
                                Semua Platform
                            </button>
                            @foreach($platforms as $platform)
                                <button type="button" class="platform-btn platform-filter rounded-full border border-slate-700 px-4 py-2 text-sm transition" data-filter="{{ $platform->slug }}">
                                    {{ $platform->name }}
                                </button>
                            @endforeach
                        </div>
                    </div>
    
    
    
                    <!-- Games Grid -->
                    <div class="mb-8">
                        <h3 class="text-lg uppercase tracking-widest font-semibold text-slate-300 mb-6">Tersedia <span id="game-count">{{ $games->sum(fn($g) => count($g->gamePlatforms)) }}</span> Game</h3>
                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                            @foreach($games as $game)
                                @php $platformsForGame = $game->gamePlatforms; @endphp
                                @foreach($platformsForGame as $gamePlatform)
                                    @php $platform = $gamePlatform->platform; @endphp
                                    <div class="game-card-wrapper group cursor-pointer" data-platform="{{ $platform?->slug }}" data-game-id="{{ $game->id }}" data-game-platform-id="{{ $gamePlatform->id }}" data-title="{{ $game->title }}" data-platform-name="{{ $platform?->name }}" data-size="{{ $gamePlatform->size_gb }}">
                                        <div class="game-card relative rounded-2xl border-2 border-slate-700 bg-gradient-to-b from-slate-800 to-slate-900 overflow-hidden h-full flex flex-col transition-all duration-300 hover:border-cyan-500/50" style="aspect-ratio: 3/4;">
                                            <!-- Image Container (Full Card Background) -->
                                            <div class="realtive overflow-hidden rounded-2xl">
                                                <img src="{{ $game->cover ?: 'https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=900&q=80' }}" alt="{{ $game->title }}" class="w-full h-full object-cover">
                                                <!-- <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent opacity-100"></div> -->
                                                <div class="absolute flex items-center top-4 right-4 bg-green-500 gap-1.5 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                                                    <i data-lucide="server" class="size-4"></i>
                                                    <span class="text-sm font-medium"> {{ round($gamePlatform->size_gb) }} GB</span>
                                                </div>
                                                <div class="absolute bottom-4 left-4">
                                                    <span class="bg-black/60 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-lg border border-white/20">{{ $game->title }}</span>
                                                    <span class="bg-black/60 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-lg border border-white/20">{{ $game->genres->pluck('name')->join(', ') ?? 'Action' }}</span>
                                                </div>
                                                <div class="absolute inset-0 bg-slate-900/30"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
    
                    <!-- Hidden Inputs -->
                    <input type="hidden" id="selected-summary" name="selected_summary" value="">
                    <input type="hidden" id="selected-items" name="items" value="">
                    <input type="hidden" id="order-customer_name" name="customer_name" value="">
                    <input type="hidden" id="order-whatsapp" name="whatsapp" value="">
                    <input type="hidden" id="order-email" name="email" value="">
                </form>
            </div>
        </div>
    </div>

    <!-- selection card v1 -->
    <div class="selection-card max-md:hidden flex-col gap-4 rounded-2xl border border-slate-700 bg-slate-900/95 backdrop-blur-sm p-5 shadow-2xl">
        <div>
            <p class="text-xs uppercase tracking-widest text-cyan-400 font-semibold mb-1">Pilihan Anda</p>
            <p class="text-4xl font-bold text-white" id="float-count">0</p>
            <p class="text-sm text-slate-400">Game dipilih</p>
        </div>

        <div class="border-t border-slate-700 pt-4">
            <p class="text-xs text-slate-400 mb-1">Total Storage</p>
            <p class="text-2xl font-bold text-cyan-400" id="float-size">0 GB</p>
        </div>

        <div class="border-t border-slate-700 pt-4">
            <p class="text-xs text-slate-400 mb-1">Paket Rekomendasi</p>
            <p class="text-lg font-semibold" id="float-package">-</p>
        </div>

        <button type="button" id="open-order-modal" class="btn-ripple w-full mt-2 rounded-xl bg-gradient-to-r from-cyan-500 to-cyan-600 px-4 py-3 font-semibold text-slate-950 hover:shadow-lg hover:shadow-cyan-500/50 transition-all transform hover:scale-105 active:scale-95">
            Lanjut Pesan
        </button>
    </div>

    <div class="lg:hidden fixed left-1/2 bottom-4 z-40 w-[min(94vw,420px)] -translate-x-1/2 rounded-3xl border border-slate-700 bg-slate-900/95 p-4 shadow-2xl backdrop-blur-sm">
        <div class="flex items-center justify-between gap-3">
            <div>
                <p class="text-[10px] uppercase tracking-[0.3em] text-cyan-400 mb-1">Pilihan</p>
                <p class="text-lg font-semibold" id="mobile-count">0 game</p>
                <p class="text-[10px] text-slate-400">Storage: <span id="mobile-total-storage">0 GB</span></p>
            </div>
            <button type="button" id="open-order-modal-mobile" class="btn-ripple rounded-2xl bg-cyan-500 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-cyan-400 transition">
                Pesan
            </button>
        </div>
    </div>

    <!-- Order Modal -->
    <div id="order-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/90 backdrop-blur-xl px-3 py-6">
        <div class="modal-enter w-full max-w-3xl max-h-[92vh] overflow-hidden rounded-[32px] border border-slate-700 bg-slate-950/95 shadow-2xl backdrop-blur-xl">
            <div class="flex h-full flex-col overflow-hidden">
                <div class="flex items-center justify-between border-b border-slate-800 px-5 py-4">
                    <div>
                        <h2 class="text-3xl font-bold">Ringkasan Order</h2>
                        <p class="text-sm text-slate-400 mt-1">Verifikasi dan lengkapi data Anda</p>
                    </div>
                    <button type="button" id="close-order-modal" class="text-slate-400 hover:text-white transition p-3 rounded-full hover:bg-slate-800/70">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex h-full flex-col overflow-y-auto p-5 sm:p-6">

            <!-- Games List -->
            <div class="grid gap-6 lg:grid-cols-[1.5fr_0.8fr] mb-6">
                <div>
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 bg-cyan-500 rounded-full"></span>
                        Daftar Game Pilihan
                    </h3>
                    <ul id="modal-items" class="space-y-2 max-h-64 overflow-y-auto">
                        <li class="text-slate-400 text-sm">Belum ada game yang dipilih</li>
                    </ul>
                </div>

                <!-- Summary Box -->
                <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-5 h-fit">
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-slate-400 mb-1">Total Game</p>
                            <p id="modal-count" class="text-3xl font-bold text-cyan-400">0</p>
                        </div>
                        <div class="border-t border-slate-700 pt-4">
                            <p class="text-xs uppercase tracking-widest text-slate-400 mb-1">Total Storage</p>
                            <p id="modal-size" class="text-3xl font-bold">0 GB</p>
                        </div>
                        <div class="border-t border-slate-700 pt-4">
                            <p class="text-xs uppercase tracking-widest text-slate-400 mb-1">Paket Rekomendasi</p>
                            <p id="modal-package" class="text-lg font-semibold bg-gradient-to-r from-cyan-400 to-cyan-500 bg-clip-text text-transparent">Paket Starter</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Fields -->
            <form id="order-form-modal" class="space-y-4" novalidate>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-2">
                            Nama Lengkap *
                        </label>
                        <input 
                            type="text" 
                            name="customer_name" 
                            required 
                            class="w-full px-4 py-3 rounded-lg border border-slate-700 bg-slate-800 text-slate-100 focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition"
                            placeholder="Masukkan nama Anda"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-2">
                            WhatsApp *
                        </label>
                        <input 
                            type="text" 
                            name="whatsapp" 
                            required 
                            class="w-full px-4 py-3 rounded-lg border border-slate-700 bg-slate-800 text-slate-100 focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition"
                            placeholder="08xx-xxxx-xxxx"
                        >
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">
                        Email <span class="text-slate-500">(Opsional)</span>
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        class="w-full px-4 py-3 rounded-lg border border-slate-700 bg-slate-800 text-slate-100 focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition"
                        placeholder="email@example.com"
                    >
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex flex-col gap-3 pt-6 mx-4 mb-4 border-t border-slate-700 sm:flex-row sm:items-center">
                <button 
                    type="button" 
                    id="cancel-order-modal" 
                    class="w-full sm:w-auto px-4 py-3 rounded-2xl border border-slate-700 text-slate-300 font-semibold hover:border-slate-600 hover:bg-slate-800 transition"
                >
                    Batal
                </button>
                <button 
                    type="submit" 
                    class="btn-ripple w-full sm:w-auto px-4 py-3 rounded-2xl bg-gradient-to-r from-cyan-500 to-cyan-600 text-slate-950 font-semibold hover:shadow-lg hover:shadow-cyan-500/50 transition-all transform hover:scale-105 active:scale-95"
                >
                    Konfirmasi Order
                </button>
            </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize
        const cardWrappers = Array.from(document.querySelectorAll('.game-card-wrapper'));
        const platformFilters = Array.from(document.querySelectorAll('.platform-filter'));
        const floatCount = document.getElementById('float-count');
        const floatSize = document.getElementById('float-size');
        const floatPackage = document.getElementById('float-package');
        const mobileCount = document.getElementById('mobile-count');
        const modalCount = document.getElementById('modal-count');
        const modalSize = document.getElementById('modal-size');
        const modalPackage = document.getElementById('modal-package');
        const modalItems = document.getElementById('modal-items');
        const gameCount = document.getElementById('game-count');
        const mobileTotalStorage = document.getElementById('mobile-total-storage');
        const selectedItemsInput = document.getElementById('selected-items');
        const selectedSummaryInput = document.getElementById('selected-summary');
        let currentFilter = 'all';

        // Package recommendation
        function getPackage(totalSize) {
            if (totalSize <= 100) return 'Paket Starter';
            if (totalSize <= 250) return 'Paket Booster';
            return 'Paket Premium';
        }

        // Update all summary displays
        function syncSummary() {
            const selected = cardWrappers.filter(w => w.classList.contains('selected'));
            const totalGames = selected.length;
            const totalSize = selected.reduce((sum, w) => sum + Number(w.dataset.size || 0), 0);
            const packageName = getPackage(totalSize);

            // Update floating card
            floatCount.textContent = totalGames;
            floatSize.textContent = `${totalSize.toFixed(1)} GB`;
            floatPackage.textContent = packageName;

            // Update mobile count and storage
            mobileCount.textContent = totalGames;
            mobileTotalStorage.textContent = `${totalSize.toFixed(1)} GB`;

            // Update modal
            modalCount.textContent = totalGames;
            modalSize.textContent = `${totalSize.toFixed(1)} GB`;
            modalPackage.textContent = packageName;

            // Update modal items list
            if (totalGames === 0) {
                modalItems.innerHTML = '<li class="text-slate-400 text-sm">Belum ada game yang dipilih</li>';
            } else {
                modalItems.innerHTML = selected.map(w => 
                    `<li class="flex items-center justify-between p-3 rounded-lg border border-slate-700 bg-slate-800/50 hover:bg-slate-700/50 transition">
                        <div>
                            <p class="text-sm font-semibold text-white">${w.dataset.title}</p>
                            <p class="text-xs text-slate-400">${w.dataset.platformName}</p>
                        </div>
                        <span class="text-sm font-semibold text-cyan-400">${w.dataset.size} GB</span>
                    </li>`
                ).join('');
            }

            // Update hidden inputs
            selectedSummaryInput.value = JSON.stringify(selected.map(w => ({ 
                title: w.dataset.title, 
                platform: w.dataset.platformName, 
                size: w.dataset.size 
            })));
            
            selectedItemsInput.value = JSON.stringify(selected.map(w => ({ 
                game_platform_id: w.dataset.gamePlatformId, 
                title: w.dataset.title, 
                platform_name: w.dataset.platformName, 
                size_gb: w.dataset.size 
            })));
        }

        // Platform filter handler
        function filterByPlatform(filterValue) {
            currentFilter = filterValue;
            const cards = document.querySelectorAll('[data-platform]');
            
            cards.forEach(card => {
                if (filterValue === 'all' || card.dataset.platform === filterValue) {
                    card.style.display = '';
                    // Add entrance animation
                    card.style.animation = 'none';
                    setTimeout(() => {
                        card.style.animation = '';
                    }, 10);
                } else {
                    card.style.display = 'none';
                }
            });

            // Update active filter button
            platformFilters.forEach(btn => {
                if (btn.dataset.filter === filterValue) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            // Update game count
            const visibleCards = document.querySelectorAll('[data-platform]:not([style*="display: none"])');
            gameCount.textContent = visibleCards.length;
        }

        // Search functionality
        document.getElementById('search-toggle')?.addEventListener('click', () => {
            const searchContainer = document.getElementById('search-container');
            searchContainer?.classList.toggle('hidden');
        });

        document.getElementById('search-input')?.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.game-card-wrapper');
            
            cards.forEach(card => {
                // Note: We need to get the title from the game card
                const titleElement = card.querySelector('h3');
                const title = titleElement?.textContent.toLowerCase() || '';
                const isVisible = title.includes(searchTerm);
                
                if (isVisible && (currentFilter === 'all' || card.dataset.platform === currentFilter)) {
                    card.style.display = '';
                    card.style.opacity = '1';
                } else {
                    card.style.display = 'none';
                    card.style.opacity = '0.5';
                }
            });
        });

        // Card click handlers
        cardWrappers.forEach(wrapper => {
            wrapper.addEventListener('click', (e) => {
                wrapper.classList.toggle('selected');
                syncSummary();
            });
        });

        // Platform filter button listeners
        platformFilters.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                filterByPlatform(btn.dataset.filter);
            });
        });

        // Reset filters
        document.getElementById('reset-filters')?.addEventListener('click', (e) => {
            e.preventDefault();
            filterByPlatform('all');
            document.getElementById('search-input').value = '';
        });

        // Modal handlers
        function openOrderModal() {
            if (cardWrappers.filter(w => w.classList.contains('selected')).length === 0) {
                alert('Pilih minimal satu game sebelum lanjut');
                return;
            }
            syncSummary();
            document.getElementById('order-modal').classList.remove('hidden');
            document.getElementById('order-modal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeOrderModal() {
            document.getElementById('order-modal').classList.add('hidden');
            document.getElementById('order-modal').classList.remove('flex');
            document.body.style.overflow = '';
        }

        document.getElementById('open-order-modal')?.addEventListener('click', openOrderModal);
        document.getElementById('open-order-modal-mobile')?.addEventListener('click', openOrderModal);
        document.getElementById('close-order-modal')?.addEventListener('click', closeOrderModal);
        document.getElementById('cancel-order-modal')?.addEventListener('click', closeOrderModal);

        // Close modal on escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeOrderModal();
        });

        // Close modal when clicking outside
        document.getElementById('order-modal')?.addEventListener('click', (e) => {
            if (e.target === e.currentTarget) closeOrderModal();
        });

        // Form submission
        document.getElementById('order-form-modal')?.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData);

            // Validate
            if (!data.customer_name || !data.whatsapp ) {
                alert('Harap isi semua field yang wajib');
                return;
            }

            // Copy data to main form and submit
            const mainForm = document.getElementById('order-form');
            mainForm.querySelector('[name="customer_name"]').value = data.customer_name;
            mainForm.querySelector('[name="whatsapp"]').value = data.whatsapp;
            mainForm.querySelector('[name="email"]').value = data.email || '';

            mainForm.submit();
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            syncSummary();
            filterByPlatform('all');
        });

        // Add touch feedback for cards
        document.querySelectorAll('.game-card').forEach(card => {
            card.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.98)';
            });
            card.addEventListener('touchend', function() {
                this.style.transform = '';
            });
        });
    </script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('[data-carousel-item]');
    const dots = document.querySelectorAll('[data-slide-to]');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;
    let isTransitioning = false;
    let autoplayInterval;

    function updateCarousel(newIndex) {
        if (isTransitioning || newIndex === currentIndex) return;
        if (newIndex < 0) newIndex = items.length - 1;
        if (newIndex >= items.length) newIndex = 0;

        isTransitioning = true;

        // Set exit state on current
        const currentItem = items[currentIndex];
        currentItem.setAttribute('data-exit', 'true');
        currentItem.removeAttribute('data-active');

        // Update dots
        dots[currentIndex].removeAttribute('data-active');

        // After a small delay, activate new item
        setTimeout(() => {
            // Remove exit from old
            currentItem.removeAttribute('data-exit');

            // Activate new
            const newItem = items[newIndex];
            newItem.setAttribute('data-active', 'true');
            
            // Update dots
            dots[newIndex].setAttribute('data-active', 'true');

            currentIndex = newIndex;

            setTimeout(() => {
                isTransitioning = false;
            }, 100);
        }, 100);
    }

    function nextSlide() {
        updateCarousel(currentIndex + 1);
        resetAutoplay();
    }

    function prevSlide() {
        updateCarousel(currentIndex - 1);
        resetAutoplay();
    }

    function startAutoplay() {
        if (autoplayInterval) clearInterval(autoplayInterval);
        autoplayInterval = setInterval(nextSlide, 5000);
    }

    function resetAutoplay() {
        clearInterval(autoplayInterval);
        startAutoplay();
    }

    // Event listeners
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            updateCarousel(index);
            resetAutoplay();
        });
    });

    // Pause on hover
    const container = document.querySelector('#default-carousel');
    container.addEventListener('mouseenter', () => {
        clearInterval(autoplayInterval);
    });
    container.addEventListener('mouseleave', startAutoplay);

    // Keyboard support
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
            e.preventDefault();
            nextSlide();
        } else if (e.key === 'ArrowLeft') {
            e.preventDefault();
            prevSlide();
        }
    });

    // Start autoplay
    startAutoplay();

    // Set initial active state for first dot
    dots[0].setAttribute('data-active', 'true');
});
</script>

</body>
</html>
