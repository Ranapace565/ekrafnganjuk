<?php

namespace App\Providers;

use App\Models\Ekraf;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Submission;
use App\Policies\EkrafPolicy;
use App\Policies\SubmissionPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Submission::class => SubmissionPolicy::class,
        Ekraf::class => EkrafPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        // Custom Gates bisa ditambahkan di sini jika perlu
    }
}
