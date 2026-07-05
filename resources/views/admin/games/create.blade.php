@extends('admin.layouts.app')

@section('content')


<!-- Form Create V2 -->
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
          <div>
            <h1 class="text-2xl md:text-3xl font-bold text-foreground mb-1">Add Games Collection</h1>
            <p class="text-secondary text-sm md:text-base">Create a new games collection for comunity.</p>
          </div>
          <a href="#" class="flex items-center justify-center gap-2 px-5 py-2.5 ring-1 ring-border hover:ring-primary rounded-2xl text-foreground font-semibold transition-all duration-300 cursor-pointer bg-white w-fit">
            <i data-lucide="arrow-left" class="size-5"></i>
            <span>Back to List</span>
          </a>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl border border-border shadow-sm overflow-hidden">
          
          <form method="POST" action="{{ route('admin.games.store') }}" class="p-6 md:p-8 flex flex-col gap-8">
            @csrf
            <!-- Section 1: Basic Information -->
            <div>
              <h3 class="text-lg font-bold text-foreground mb-4 flex items-center gap-2">
                <i data-lucide="info" class="size-5 text-primary"></i>
                Basic Information
              </h3>
              
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Game Name -->
                <div class="flex flex-col gap-2">
                  <label for="title" class="text-sm font-medium text-foreground">Game Name <span class="text-error">*</span></label>
                  <div class="ring-1 ring-border rounded-2xl px-4 py-3 focus-within:ring-2 focus-within:ring-primary transition-all bg-white flex items-center gap-2">
                    <i data-lucide="type" class="size-5 text-secondary shrink-0"></i>
                    <input type="text" name="title" id="title" required placeholder="e.g., GTA VI" class="w-full bg-transparent outline-none font-medium text-foreground placeholder:text-secondary/70">
                  </div>
                </div>

                <!-- Publisher Name -->
                <div class="flex flex-col gap-2">
                  <label for="publisher" class="text-sm font-medium text-foreground">Publisher <span class="text-error">*</span></label>
                  <div class="ring-1 ring-border rounded-2xl px-4 py-3 focus-within:ring-2 focus-within:ring-primary transition-all bg-white flex items-center gap-2">
                    <i data-lucide="type" class="size-5 text-secondary shrink-0"></i>
                    <input type="text" name="publisher" id="publisher" required placeholder="e.g., CAPCOM" class="w-full bg-transparent outline-none font-medium text-foreground placeholder:text-secondary/70">
                  </div>
                </div>

                <!-- Release Year -->
                <div class="flex flex-col gap-2">
                  <label for="release_year" class="text-sm font-medium text-foreground">Release Year <span class="text-error">*</span></label>
                  <div class="ring-1 ring-border rounded-2xl px-4 py-3 focus-within:ring-2 focus-within:ring-primary transition-all bg-white flex items-center gap-2">
                    <i data-lucide="type" class="size-5 text-secondary shrink-0"></i>
                    <input type="text" name="release_year" id="release_year" required placeholder="e.g., 2026" class="w-full bg-transparent outline-none font-medium text-foreground placeholder:text-secondary/70">
                  </div>
                </div>

                <!-- URL Image -->
                <div class="flex flex-col gap-2">
                  <label for="cover" class="text-sm font-medium text-foreground">URL Image <span class="text-error">*</span></label>
                  <div class="ring-1 ring-border rounded-2xl px-4 py-3 focus-within:ring-2 focus-within:ring-primary transition-all bg-white flex items-center gap-2">
                    <i data-lucide="type" class="size-5 text-secondary shrink-0"></i>
                    <input type="text" name="cover" id="cover" required placeholder="e.g., https://cdnb.artstation.com/p/assets/images/images/020/080/117/large/mighoet-sundback-nsfh-pc-dlx-packart.jpg?1566284488" class="w-full bg-transparent outline-none font-medium text-foreground placeholder:text-secondary/70">
                  </div>
                </div>

                <!-- Platform -->
                <div class="flex flex-col gap-2">
                  <label for="selectCategory" class="text-sm font-medium text-foreground">Platform <span class="text-error">*</span></label>
                  <div class="ring-1 ring-border rounded-2xl px-4 py-3 focus-within:ring-2 focus-within:ring-primary transition-all bg-white relative flex items-center gap-2">
                    <i data-lucide="folder" class="size-5 text-secondary shrink-0"></i>
                    <select name="platform_id" id="selectCategory" required class="w-full bg-transparent outline-none font-medium text-foreground pr-8">
                      <option value="" disabled selected>Select platform</option>
                        @foreach($platforms as $platform)
                            <option value="{{ $platform->id }}">{{ $platform->name }}</option>  
                        @endforeach
                    </select>
                    <i data-lucide="chevron-down" class="absolute right-4 top-1/2 -translate-y-1/2 size-5 text-secondary pointer-events-none"></i>
                  </div>
                </div>

                <!-- Genre -->
                <div class="flex flex-col gap-2">
                  <label for="selectCategory" class="text-sm font-medium text-foreground">Genre <span class="text-error">*</span></label>
                  <div class="ring-1 ring-border rounded-2xl px-4 py-3 focus-within:ring-2 focus-within:ring-primary transition-all bg-white relative flex items-center gap-2">
                    <i data-lucide="folder" class="size-5 text-secondary shrink-0"></i>
                    <select name="genre_id" required class="w-full bg-transparent outline-none font-medium text-foreground pr-8">
                      <option value="" disabled selected>Select genre</option>
                        @foreach($genres as $genre)
                          <option value="{{ $genre->id }}">{{ $genre->name }}</option>  
                        @endforeach
                    </select>
                    <i data-lucide="chevron-down" class="absolute right-4 top-1/2 -translate-y-1/2 size-5 text-secondary pointer-events-none"></i>
                  </div>
                </div>
            </div>
                <div class="flex flex-col gap-6 mt-5">
                    <!-- Description -->
                    <div class="flex flex-col gap-2">
                        <label for="inputDescription" class="text-sm font-medium text-foreground">Program Description <span class="text-error">*</span></label>
                        <div class="ring-1 ring-border rounded-2xl p-4 focus-within:ring-2 focus-within:ring-primary transition-all bg-white">
                            <textarea name="description" id="inputDescription" required rows="5" placeholder="Provide detailed information about the program, its goals, and how donations will be used..." class="w-full bg-transparent outline-none font-medium text-foreground placeholder:text-secondary/70 resize-y min-h-[120px]"></textarea>
                        </div>
                    </div>
                    <div>
            <label class="mb-2 block text-sm font-semibold">Ukuran (GB)</label>
            <input type="number" step="0.1" name="size_gb" required class="w-full rounded-xl border border-slate-300 px-3 py-2">
        </div>

                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex flex-col sm:flex-row items-center justify-end gap-3 pt-6 border-t border-border mt-4">
              <a href="#" class="w-full sm:w-auto px-6 py-3.5 ring-1 ring-border hover:ring-primary rounded-full text-foreground font-semibold transition-all duration-300 cursor-pointer text-center bg-white">
                Cancel
              </a>
              <button type="submit" class="w-full sm:w-auto px-8 py-3.5 bg-primary text-white rounded-full font-bold hover:bg-primary-hover transition-all duration-300 cursor-pointer flex items-center justify-center gap-2 shadow-lg shadow-primary/20">
                <i data-lucide="save" class="size-5"></i>
                <span>Save Program</span>
              </button>
            </div>

          </form>
        </div>

@endsection
