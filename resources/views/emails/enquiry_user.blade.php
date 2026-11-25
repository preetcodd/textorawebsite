<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enquiry Confirmation - Textora</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f7f5; font-family: Arial, Helvetica, sans-serif; color:#1e293b;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 24px 12px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background:#ffffff; border-radius:12px; overflow:hidden; border:1px solid #e2e8f0;">
                    <tr>
                        <td style="background:#049a3d; padding:22px 24px; color:#ffffff;">
                            <h2 style="margin:0; font-size:20px;">Thank You for Contacting Textora</h2>
                            <p style="margin:4px 0 0; font-size:13px; opacity:0.9;">We have received your request</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px; font-size:14px; line-height:1.6;">
                            <p style="margin-top:0;">Hi <strong>{{ $enquiry->name }}</strong>,</p>
                            <p>
                                Thank you for reaching out to <strong>Textora Technologies</strong>. Our team has received your
                                {{ strtolower($enquiry->type) }} enquiry and will get back to you shortly.
                            </p>

                            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:16px; margin:18px 0;">
                                <p style="margin:0 0 8px; font-weight:bold; color:#0f172a;">Your Enquiry Summary</p>
                                <p style="margin:4px 0;"><strong>Reference ID:</strong> #{{ $enquiry->id }}</p>
                                @if(!empty($enquiry->requirement))
                                    <p style="margin:4px 0;"><strong>Service / Requirement:</strong> {{ $enquiry->requirement }}</p>
                                @endif
                                @if(!empty($enquiry->company_name))
                                    <p style="margin:4px 0;"><strong>Company:</strong> {{ $enquiry->company_name }}</p>
                                @endif
                                @if(!empty($enquiry->contact))
                                    <p style="margin:4px 0;"><strong>Contact Number:</strong> {{ $enquiry->contact }}</p>
                                @endif
                                @if(!empty($enquiry->message))
                                    <p style="margin:8px 0 0;"><strong>Details:</strong><br><span style="white-space:pre-line; color:#475569;">{{ $enquiry->message }}</span></p>
                                @endif
                            </div>

                            <p style="margin-bottom:0;">
                                If you need urgent assistance, feel free to reply to this email or contact us at
                                <a href="mailto:support@textorasms.com" style="color:#049a3d; text-decoration:none;">support@textorasms.com</a>
                                or <strong>+91 9187054466</strong>.
                            </p>
                            <p style="margin-top:16px; color:#64748b; font-size:13px;">
                                Best regards,<br>
                                <strong>Textora Technologies Team</strong>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
