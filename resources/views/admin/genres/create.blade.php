@extends('admin.layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Tambah Genre</h1>
            <p class="text-sm text-slate-500">Tambahkan kategori genre baru untuk katalog game.</p>
        </div>
        <a href="{{ route('admin.genres.index') }}" class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-slate-900 hover:bg-slate-200 transition">
            <i data-lucide="chevron-left" class="size-4"></i>
            Kembali
        </a>
    </div>

    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <form action="{{ route('admin.genres.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Nama Genre</label>
                <input name="name" type="text" required class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="rounded-full bg-cyan-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-cyan-500">Simpan Genre</button>
            </div>
        </form>
    </div>
</div>
@endsection
