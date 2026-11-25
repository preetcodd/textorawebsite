<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Website Enquiry</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f7f5; font-family: Arial, Helvetica, sans-serif; color:#1e293b;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 24px 12px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background:#ffffff; border-radius:12px; overflow:hidden; border:1px solid #e2e8f0;">
                    <tr>
                        <td style="background:#049a3d; padding:20px 24px; color:#ffffff;">
                            <h2 style="margin:0; font-size:20px;">New {{ $enquiry->type }} Enquiry</h2>
                            <p style="margin:4px 0 0; font-size:13px; opacity:0.9;">Submitted from Textora Website</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px;">
                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; font-size:14px;">
                                <tr>
                                    <td style="width:140px; font-weight:bold; color:#475569; border-bottom:1px solid #f1f5f9;">Name</td>
                                    <td style="color:#0f172a; border-bottom:1px solid #f1f5f9;">{{ $enquiry->name }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; color:#475569; border-bottom:1px solid #f1f5f9;">Email</td>
                                    <td style="color:#0f172a; border-bottom:1px solid #f1f5f9;">
                                        <a href="mailto:{{ $enquiry->email }}" style="color:#049a3d; text-decoration:none;">{{ $enquiry->email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; color:#475569; border-bottom:1px solid #f1f5f9;">Contact</td>
                                    <td style="color:#0f172a; border-bottom:1px solid #f1f5f9;">{{ $enquiry->contact }}</td>
                                </tr>
                                @if(!empty($enquiry->company_name))
                                <tr>
                                    <td style="font-weight:bold; color:#475569; border-bottom:1px solid #f1f5f9;">Company</td>
                                    <td style="color:#0f172a; border-bottom:1px solid #f1f5f9;">{{ $enquiry->company_name }}</td>
                                </tr>
                                @endif
                                @if(!empty($enquiry->region))
                                <tr>
                                    <td style="font-weight:bold; color:#475569; border-bottom:1px solid #f1f5f9;">Region</td>
                                    <td style="color:#0f172a; border-bottom:1px solid #f1f5f9;">{{ $enquiry->region }}</td>
                                </tr>
                                @endif
                                @if(!empty($enquiry->requirement))
                                <tr>
                                    <td style="font-weight:bold; color:#475569; border-bottom:1px solid #f1f5f9;">Requirement</td>
                                    <td style="color:#0f172a; border-bottom:1px solid #f1f5f9;">{{ $enquiry->requirement }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td style="font-weight:bold; color:#475569; border-bottom:1px solid #f1f5f9;">Form Type</td>
                                    <td style="color:#0f172a; border-bottom:1px solid #f1f5f9;">{{ $enquiry->type }}</td>
                                </tr>
                                @if(!empty($enquiry->message))
                                <tr>
                                    <td style="font-weight:bold; color:#475569; vertical-align:top;">Message</td>
                                    <td style="color:#0f172a; white-space:pre-line;">{{ $enquiry->message }}</td>
                                </tr>
                                @endif
                            </table>

                            <div style="margin-top:20px; padding-top:16px; border-top:1px solid #e2e8f0; font-size:12px; color:#64748b;">
                                Submitted on {{ $enquiry->created_at?->format('d M Y, h:i A') ?? now()->format('d M Y, h:i A') }}
                                &bull; Saved in Admin Panel (Enquiry ID #{{ $enquiry->id }})
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
