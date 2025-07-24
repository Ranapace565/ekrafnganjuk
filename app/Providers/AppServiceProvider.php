<?php

namespace App\Providers;

use Illuminate\Filesystem\Filesystem;
use App\Repositories\SectorRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\DistrictRepository;
use App\Repositories\SubmissionRepository;
use App\Repositories\Interfaces\SectorRepositoryInterface;
use App\Repositories\Interfaces\DistrictRepositoryInterface;
use App\Repositories\Interfaces\SubmissionRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // FIX: Tambahkan binding 'files' secara manual
        $this->app->singleton('files', function ($app) {
            return new Filesystem;
        });
        $this->app->bind(SubmissionRepositoryInterface::class, SubmissionRepository::class);
        $this->app->bind(SectorRepositoryInterface::class, SectorRepository::class);
        $this->app->bind(DistrictRepositoryInterface::class, DistrictRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
