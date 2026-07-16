<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for contacting Asktrix</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #1e3a8a; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;">
        <h1 style="margin: 0; font-size: 24px;">Thank You, {{ $contact->name }}!</h1>
    </div>

    <div style="background-color: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; border-top: none; border-radius: 0 0 8px 8px;">
        <p>We have received your inquiry and our team will get back to you soon.</p>

        <div style="background-color: white; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #2563eb;">
            <h2 style="margin-top: 0; color: #1e3a8a; font-size: 18px;">Your Submission Details</h2>
            <p style="margin: 8px 0;"><strong>Service:</strong> {{ ucwords(str_replace(['-', '_'], ' ', $contact->service_type ?? 'General Inquiry')) }}</p>
            <p style="margin: 8px 0;"><strong>Email:</strong> {{ $contact->email }}</p>
            <p style="margin: 8px 0;"><strong>Phone:</strong> {{ $contact->country_code ? $contact->country_code . ' ' : '' }}{{ $contact->mobile }}</p>
            <p style="margin: 8px 0;"><strong>Message:</strong></p>
            <p style="margin: 8px 0; white-space: pre-wrap;">{{ $contact->query }}</p>
        </div>

        <p>Our experts are available <strong>Monday to Saturday, 10am to 6pm</strong>.</p>
        <p>If you need immediate assistance, you can reach us at <a href="mailto:contact@asktrix.com" style="color: #2563eb;">contact@asktrix.com</a> or call <strong>+91 7823954297</strong>.</p>

        <p style="margin-top: 30px; color: #6b7280; font-size: 14px;">
            Best regards,<br>
            <strong>The Asktrix Team</strong>
        </p>
    </div>

    <div style="text-align: center; margin-top: 20px; color: #9ca3af; font-size: 12px;">
        <p>This is an automated confirmation email. Please do not reply to this message.</p>
        <p>&copy; {{ date('Y') }} Asktrix. All rights reserved.</p>
    </div>
</body>
</html>
