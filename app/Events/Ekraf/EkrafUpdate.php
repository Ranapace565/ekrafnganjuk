<?php

namespace App\Events\Ekraf;

use App\Models\Ekraf;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EkrafUpdate
{
    use SerializesModels;

    public $Ekraf;

    public function __construct(Ekraf $Ekraf)
    {
        $this->Ekraf = $Ekraf;
    }
}
