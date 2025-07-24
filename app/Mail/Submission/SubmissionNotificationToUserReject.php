<?php

namespace App\Mail\Submission;

use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmissionNotificationToUserReject extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;
    // public $sector;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;

        // Ambil nama sektor langsung
        // $this->sector = Sector::find($submission->sector_id);
    }

    public function build()
    {
        // $submissionName = $this->sector ? $this->sector->name : 'Tidak Diketahui';

        $name = $this->submission->name;

        return $this->subject('Pengajuan Usahamu ' . $name . 'Ditolak oleh Admin')
            ->markdown('emails.submission.to_user_reject');
    }
}
