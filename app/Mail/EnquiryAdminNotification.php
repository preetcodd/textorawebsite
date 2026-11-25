<?php

namespace App\Mail;

use App\Models\EnquiryMaster;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public EnquiryMaster $enquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "New {$this->enquiry->type} Enquiry from {$this->enquiry->name} - Textora",
            replyTo: $this->enquiry->email
                ? [new Address($this->enquiry->email, $this->enquiry->name ?? '')]
                : [],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry_admin',
        );
    }
}
