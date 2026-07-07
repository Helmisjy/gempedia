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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
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
    <!-- <nav class="fixed w-full top-4 left-1/2 -translate-x-1/2 z-50 rounded-2xl glass-nav border border-white/5 shadow-2xl shadow-purple-900/10 transition-all duration-300">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <div class="flex items-center gap-2">
                    <a href="#" class="flex items-center gap-2.5 brand-glow">
                        <svg class="h-8 w-8 md:h-9 md:w-9" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="2" width="32" height="32" rx="10" fill="url(#brandGrad)" stroke="rgba(255,255,255,0.08)" stroke-width="1.5" />
                            <path d="M12 12L24 12L18 22L12 12Z" fill="white" fill-opacity="0.9" />
                            <path d="M18 22L24 12L26 20L18 22Z" fill="#c084fc" fill-opacity="0.5" />
                            <defs>
                                <linearGradient id="brandGrad" x1="0" y1="0" x2="36" y2="36">
                                    <stop offset="0%" stop-color="#8b5cf6" />
                                    <stop offset="100%" stop-color="#6d28d9" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="text-xl md:text-2xl font-semibold tracking-tight text-white/90 nav-glow">Nebula<span class="text-purple-400">UI</span></span>
                    </a>
                </div>

                <div class="flex items-center gap-3 md:gap-4">
                    <a href="#" class="cta-glow hidden sm:inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl border border-white/10 hover:border-white/20 transition-all duration-200 focus-ring-custom">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            Dashboard
                        </span>
                    </a>


                    <button id="menuToggle" type="button" class="inline-flex items-center p-2.5 w-10 h-10 justify-center text-sm text-gray-300 rounded-xl hover:bg-white/5 hover:text-white focus:ring-2 focus:ring-purple-500/60 transition-all duration-200 md:hidden focus-ring-custom" aria-controls="mobileMenu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg id="hamburgerIcon" class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>
                </div>


                <div class="hidden md:flex items-center gap-1 lg:gap-2">
                    <ul class="flex items-center gap-1 lg:gap-2 text-sm font-medium">
                        <li><a href="#" class="nav-glow px-4 py-2.5 text-white/80 hover:text-white rounded-xl hover:bg-white/5 transition-all duration-200">Home</a></li>
                        <li><a href="#" class="nav-glow px-4 py-2.5 text-white/70 hover:text-white rounded-xl hover:bg-white/5 transition-all duration-200">Explore</a></li>
                        <li><a href="#" class="nav-glow px-4 py-2.5 text-white/70 hover:text-white rounded-xl hover:bg-white/5 transition-all duration-200">Pricing</a></li>
                        <li><a href="#" class="nav-glow px-4 py-2.5 text-white/70 hover:text-white rounded-xl hover:bg-white/5 transition-all duration-200">Community</a></li>
                    </ul>

                    <a href="#" class="ml-2 hidden lg:inline-flex items-center gap-1.5 px-4 py-2.5 text-sm font-medium text-white/90 bg-purple-600/30 border border-purple-500/20 rounded-xl hover:bg-purple-600/50 transition-all duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        New
                    </a>
                </div>
            </div>


            <div id="mobileMenu" class="md:hidden overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                <div class="px-1 pt-2 pb-4 space-y-1 border-t border-white/5 mt-2">
                    <a href="#" class="mobile-menu-item flex items-center gap-3 px-4 py-3.5 rounded-xl text-white/80 hover:text-white transition-all duration-200 text-base font-medium">
                        <svg class="w-5 h-5 text-purple-300/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1"/></svg>
                        Home
                    </a>
                    <a href="#" class="mobile-menu-item flex items-center gap-3 px-4 py-3.5 rounded-xl text-white/70 hover:text-white transition-all duration-200 text-base font-medium">
                        <svg class="w-5 h-5 text-purple-300/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        Explore
                    </a>
                    <a href="#" class="mobile-menu-item flex items-center gap-3 px-4 py-3.5 rounded-xl text-white/70 hover:text-white transition-all duration-200 text-base font-medium">
                        <svg class="w-5 h-5 text-purple-300/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v1m0 10v-1m0 1h-1m1 0h1m-3-1.5a3.5 3.5 0 01.5-6.5 3.5 3.5 0 01.5 6.5"/></svg>
                        Pricing
                    </a>
                    <a href="#" class="mobile-menu-item flex items-center gap-3 px-4 py-3.5 rounded-xl text-white/70 hover:text-white transition-all duration-200 text-base font-medium">
                        <svg class="w-5 h-5 text-purple-300/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        Community
                    </a>

                    <div class="pt-3 mt-2 border-t border-white/5">
                        <a href="#" class="flex items-center justify-center gap-2 w-full py-3.5 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl text-white font-medium text-sm shadow-lg shadow-purple-900/40 hover:shadow-purple-700/30 transition-all duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav> -->

    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <nav class="fixed top-0 left-0 w-full bg-zinc-950 z-[9999] border-b border-white/5 shadow-2xl shadow-purple-900/10 transition-all duration-300">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="h-8 w-auto" />
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            <a href="#" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Dashboard</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                            <!-- <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a> -->
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button" class="relative rounded-full p-1 text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <el-dropdown class="relative ml-3">
                        <a href="#" aria-current="page" class="rounded-md bg-cyan-500 px-3 py-2 text-sm font-medium text-white">Login</a>
                        <!-- <button class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full bg-gray-800 outline -outline-offset-1 outline-white/10" />
                        </button>

                        <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</a>
                        </el-menu> -->
                    </el-dropdown>
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <!-- <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a> -->
            </div>
        </el-disclosure>
    </nav>

    <!-- Section slider -->
    <section class="" id="hero"class="min-h-[500px] md:min-h-screen relative overflow-hidden bg-[#050A18]">
        <div class="swiper heroSwiper h-[700px]">
            <div class="swiper-wrapper">

                {{-- ===================== --}}
                {{-- Slide 1 --}}
                {{-- ===================== --}}

                <div class="swiper-slide">

                    <div class="relative h-full w-full">

                        {{-- Background --}}
                        <img
                            src="https://4kwallpapers.com/images/walls/thumbs_2t/8565.jpg"
                            class="absolute inset-0 h-full w-full object-cover">

                        {{-- Overlay --}}
                        <div
                            class="absolute inset-0
                            bg-gradient-to-r
                            from-[#050A18]
                            via-[#050A18]/70
                            to-[#050A18]/10">
                        </div>

                        {{-- Vignette --}}
                        <div
                            class="absolute inset-0
                            shadow-[inset_0_0_220px_80px_rgba(0,0,0,.85)]">
                        </div>

                        {{-- Noise --}}
                        <div class="hero-noise absolute inset-0"></div>

                        {{-- Container --}}
                        <div
                            class="hero-content relative z-20
                            mx-auto
                            flex
                            h-full
                            max-w-7xl
                            items-center
                            px-6
                            lg:px-10">

                            {{-- LEFT --}}
                            <div class="w-full lg:w-[48%]">

                                <img
                                    src="https://upload.wikimedia.org/wikipedia/fr/a/a2/WZ2_Logo.png"
                                    class="hero-logo mb-5 w-[380px] max-w-full">

                                {{-- Badge --}}
                                <div class="flex flex-wrap items-center gap-3">

                                    <span
                                        class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white">

                                        V18319896

                                    </span>

                                    <span
                                        class="rounded-md bg-white/10 px-4 py-2 text-sm text-white">

                                        PC

                                    </span>

                                    <span class="text-gray-500">

                                        2023

                                    </span>

                                </div>

                                <p
                                    class="mt-8
                                    max-w-xl
                                    text-lg
                                    leading-9
                                    text-gray-300">

                                    In a mad and sublime utopian world,
                                    take part in explosive encounters.

                                </p>

                                <div class="mt-10 flex gap-5">

                                    <a href="#" class="rounded-xl bg-cyan-500  px-8 py-4 font-semibold text-white  transition hover:bg-cyan-400">
                                        Order Now →
                                    </a>

                                </div>

                                <!-- Progress -->

                                <div class="mt-10 w-[290px]">
                                    <div class="h-[3px] rounded-full bg-white/15">
                                        <div class="hero-progress-fill
                                                    h-full
                                                    rounded-full
                                                    bg-sky-400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ===================== --}}
                {{-- Slide 2 --}}
                {{-- ===================== --}}

                <div class="swiper-slide">

                    <div class="relative h-full w-full">

                        {{-- Background --}}
                        <img
                            src="https://wallpapercave.com/wp/wp12281909.jpg"
                            class="absolute inset-0 h-full w-full object-cover">

                        {{-- Overlay --}}
                        <div
                            class="absolute inset-0
                            bg-gradient-to-r
                            from-[#050A18]
                            via-[#050A18]/70
                            to-[#050A18]/10">
                        </div>

                        {{-- Vignette --}}
                        <div
                            class="absolute inset-0
                            shadow-[inset_0_0_220px_80px_rgba(0,0,0,.85)]">
                        </div>

                        {{-- Noise --}}
                        <div class="hero-noise absolute inset-0"></div>

                        {{-- Container --}}
                        <div
                            class="hero-content relative z-20
                            mx-auto
                            flex
                            h-full
                            max-w-7xl
                            items-center
                            px-6
                            lg:px-10">

                            {{-- LEFT --}}
                            <div class="w-full lg:w-[48%]">

                                <img
                                    src="https://cdn2.steamgriddb.com/logo/dddb352bd1de20bf1eabbc6c7581fc93.png"
                                    class="hero-logo mb-8 w-[380px] max-w-full">

                                {{-- Badge --}}
                                <div class="flex flex-wrap items-center gap-3">

                                    <span
                                        class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white">

                                        V18319896

                                    </span>

                                    <span
                                        class="rounded-md bg-white/10 px-4 py-2 text-sm text-white">

                                        PC

                                    </span>

                                    <span class="text-gray-500">

                                        2023

                                    </span>

                                </div>

                                <p
                                    class="mt-8
                                    max-w-xl
                                    text-lg
                                    leading-9
                                    text-gray-300">

                                    In a mad and sublime utopian world,
                                    take part in explosive encounters.

                                </p>

                                <div class="mt-10 flex gap-5">

                                    <a href="#" class="rounded-xl bg-cyan-500  px-8 py-4 font-semibold text-white  transition hover:bg-cyan-400">
                                        Order Now →
                                    </a>

                                </div>

                                <!-- Progress -->

                                <div class="mt-10 w-[290px]">
                                    <div class="h-[3px] rounded-full bg-white/15">
                                        <div class="hero-progress-fill
                                                    h-full
                                                    rounded-full
                                                    bg-sky-400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            {{-- Pagination --}}
            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- Main Content -->
    
    <div class="pb-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-10 mt-3">
                <div class="flex flex-wrap justify-between items-center mb-6">
                    <div>
                        <h3 class="text-2xl font-bold flex items-center gap-2"><i data-lucide="tag"></i> Available Games</h3>
                        <p class="text-gray-400 text-sm mt-1">Limited offers · PC, PS3 & PS4 digital keys</p>
                    </div>
                    <a href="#" class="text-sm text-accent-purple hover:text-accent-cyan transition flex items-center gap-1 mt-2 sm:mt-0">View all <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
                <!-- Search Bar -->
                <!-- <div id="search-container" class="mb-8 hidden md:block">
                    <input type="text" id="search-input" placeholder="Cari game..." class="w-full px-4 py-3 rounded-lg border border-slate-700 bg-slate-900 focus:outline-none focus:border-cyan-500 transition">
                </div> -->
    
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

        <button type="button" id="open-order-modal" class="btn-ripple w-full mt-2 rounded-xl bg-cyan-500 px-4 py-3 font-semibold text-slate-950 hover:shadow-lg hover:shadow-cyan-500/50 transition-all transform hover:scale-105 active:scale-95">
            Lanjut Pesan
        </button>
    </div>

    <div class="lg:hidden fixed bottom-4 left-4 right-4 z-40 rounded-3xl border border-slate-700 bg-slate-900/95 p-4 shadow-2xl backdrop-blur-sm">
        <div class="flex items-center justify-between gap-3">
            <div>
                <p class="text-[10px] uppercase tracking-[0.3em] text-cyan-400 mb-1">Pilihan</p>
                <p class="text-lg font-semibold" id="mobile-total-storage" >0 GB</p>
                <p class="text-[10px] text-slate-400">Total Game: <span id="mobile-count">0 Game</span></p>
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
                    <h3 class="text-lg text-primary font-semibold mb-4 flex items-center gap-2">
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
                    class="btn-ripple w-full sm:w-auto px-4 py-3 rounded-2xl bg-cyan-500 text-slate-950 font-semibold hover:shadow-lg hover:shadow-cyan-500/50 transition-all transform hover:scale-105 active:scale-95"
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

// Toogle Navbar
        (function() {
            const toggleBtn = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const icon = document.getElementById('hamburgerIcon');
            let isOpen = false;

            if (toggleBtn && mobileMenu) {
                toggleBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    isOpen = !isOpen;
                    // toggle max-height & opacity
                    if (isOpen) {
                        mobileMenu.style.maxHeight = '600px'; // enough to show all items
                        mobileMenu.style.opacity = '1';
                        mobileMenu.style.visibility = 'visible';
                        toggleBtn.setAttribute('aria-expanded', 'true');
                        // change icon to X
                        icon.innerHTML = `
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        `;
                    } else {
                        mobileMenu.style.maxHeight = '0';
                        mobileMenu.style.opacity = '0';
                        mobileMenu.style.visibility = 'hidden';
                        toggleBtn.setAttribute('aria-expanded', 'false');
                        icon.innerHTML = `
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                        `;
                    }
                });

                // close on outside click (optional)
                document.addEventListener('click', function(e) {
                    const nav = document.querySelector('nav');
                    if (nav && !nav.contains(e.target) && isOpen) {
                        isOpen = false;
                        mobileMenu.style.maxHeight = '0';
                        mobileMenu.style.opacity = '0';
                        mobileMenu.style.visibility = 'hidden';
                        toggleBtn.setAttribute('aria-expanded', 'false');
                        icon.innerHTML = `
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                        `;
                    }
                });
            }
        })();


</script>

</body>
</html>
