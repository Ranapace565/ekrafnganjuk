<?php

namespace App\Mail;

use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmissionApprovedNotificationToUser extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $submission;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

    public function build()
    {
        return $this->subject('Pengajuan Anda Telah Diterima')
            ->markdown('emails.submission.to_user');
    }
}
