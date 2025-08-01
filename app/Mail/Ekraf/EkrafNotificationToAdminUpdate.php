<?php

namespace App\Mail\Ekraf;

use App\Models\Ekraf;
use App\Models\Sector;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class EkrafNotificationToAdminUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $ekraf;
    public $sector;

    public function __construct(Ekraf $ekraf)
    {
        $this->ekraf = $ekraf;

        // Ambil nama sektor langsung
        $this->sector = Sector::find($ekraf->sector_id);
    }

    public function build()
    {
        $sectorName = $this->sector ? $this->sector->name : 'Tidak Diketahui';

        $name = $this->ekraf->name;

        return $this->subject('Update usaha ' . $name . ' yang ditolak oleh admin dari sektor ' . $sectorName)
            ->markdown('emails.ekraf.to_admin');
    }
}
