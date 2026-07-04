<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use App\Services\GenreService;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use App\Repositories\Contracts\GenreRepositoryInterface;

class GenreController extends Controller
{
    public function __construct(
        protected GenreRepositoryInterface $repository,
        protected GenreService $service,
    ) {}

    public function index()
    {
        $genres = $this->repository->paginate();

        return view(
            'admin.genres.index',
            compact('genres')
        );
    }

    public function create()
    {
        return view('admin.genres.create');
    }

    public function store(
        StoreGenreRequest $request
    ): RedirectResponse
    {
        $this->service->create(
            $request->validated()
        );

        return redirect()
            ->route('admin.genres.index')
            ->with(
                'success',
                'Genre created successfully.'
            );
    }

    public function edit(
        Genre $genre
    )
    {
        return view(
            'admin.genres.edit',
            compact('genre')
        );
    }

    public function update(StoreGenreRequest $request,Genre $genre): RedirectResponse
    {
        $this->service->update(
            $genre,
            $request->validated()
        );

        return redirect()
            ->route('admin.genres.index')
            ->with(
                'success',
                'Genre updated successfully.'
            );
    }

    public function destroy(Genre $genre): RedirectResponse
    {
        $this->repository->delete($genre);

        return back()
            ->with(
                'success',
                'Genre deleted successfully.'
            );
    }
}