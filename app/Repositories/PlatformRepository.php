<?php

namespace App\Repositories;

use App\Models\Platform;
use App\Repositories\Contracts\PlatformRepositoryInterface;
use App\Repositories\BaseRepository;

class PlatformRepository
    extends BaseRepository
    implements PlatformRepositoryInterface
{
    public function __construct(
        Platform $model
    ) {
        $this->model = $model;
    }
}