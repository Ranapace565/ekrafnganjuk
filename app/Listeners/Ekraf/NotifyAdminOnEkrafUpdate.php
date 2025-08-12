<?php

namespace App\Listeners\Ekraf;

use App\Models\User;
use App\Events\Ekraf\EkrafUpdate;
use App\Mail\Ekraf\EkrafNotificationToAdminUpdate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminOnEkrafUpdate
{
    public function handle(EkrafUpdate $event)
    {
        $adminUsers = User::whereIn('role', ['admin', 'dev'])->get();

        foreach ($adminUsers as $admin) {
            Mail::to($admin->email)->send(
                new EkrafNotificationToAdminUpdate($event->Ekraf)
            );
        }
    }
}
