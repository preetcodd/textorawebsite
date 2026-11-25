<?php

namespace App\Http\Controllers;

use App\Models\EnquiryMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Throwable;

class EnquiryMasterController extends Controller
{
    public function index()
    {
        return view('enquiry.enquiry_index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'isFormType' => 'required|in:Contact,Demo,Business',
        ]);

        $formType = $validated['isFormType'];

        if ($formType === 'Contact') {
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'contact' => 'required|string|max:20',
                'region' => 'required|string|max:255',
                'message' => 'required|string',
                'company_name' => 'nullable|string|max:255',
                'requirement' => 'nullable|string|max:255',
                'other_service' => 'nullable|string|max:255',
                'isFormType' => 'nullable',
                'terms' => 'accepted',
            ];
        } else {
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'contact' => 'required|string|max:20',
                'company_name' => 'required|string|max:255',
                'requirement' => 'required|string|max:255',
                'other_service' => 'nullable|string|max:255',
                'region' => 'nullable|string|max:255',
                'message' => 'nullable|string',
                'isFormType' => 'nullable',
                'terms' => 'accepted',
            ];
        }

        $validated = array_merge(
            $validated,
            $request->validate($rules)
        );

        // Handle Other Services
        if ($request->requirement === 'Other Services') {
            $validated['requirement'] = $request->input('other_service');
        }

        // Map form type for database
        $validated['type'] = $validated['isFormType'];
        unset($validated['isFormType']);

        $validated['is_terms_accepted'] = 1;
        unset($validated['terms']);

        // Remove extra field not required in database
        unset($validated['other_service']);

        // Save enquiry in database
        $enquiry = EnquiryMaster::create($validated);

        // Send confirmation email to customer
        try {
            $customerName = $enquiry->name;
            $customerEmail = $enquiry->email;
            $service = $enquiry->requirement ?: 'Not specified';
            $company = $enquiry->company_name ?: 'Not specified';

            $subject = 'Thank You for Contacting Textora SMS';

            $emailBody = "Dear {$customerName},\n\n";

            $emailBody .= "Thank you for contacting Textora SMS!\n\n";

            $emailBody .= "We have successfully received your {$formType} request.\n\n";

            $emailBody .= "Your Enquiry Details:\n";
            $emailBody .= "Name: {$customerName}\n";
            $emailBody .= "Company: {$company}\n";
            $emailBody .= "Service: {$service}\n\n";

            $emailBody .= "Our team will review your request and contact you soon.\n\n";

            // Support contact details
            $emailBody .= "For more enquiries or assistance, contact us:\n";
            $emailBody .= "Mobile: 09187054466\n";
            $emailBody .= "Email: support@textorasms.com\n";
            $emailBody .= "Website: https://textorasms.com\n\n";

            $emailBody .= "Regards,\n";
            $emailBody .= "Team Textora SMS";

            Mail::raw($emailBody, function ($message) use (
                $customerEmail,
                $customerName,
                $subject
            ) {
                $message->to($customerEmail, $customerName)
                    ->subject($subject);
            });

            Log::info('Customer confirmation email sent successfully.', [
                'enquiry_id' => $enquiry->id,
                'email' => $customerEmail,
            ]);

        } catch (Throwable $e) {
            Log::error('Customer confirmation email failed.', [
                'enquiry_id' => $enquiry->id,
                'email' => $enquiry->email,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()->back()->with(
            'success',
            'Thank you! Your enquiry has been received. Our team will contact you soon.'
        );
    }
}
