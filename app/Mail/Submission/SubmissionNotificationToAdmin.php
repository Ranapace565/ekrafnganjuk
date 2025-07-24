<?php

namespace App\Mail\Submission;

use App\Models\Sector;
use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmissionNotificationToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;
    public $sector;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;

        // Ambil nama sektor langsung
        $this->sector = Sector::find($submission->sector_id);
    }

    public function build()
    {
        $sectorName = $this->sector ? $this->sector->name : 'Tidak Diketahui';

        return $this->subject('Pengajuan Usaha Baru dari Sektor ' . $sectorName)
            ->markdown('emails.submission.to_admin');
    }
}
