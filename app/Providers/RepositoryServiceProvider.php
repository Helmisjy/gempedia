<?php

namespace App\Providers;

use App\Repositories\Contracts\GenreRepositoryInterface;
use App\Repositories\Contracts\PlatformRepositoryInterface;
use App\Repositories\GenreRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\PlatformRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            PlatformRepositoryInterface::class,
            PlatformRepository::class
        );

        $this->app->bind(
            GenreRepositoryInterface::class,
            GenreRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
