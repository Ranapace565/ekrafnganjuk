<?php

namespace App\Listeners\Submission;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Submission\SubmissionCreated;
use App\Mail\Submission\SubmissionNotificationToAdmin;

class NotifyAdminOnSubmission
{
    public function handle(SubmissionCreated $event)
    {
        // Ambil semua user dengan role 'admin' atau 'dev'
        $adminUsers = User::whereIn('role', ['admin', 'dev'])->get();

        foreach ($adminUsers as $admin) {
            Mail::to($admin->email)->send(
                new SubmissionNotificationToAdmin($event->submission)
            );
        }
    }
}
