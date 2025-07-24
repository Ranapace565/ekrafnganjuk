<?php

namespace App\Providers;

use App\Events\Submission\SubmissionCreated;
use App\Events\Submission\SubmissionReject;
use App\Listeners\Submission\NotifyVisitorOnSubmission;
use App\Listeners\Submission\NotifyVisitorOnSubmissionReject;
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
        SubmissionReject::class => [
            NotifyVisitorOnSubmissionReject::class,
        ],
    ];
}
