<?php

namespace App\Mail;

use App\Models\EnquiryMaster;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryUserConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public EnquiryMaster $enquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We received your enquiry - Textora Technologies',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry_user',
        );
    }
}
