<?php

namespace App\Providers;

use App\Events\SubmissionCreated;
use Illuminate\Support\ServiceProvider;
use App\Listeners\Submission\NotifyAdminOnSubmission;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Event to listener mapping.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        SubmissionCreated::class => [
            NotifyAdminOnSubmission::class,
        ],
    ];
}
