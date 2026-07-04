@extends('admin.layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Edit Platform</h1>
            <p class="text-sm text-slate-500">Perbarui informasi platform untuk katalog game.</p>
        </div>
        <a href="{{ route('admin.platforms.index') }}" class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-slate-900 hover:bg-slate-200 transition">
            <i data-lucide="chevron-left" class="size-4"></i>
            Kembali
        </a>
    </div>

    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <form action="{{ route('admin.platforms.update', $platform) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Nama Platform</label>
                <input name="name" type="text" value="{{ old('name', $platform->name) }}" required class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.platforms.index') }}" class="inline-flex items-center justify-center rounded-full border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition">Batal</a>
                <button type="submit" class="rounded-full bg-cyan-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-cyan-500">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection