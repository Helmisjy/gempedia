<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Repositories\Contracts\BaseRepositoryInterface;

abstract class BaseRepository
    implements BaseRepositoryInterface
{
    protected Model $model;

    public function paginate(
        int $perPage = 15
    ): LengthAwarePaginator
    {
        return $this->model
            ->latest()
            ->paginate($perPage);
    }

    public function find(
        int $id
    ): ?Model
    {
        return $this->model->find($id);
    }

    public function create(
        array $data
    ): Model
    {
        return $this->model->create($data);
    }

    public function update(
        Model $model,
        array $data
    ): bool
    {
        return $model->update($data);
    }

    public function delete(
        Model $model
    ): bool
    {
        return $model->delete();
    }
}