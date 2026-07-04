@extends('admin.layouts.app')

@section('content')
<div class="max-w-3xl rounded-3xl border border-slate-200 bg-white p-6">
    <h1 class="text-2xl font-bold text-slate-900">Tambah Game</h1>
    <form method="POST" action="{{ route('admin.games.store') }}" class="mt-6 space-y-4">
        @csrf

        <div>
            <label class="mb-2 block text-sm font-semibold">Judul</label>
            <input name="title" required class="w-full rounded-xl border border-slate-300 px-3 py-2">
        </div>
        <div>
            <label class="mb-2 block text-sm font-semibold">Slug</label>
            <input name="slug" class="w-full rounded-xl border border-slate-300 px-3 py-2">
        </div>
        <div>
            <label class="mb-2 block text-sm font-semibold">Deskripsi</label>
            <textarea name="description" class="min-h-24 w-full rounded-xl border border-slate-300 px-3 py-2"></textarea>
        </div>
        <div>
            <label class="mb-2 block text-sm font-semibold">Cover URL</label>
            <input name="cover" class="w-full rounded-xl border border-slate-300 px-3 py-2">
        </div>
        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold">Platform</label>
                <select name="platform_id" required class="w-full rounded-xl border border-slate-300 px-3 py-2">
                    @foreach($platforms as $platform)
                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="mb-2 block text-sm font-semibold">Genre</label>
                <select name="genre_id" required class="w-full rounded-xl border border-slate-300 px-3 py-2">
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <label class="mb-2 block text-sm font-semibold">Ukuran (GB)</label>
            <input type="number" step="0.1" name="size_gb" required class="w-full rounded-xl border border-slate-300 px-3 py-2">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="rounded-full bg-cyan-600 px-5 py-2 font-semibold text-white">Simpan</button>
        </div>
    </form>
</div>
@endsection
