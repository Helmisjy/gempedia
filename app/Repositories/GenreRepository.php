<?php

namespace App\Repositories;

use App\Models\Genre;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Repositories\Contracts\GenreRepositoryInterface;

class GenreRepository
    extends BaseRepository
    implements GenreRepositoryInterface
{
    public function __construct(
        Genre $model
    ) {
        $this->model = $model;
    }
}