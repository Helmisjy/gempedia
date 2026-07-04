<?php

namespace App\Services;

use App\Models\Genre;
use App\Repositories\Contracts\GenreRepositoryInterface;

class GenreService
{
    public function __construct(
        protected GenreRepositoryInterface $repository
    ) {}

    public function create(
        array $data
    ): Genre
    {
        $data['slug'] = str($data['name'])->slug();

        return $this->repository->create($data);
    }

    public function update(
        Genre $genre,
        array $data
    ): bool
    {
        $data['slug'] = str($data['name'])->slug();

        return $this->repository->update(
            $genre,
            $data
        );
    }
}