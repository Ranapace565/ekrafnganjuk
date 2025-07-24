<?php

namespace App\Listeners\Submission;

use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\Submission\SubmissionReject;
use App\Mail\Submission\SubmissionNotificationToUserReject;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyVisitorOnSubmissionReject
{
    public function handle(SubmissionReject $event)
    {
        $email = $event->submission->user->email;
        Mail::to($email)->send(
            new SubmissionNotificationToUserReject($event->submission)
        );
    }
}
