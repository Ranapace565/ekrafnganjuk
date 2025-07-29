<?php

namespace App\Listeners\Submission;

use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Submission\SubmissionApprove;
use App\Mail\Submission\SubmissionNotificationToUserApprove;

class NotifyVisitorOnSubmissionApprove
{
    public function handle(SubmissionApprove $event)
    {
        $email = $event->submission->user->email;
        Mail::to($email)->send(
            new SubmissionNotificationToUserApprove($event->submission)
        );
    }
}
