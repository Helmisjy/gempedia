<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>GAMEPEDIA</title>
  <!-- Tailwind CSS v3 + Font Awesome + Google Fonts -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
 @vite([
'resources/css/app.css',
'resources/js/app.js'
])
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'sans': ['Inter', 'system-ui', 'Segoe UI', 'sans-serif'],
          },
          colors: {
            'primary': '#0a0c10',
            'secondary': '#15171e',
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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }
    :root {
      /* Primary Colors */
      --color-primary: #3b82f6;
      /* Secondary Colors */
      --color-secondary: #f8fafc;
      /* Accent Colors */
      --color-accent: #ec4899;
      /* text color */
      --color-text-primary: #ffffff;
      --color-text-primary: #000000;
      /* Status Colors */
      --color-success: #10b981;
      --color-warning: #f59e0b;
      --color-error: #ef4444;
      --color-info: #3b82f6;
      
      /* Font Family */
      --font-primary: 'Inter', system-ui, -apple-system, sans-serif;
      --font-secondary: 'Poppins', sans-serif;
      
      /* Font Sizes */
      --text-xs: 0.75rem;
      --text-sm: 0.875rem;
      --text-base: 1rem;
      --text-lg: 1.125rem;
      --text-xl: 1.25rem;
      --text-2xl: 1.5rem;
      --text-3xl: 1.875rem;
      --text-4xl: 2.25rem;
      --text-5xl: 3rem;
      
      /* Spacing */
      --spacing-1: 0.25rem;
      --spacing-2: 0.5rem;
      --spacing-3: 0.75rem;
      --spacing-4: 1rem;
      --spacing-6: 1.5rem;
      --spacing-8: 2rem;
      --spacing-10: 2.5rem;
      --spacing-12: 3rem;
      --spacing-16: 4rem;
      
      /* Border Radius */
      --radius-sm: 0.25rem;
      --radius-md: 0.5rem;
      --radius-lg: 1rem;
      --radius-xl: 1.5rem;
      --radius-full: 9999px;
      
      /* Shadows */
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      --shadow-soft: 0 2px 15px -3px rgba(0, 0, 0, 0.07);
    }
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.625rem 1.5rem;
      font-weight: 600;
      border-radius: var(--radius-md);
      transition: all 0.2s ease-in-out;
      cursor: pointer;
      border: none;
      text-decoration: none;
      gap: 0.5rem;
    }

    .btn-primary {
      background-color: var(--color-primary);
      color: white;
    }
    .btn-primary:hover {
      background-color: var(--color-primary);
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .btn-secondary {
      background-color: var(--color-secondary);
      color: white;
    }
    .btn-secondary:hover {
      background-color: var(--color-secondary-200);
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .btn-accent {
      background-color: var(--color-accent-500);
      color: white;
    }
    .btn-accent:hover {
      background-color: #db2777;
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .btn-outline {
      background-color: transparent;
      color: var(--color-primary-500);
      border: 2px solid var(--color-primary-500);
    }
    .btn-outline:hover {
      background-color: var(--color-primary-500);
      color: white;
      transform: translateY(-2px);
    }

    .btn-ghost {
      background-color: transparent;
      color: var(--color-secondary-700);
    }
    .btn-ghost:hover {
      background-color: var(--color-secondary-100);
    }

    .btn-sm {
      padding: 0.375rem 1rem;
      font-size: var(--text-sm);
    }
    .btn-lg {
      padding: 0.875rem 2rem;
      font-size: var(--text-lg);
    }

    /* stlye slider */
    .carousel-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    /* Animasi smooth */
    .carousel-item {
        transition: opacity 0.7s ease-in-out;
    }
    
    .carousel-item:not(.active) {
        opacity: 0;
        pointer-events: none;
    }
    
    .carousel-item.active {
        opacity: 1;
    }
/* Tambahan untuk memastikan gambar cover penuh */
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
</head>
<body class="bg-primary">
  
  <!-- Navigation bar -->
  <nav class="bg-white shadow-lg p-3">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo" />
          <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">Flowbite</span>
      </a>
      <div class="inline-flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <button type="button" class="text-primary bg-brand btn btn-primary">Get started</button>
          <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-9 h-9 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-cta" aria-expanded="false">
             <span class="sr-only">Open main menu</span>
             <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
          <li>
            <a href="#" class="block py-2 px-3 text-white bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Container -->
    <section class="mt-5 p-5" id="hero"
    class="relative overflow-hidden bg-[#050A18]">

        <div class="swiper heroSwiper h-[700px]">

            <div class="swiper-wrapper">

                {{-- ===================== --}}
                {{-- Slide 1 --}}
                {{-- ===================== --}}

                <div class="swiper-slide">

                    <div class="relative h-full w-full">

                        {{-- Background --}}
                        <img
                            src="https://4kwallpapers.com/images/walls/thumbs_2t/11092.jpg"
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
                                    src="https://images.seeklogo.com/logo-png/44/2/resident-evil-4-logo-png_seeklogo-446822.png"
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

                                    <span class="text-gray-300">

                                        voices38

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

                                    Adapt your fighting style to each
                                    opponent, use your environment and
                                    upgrade your equipment.

                                </p>

                                <div class="mt-10 flex gap-5">

                                    <a href="#"
                                        class="rounded-xl
                                        bg-sky-500
                                        px-8
                                        py-4
                                        font-semibold
                                        text-white
                                        transition
                                        hover:bg-sky-400">

                                        Download Now →

                                    </a>

                                    <a href="#"
                                        class="flex items-center
                                        text-gray-300
                                        transition
                                        hover:text-white">

                                        Details →

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

                            {{-- RIGHT --}}

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
                            src="https://4kwallpapers.com/images/walls/thumbs_2t/26497.jpg"
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
                                    src="https://1000logos.net/wp-content/uploads/2022/10/Silent-Hill-logo.png"
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

                                    <span class="text-gray-300">

                                        voices38

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

                                    Adapt your fighting style to each
                                    opponent, use your environment and
                                    upgrade your equipment.

                                </p>

                                <div class="mt-10 flex gap-5">

                                    <a href="#"
                                        class="rounded-xl
                                        bg-sky-500
                                        px-8
                                        py-4
                                        font-semibold
                                        text-white
                                        transition
                                        hover:bg-sky-400">

                                        Download Now →

                                    </a>

                                    <a href="#"
                                        class="flex items-center
                                        text-gray-300
                                        transition
                                        hover:text-white">

                                        Details →

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

                            {{-- RIGHT --}}
                            <!-- <div
                                class="hidden lg:flex lg:w-[52%] justify-end items-end">

                                <img
                                    src="https://png.pngtree.com/png-vector/20250919/ourmid/pngtree-gta-san-andreas-cartoon-character-holding-assault-rifle-png-image_17497243.webp"
                                    class="absolute
                                    bottom-0
                                    right-0
                                    w-[900px]
                                    max-w-none">

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

            {{-- Navigation akan aktif di Part 2 --}}
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->

            {{-- Pagination --}}
            <div class="swiper-pagination"></div>

        </div>

    </section>

  <!-- Container Slider -->
  <div class="max-w-7xl mx-auto px-4 py-8">
    <div id="myCarousel" class="relative w-full rounded-2xl overflow-hidden shadow-2xl">
        
        <!-- Carousel wrapper -->
        <div class="relative h-56 md:h-[500px] w-full bg-gray-900">
          <!-- Item 1 -->
          <div class="carousel-item active absolute inset-0" data-index="0">
              <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1400&h=600&fit=crop&crop=center" 
                   class="carousel-img" 
                   alt="Digital workspace">
              <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent">
                  <div class="flex flex-col justify-center h-full px-8 md:px-16 max-w-2xl">
                      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                          Digital Solutions
                      </h2>
                      <p class="text-gray-200 text-lg mb-6">
                          Transform your business with innovative technology
                      </p>
                      <a href="#" class="btn btn-primary w-fit">
                          Learn More
                      </a>
                  </div>
              </div>
          </div>
          
          <!-- Item 2 -->
          <div class="carousel-item absolute inset-0" data-index="1">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1400&h=600&fit=crop&crop=center" 
                   class="carousel-img" 
                   alt="Data analytics">
              <div class="absolute inset-0 bg-gradient-to-r from-purple-900/70 to-transparent">
                  <div class="flex flex-col justify-center h-full px-8 md:px-16 max-w-2xl">
                      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                          Smart Analytics
                      </h2>
                      <p class="text-gray-200 text-lg mb-6">
                          Make data-driven decisions with insights
                      </p>
                      <a href="#" class="bg-purple-600 text-white px-8 py-3 rounded-full hover:bg-purple-700 transition w-fit">
                          Explore
                      </a>
                  </div>
              </div>
          </div>
          
          <!-- Item 3 -->
          <div class="carousel-item absolute inset-0" data-index="2">
              <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=1400&h=600&fit=crop&crop=center" 
                   class="carousel-img" 
                   alt="Technology">
              <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/70 to-transparent">
                  <div class="flex flex-col justify-center h-full px-8 md:px-16 max-w-2xl">
                      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                          Innovation
                      </h2>
                      <p class="text-gray-200 text-lg mb-6">
                          Cutting-edge solutions for modern challenges
                      </p>
                      <a href="#" class="bg-emerald-600 text-white px-8 py-3 rounded-full hover:bg-emerald-700 transition w-fit">
                          Discover
                      </a>
                  </div>
              </div>
          </div>
          
          <!-- Item 4 -->
          <div class="carousel-item absolute inset-0" data-index="3">
              <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1400&h=600&fit=crop&crop=center" 
                   class="carousel-img" 
                   alt="Team collaboration">
              <div class="absolute inset-0 bg-gradient-to-r from-rose-900/70 to-transparent">
                  <div class="flex flex-col justify-center h-full px-8 md:px-16 max-w-2xl">
                      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                          Expert Team
                      </h2>
                      <p class="text-gray-200 text-lg mb-6">
                          Work with professionals who care
                      </p>
                      <a href="#" class="bg-rose-600 text-white px-8 py-3 rounded-full hover:bg-rose-700 transition w-fit">
                          Meet Us
                      </a>
                  </div>
              </div>
          </div>
          
          <!-- Item 5 -->
          <div class="carousel-item absolute inset-0" data-index="4">
              <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?w=1400&h=600&fit=crop&crop=center" 
                   class="carousel-img" 
                   alt="Future technology">
              <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/70 to-transparent">
                  <div class="flex flex-col justify-center h-full px-8 md:px-16 max-w-2xl">
                      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                          Future Ready
                      </h2>
                      <p class="text-gray-200 text-lg mb-6">
                          Stay ahead with next-gen solutions
                      </p>
                      <a href="#" class="bg-indigo-600 text-white px-8 py-3 rounded-full hover:bg-indigo-700 transition w-fit">
                          Get Started
                      </a>
                  </div>
              </div>
          </div>
        </div>
        
        <!-- Slider indicators (Dots) -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full bg-white transition-all duration-300 indicator-dot active" data-slide="0" aria-label="Slide 1"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300 indicator-dot" data-slide="1" aria-label="Slide 2"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300 indicator-dot" data-slide="2" aria-label="Slide 3"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300 indicator-dot" data-slide="3" aria-label="Slide 4"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300 indicator-dot" data-slide="4" aria-label="Slide 5"></button>
        </div>
        
        <!-- Slider controls (Prev/Next) -->
        <button type="button" id="prevBtn" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 backdrop-blur-sm transition-all duration-300">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" id="nextBtn" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 backdrop-blur-sm transition-all duration-300">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
  </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Ambil semua elemen
    const items = document.querySelectorAll('.carousel-item');
    const dots = document.querySelectorAll('.indicator-dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;
    const totalItems = items.length;
    let autoPlayInterval;

    // Fungsi ke slide tertentu
    function goToSlide(index) {
        // Validasi index
        if (index < 0) index = totalItems - 1;
        if (index >= totalItems) index = 0;
        
        // Update items
        items.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) {
                item.classList.add('active');
            }
        });
        
        // Update dots
        dots.forEach((dot, i) => {
            dot.classList.remove('active');
            dot.style.backgroundColor = 'rgba(255,255,255,0.5)';
            if (i === index) {
                dot.classList.add('active');
                dot.style.backgroundColor = 'white';
                dot.style.transform = 'scale(1.2)';
            } else {
                dot.style.transform = 'scale(1)';
            }
        });
        
        currentIndex = index;
    }

    // Next slide
    function nextSlide() {
        goToSlide(currentIndex + 1);
        resetAutoPlay();
    }

    // Prev slide
    function prevSlide() {
        goToSlide(currentIndex - 1);
        resetAutoPlay();
    }

    // Event listeners
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Dots click
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            goToSlide(index);
            resetAutoPlay();
        });
    });

    // Auto play
    function startAutoPlay() {
        if (autoPlayInterval) clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(nextSlide, 5000);
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    // Pause on hover
    const carousel = document.getElementById('myCarousel');
    carousel.addEventListener('mouseenter', function() {
        clearInterval(autoPlayInterval);
    });
    carousel.addEventListener('mouseleave', function() {
        startAutoPlay();
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            e.preventDefault();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            e.preventDefault();
        }
    });

    // Touch support
    let touchStartX = 0;
    let touchEndX = 0;
    
    carousel.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    carousel.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            resetAutoPlay();
        }
    }, { passive: true });

    // Start carousel
    goToSlide(0);
    startAutoPlay();
});
</script>





</body>
</html>