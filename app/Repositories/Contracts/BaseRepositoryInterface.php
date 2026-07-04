<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    public function paginate(
        int $perPage = 15
    ): LengthAwarePaginator;

    public function find(
        int $id
    ): ?Model;

    public function create(
        array $data
    ): Model;

    public function update(
        Model $model,
        array $data
    ): bool;

    public function delete(
        Model $model
    ): bool;
}