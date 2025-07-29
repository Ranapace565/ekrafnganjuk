<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\Submission\SubmissionReject;
use App\Events\Submission\SubmissionApprove;
use App\Events\Submission\SubmissionCreated;
use App\Listeners\Submission\NotifyAdminOnSubmission;
use App\Listeners\Submission\NotifyVisitorOnSubmission;
use App\Listeners\Submission\NotifyVisitorOnSubmissionReject;
use App\Listeners\Submission\NotifyVisitorOnSubmissionApprove;

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
        SubmissionApprove::class => [
            NotifyVisitorOnSubmissionApprove::class,
        ],
    ];
}
