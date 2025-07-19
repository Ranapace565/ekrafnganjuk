<?php

namespace App\Listeners\Submission;

use App\Events\SubmissionCreated;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubmissionNotificationToAdmin;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;

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
