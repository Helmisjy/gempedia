<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gamepedia - Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: #090b11;
      color: #f8fafc;
      min-height: 100vh;
    }
    body[data-theme='day'] {
      background: #f8fafc;
      color: #0f172a;
    }
    body[data-theme='day'] .hero-card {
      background: linear-gradient(135deg, #eef2ff, #e2e8f0);
    }
    body[data-theme='day'] .panel-card {
      background: #ffffff;
    }
    body[data-theme='day'] .section-title {
      color: #0f172a;
    }
    body[data-theme='day'] .section-copy {
      color: #475569;
    }
    body[data-theme='day'] .nav-link {
      color: #0f172a;
    }
    body[data-theme='day'] .nav-link:hover {
      color: #2563eb;
    }
    body[data-theme='night'] .hero-card {
      background: linear-gradient(135deg, rgba(15,23,42,0.95), rgba(15,23,42,0.8)), url('https://images.unsplash.com/photo-1606813902040-2ef73003b730?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
    }
    .hero-card {
      border: 1px solid rgba(148, 163, 184, 0.15);
    }
    .panel-card {
      border: 1px solid rgba(148, 163, 184, 0.12);
    }
    .theme-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.65rem 1rem;
      border-radius: 9999px;
      border: 1px solid rgba(148, 163, 184, 0.2);
      cursor: pointer;
      transition: transform 0.2s ease;
    }
    .theme-badge:hover {
      transform: translateY(-2px);
    }
    .glow-ring {
      box-shadow: 0 0 40px rgba(59, 130, 246, 0.2);
    }
  </style>
</head>
<body data-theme="night">
  <div class="min-h-screen px-4 pb-16 lg:px-8">
    <header class="mx-auto flex max-w-7xl flex-col gap-4 pt-6 lg:flex-row lg:items-center lg:justify-between">
      <div class="space-y-2">
        <div class="inline-flex items-center gap-3 rounded-full bg-white/10 px-4 py-2 text-sm text-slate-100 shadow-lg backdrop-blur-lg">
          <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-violet-500 to-cyan-400 text-white shadow-glow">
            <i class="fas fa-gamepad"></i>
          </span>
          <span class="font-semibold tracking-wide">GAMEPEDIA</span>
        </div>
        <nav class="flex flex-wrap items-center gap-4 text-sm font-medium text-slate-300">
          <a href="{{ route('home') }}" class="nav-link hover:text-white">Home</a>
          <a href="{{ route('customer.catalog') }}" class="nav-link hover:text-white">Katalog</a>
          <a href="{{ route('admin.orders.index') }}" class="nav-link hover:text-white">Admin</a>
        </nav>
      </div>
      <button id="theme-toggle" class="theme-badge bg-slate-950/70 text-white shadow-lg hover:bg-slate-900/95">
        <i id="theme-icon" class="fas fa-moon"></i>
        <span id="theme-label">Night Mode</span>
      </button>
    </header>

    <main class="mx-auto mt-10 max-w-7xl">
      <section class="hero-card relative overflow-hidden rounded-[2rem] px-6 py-16 shadow-2xl shadow-slate-950/20 sm:px-12 lg:px-16 lg:py-20">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/50 to-transparent"></div>
        <div class="relative grid gap-10 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
          <div class="space-y-6 text-white lg:max-w-xl">
            <p class="text-sm uppercase tracking-[0.4em] text-cyan-300/90">Welcome to the best game store</p>
            <h1 class="text-4xl font-bold sm:text-5xl lg:text-6xl">Beli, isi, dan mainkan game favoritmu dengan cepat.</h1>
            <p class="max-w-xl text-base text-slate-200/90 sm:text-lg">Gamepedia menghadirkan katalog PC, PS3, dan PS4 dengan pilihan paket penyimpanan otomatis. Cukup pilih, pesan, dan biarkan tim admin kami mengatur pesananmu.</p>
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
              <a href="{{ route('customer.catalog') }}" class="inline-flex items-center justify-center rounded-full bg-cyan-500 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">Lihat Katalog</a>
              <a href="{{ route('admin.orders.index') }}" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-6 py-3 text-sm font-semibold text-white transition hover:border-cyan-300/40 hover:bg-white/15">Admin Panel</a>
            </div>
          </div>

          <div class="grid gap-4">
            <article class="rounded-[1.75rem] border border-white/10 bg-slate-950/80 p-6 shadow-xl shadow-cyan-500/5 backdrop-blur-xl">
              <p class="text-sm uppercase tracking-[0.32em] text-cyan-300/80">Best Deal</p>
              <h2 class="mt-4 text-2xl font-semibold text-white">Paket Premium</h2>
              <p class="mt-3 text-sm text-slate-300">Cocok untuk koleksi besar. Sudah termasuk rekomendasi ukuran otomatis untuk setiap pesanan.</p>
              <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-900/80 p-4">
                  <p class="text-sm text-slate-400">Diskon</p>
                  <p class="text-xl font-semibold text-white">10%<span class="text-sm font-medium text-slate-300"> untuk pesanan pertama</span></p>
                </div>
                <div class="rounded-3xl bg-slate-900/80 p-4">
                  <p class="text-sm text-slate-400">Platform</p>
                  <p class="text-xl font-semibold text-white">PC · PS3 · PS4</p>
                </div>
              </div>
            </article>
            <article class="rounded-[1.75rem] border border-white/10 bg-slate-900/80 p-6 shadow-xl shadow-slate-950/10">
              <p class="text-sm uppercase tracking-[0.32em] text-white/70">Highlights</p>
              <div class="mt-6 space-y-4">
                <div class="rounded-3xl bg-slate-950/90 p-4">
                  <p class="text-sm text-slate-400">Tanpa pembayaran online</p>
                  <p class="mt-2 font-semibold text-white">Order langsung via WhatsApp</p>
                </div>
                <div class="rounded-3xl bg-slate-950/90 p-4">
                  <p class="text-sm text-slate-400">Rekomendasi paket</p>
                  <p class="mt-2 font-semibold text-white">Paket Starter, Booster, Premium</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="mt-14 grid gap-6 lg:grid-cols-3">
        <article class="panel-card rounded-[2rem] p-8 shadow-2xl shadow-slate-950/20 backdrop-blur-xl">
          <p class="section-title text-xl font-semibold">Siap Main</p>
          <p class="section-copy mt-3 text-sm leading-7">Temukan game ready stock dengan support pengiriman dan instalasi file langsung.</p>
        </article>
        <article class="panel-card rounded-[2rem] p-8 shadow-2xl shadow-slate-950/20 backdrop-blur-xl">
          <p class="section-title text-xl font-semibold">Pilihan Platform</p>
          <p class="section-copy mt-3 text-sm leading-7">Pilih dari platform popular seperti PC, PS3, dan PS4 dalam satu catalog terpadu.</p>
        </article>
        <article class="panel-card rounded-[2rem] p-8 shadow-2xl shadow-slate-950/20 backdrop-blur-xl">
          <p class="section-title text-xl font-semibold">Dukungan Cepat</p>
          <p class="section-copy mt-3 text-sm leading-7">Admin kami siap memproses order dengan update status setiap langkah.</p>
        </article>
      </section>

      <section class="mt-12 rounded-[2rem] border border-white/10 bg-slate-950/70 p-8 shadow-2xl shadow-slate-950/20 backdrop-blur-xl lg:px-12">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
          <div>
            <p class="text-sm uppercase tracking-[0.35em] text-cyan-300/80">Persiapan order</p>
            <h2 class="mt-2 text-3xl font-bold">Setiap order dilengkapi ringkasan paket otomatis.</h2>
          </div>
          <a href="{{ route('customer.catalog') }}" class="inline-flex items-center justify-center rounded-full bg-cyan-500 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">Mulai Pesan Sekarang</a>
        </div>
      </section>
    </main>
  </div>

  <script>
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const themeLabel = document.getElementById('theme-label');
    const root = document.documentElement;

    function setTheme(theme) {
      document.body.setAttribute('data-theme', theme);
      localStorage.setItem('gamepedia-theme', theme);
      themeIcon.className = theme === 'night' ? 'fas fa-moon' : 'fas fa-sun';
      themeLabel.textContent = theme === 'night' ? 'Night Mode' : 'Day Mode';
    }

    const storedTheme = localStorage.getItem('gamepedia-theme');
    setTheme(storedTheme === 'day' ? 'day' : 'night');

    themeToggle.addEventListener('click', () => {
      const currentTheme = document.body.getAttribute('data-theme');
      setTheme(currentTheme === 'day' ? 'night' : 'day');
    });
  </script>
  <script src="https://kit.fontawesome.com/a2d7a2f8e1.js" crossorigin="anonymous"></script>
</body>
</html>
