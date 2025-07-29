<?php

namespace App\Mail\Submission;

use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmissionNotificationToUserApprove extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

    public function build()
    {

        $name = $this->submission->name;

        return $this->subject('Pengajuan Usahamu ' . $name . 'Diterima oleh Admin')
            ->markdown('emails.submission.to_user_approve');
    }
}
