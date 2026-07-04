@extends('admin.layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">CRUD Game</h1>
            <p class="text-sm text-slate-500">Kelola katalog game pelanggan.</p>
        </div>
        <a href="{{ route('admin.games.create') }}" class="rounded-full bg-cyan-600 px-4 py-2 text-sm font-semibold text-white">Tambah Game</a>
    </div>

    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
        @foreach($games as $game)
            <div class="rounded-3xl border border-slate-200 bg-white p-4">
                <img src="{{ $game->cover ?: 'https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=900&q=80' }}" class="h-40 w-full rounded-2xl object-cover" alt="{{ $game->title }}">
                <div class="mt-4">
                    <h2 class="text-lg font-semibold">{{ $game->title }}</h2>
                    <p class="text-sm text-slate-500">{{ $game->genres->pluck('name')->join(', ') }}</p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach($game->gamePlatforms as $entry)
                            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs">{{ $entry->platform->name }} • {{ $entry->size_gb }} GB</span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $games->links() }}
</div>
@endsection
