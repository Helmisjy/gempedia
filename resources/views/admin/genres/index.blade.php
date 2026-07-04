@extends('admin.layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Genre Manager</h1>
            <p class="text-sm text-slate-500">Kelola kategori genre untuk katalog game.</p>
        </div>
        <a href="{{ route('admin.genres.create') }}" class="inline-flex items-center gap-2 rounded-full bg-cyan-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-cyan-500">
            <i data-lucide="plus" class="size-5"></i>
            Tambah Genre
        </a>
    </div>

    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between p-6 border-b border-slate-200 gap-4">
            <h3 class="font-bold text-lg text-slate-900">Daftar Genre</h3>
            <div class="flex items-center gap-3">
                <div class="relative hidden sm:block">
                    <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 size-4 text-slate-400"></i>
                    <input type="text" placeholder="Search genre..." class="pl-9 pr-4 py-2 rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-cyan-500 outline-none text-sm text-slate-700 bg-slate-50 transition w-52">
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[700px]">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Nama Genre</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Slug</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Terakhir Diperbarui</th>
                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse($genres as $genre)
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-slate-900">{{ $genre->name }}</span>
                                    <span class="text-xs text-slate-500">Jumlah game: {{ $genre->games()->count() }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-700">{{ $genre->slug }}</td>
                            <td class="px-6 py-4 text-slate-700">{{ $genre->updated_at?->format('d M Y') ?? '-' }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex items-center gap-2 justify-end">
                                    <a href="{{ route('admin.genres.edit', $genre) }}" class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition" title="Edit">
                                        <i data-lucide="square-pen" class="size-4"></i>
                                    </a>
                                    <form action="{{ route('admin.genres.destroy', $genre) }}" method="POST" onsubmit="return confirm('Hapus genre ini? Anda tidak dapat mengembalikannya.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-rose-100 text-rose-600 hover:bg-rose-200 transition" title="Delete">
                                            <i data-lucide="trash" class="size-4"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-sm text-slate-500">Belum ada genre. Tambahkan genre baru untuk memulai.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t border-slate-200 bg-slate-50 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-slate-500">Menampilkan {{ $genres->firstItem() ?? 0 }} sampai {{ $genres->lastItem() ?? 0 }} dari {{ $genres->total() }} genre</p>
            <div class="flex justify-center">{{ $genres->links() }}</div>
        </div>
    </div>
</div>
@endsection