<?php

namespace App\Services;

use App\Models\Platform;
use App\Repositories\Contracts\PlatformRepositoryInterface;

class PlatformService
{
    public function __construct(
        protected PlatformRepositoryInterface $repository
    ) {}

    public function create(
        array $data
    ): Platform
    {
        $data['slug'] = str($data['name'])->slug();

        return $this->repository->create($data);
    }

    public function update(
        Platform $platform,
        array $data
    ): bool
    {
        $data['slug'] = str($data['name'])->slug();

        return $this->repository->update(
            $platform,
            $data
        );
    }
}