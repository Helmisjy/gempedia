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

    <div class="flex h-screen max-h-screen flex-1 bg-muted overflow-hidden">
        <!-- SIDEBAR -->
        @include('admin.layouts.sidebar')

        
        <!-- MAIN CONTENT -->
        <main class="flex-1 lg:ml-[280px] flex flex-col bg-white min-h-screen overflow-x-hidden">
            <!--NAVBAR-->
            @include('admin.layouts.navbar')

            <div class="flex-1 bg-muted overflow-y-auto p-5 md:p-8">
            <!--CONTENT-->
            @yield('content')
            </div>
        </main>
    </div>

</div>

<!-- Search Modal -->
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

<!-- Platform / Genre Modal -->
<div id="master-modal"
    class="fixed inset-0 bg-black/50 z-[100] hidden items-center justify-center p-4 backdrop-blur-sm">

    <div class="bg-white rounded-3xl p-6 max-w-md w-full shadow-2xl">

        <div class="flex items-center justify-between mb-6">
            <h3 id="modal-title" class="text-xl font-bold">
                Add Platform
            </h3>

            <button onclick="closeMasterModal()">
                ✕
            </button>
        </div>

        <form id="master-form" method="POST">

            @csrf

            <input type="hidden" id="form-method" name="_method" value="POST">

            <div class="mb-4">
                <label class="block mb-2 font-medium">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    id="master-name"
                    class="w-full border rounded-xl px-4 py-3"
                    placeholder="Enter name..."
                    required
                >
            </div>

            <div class="flex justify-end gap-3">

                <button
                    type="button"
                    onclick="closeMasterModal()"
                    class="px-4 py-2 border rounded-xl"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    class="px-5 py-2 bg-primary text-white rounded-xl"
                >
                    Save
                </button>

            </div>

        </form>

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


  function openCreatePlatformModal() {

    document.getElementById('modal-title').innerText =
        'Add Platform';

    document.getElementById('master-form').action =
        '/admin/platforms';

    document.getElementById('form-method').value =
        'POST';

    document.getElementById('master-name').value =
        '';

    showModal();
}

function openEditPlatformModal(id, name) {

    document.getElementById('modal-title').innerText =
        'Edit Platform';

    document.getElementById('master-form').action =
        `/admin/platforms/${id}`;

    document.getElementById('form-method').value =
        'PUT';

    document.getElementById('master-name').value =
        name;

    showModal();
}

function showModal() {

    const modal =
        document.getElementById('master-modal');

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeMasterModal() {

    const modal =
        document.getElementById('master-modal');

    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>
</body>
</html>