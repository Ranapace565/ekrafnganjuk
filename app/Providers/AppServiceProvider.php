<?php

namespace App\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SubmissionRepository;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
