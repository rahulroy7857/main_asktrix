<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #1e3a8a; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;">
        <h1 style="margin: 0; font-size: 24px;">New Form Submission</h1>
    </div>

    <div style="background-color: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; border-top: none; border-radius: 0 0 8px 8px;">
        <p>A new inquiry has been submitted on the Asktrix website.</p>

        <div style="background-color: white; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #2563eb;">
            <p style="margin: 8px 0;"><strong>Service Type:</strong> {{ ucwords(str_replace(['-', '_'], ' ', $contact->service_type ?? 'Not specified')) }}</p>
            <p style="margin: 8px 0;"><strong>Name:</strong> {{ $contact->name }}</p>
            <p style="margin: 8px 0;"><strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
            <p style="margin: 8px 0;"><strong>Phone:</strong> {{ $contact->country_code ? $contact->country_code . ' ' : '' }}{{ $contact->mobile }}</p>
            <p style="margin: 8px 0;"><strong>Submitted At:</strong> {{ $contact->created_at->format('d M Y, h:i A') }}</p>
            <p style="margin: 8px 0;"><strong>Message:</strong></p>
            <p style="margin: 8px 0; white-space: pre-wrap;">{{ $contact->query }}</p>
        </div>
    </div>
</body>
</html>
