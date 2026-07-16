<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Contact $contact)
    {
    }

    public function envelope(): Envelope
    {
        $serviceLabel = $this->formatServiceType($this->contact->service_type);

        return new Envelope(
            subject: "New inquiry: {$serviceLabel}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact.admin-notification',
        );
    }

    private function formatServiceType(?string $serviceType): string
    {
        if (empty($serviceType)) {
            return 'General Inquiry';
        }

        return ucwords(str_replace(['-', '_'], ' ', $serviceType));
    }
}
