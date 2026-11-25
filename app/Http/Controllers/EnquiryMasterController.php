<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryAdminNotification;
use App\Mail\EnquiryUserConfirmation;
use App\Models\EnquiryMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EnquiryMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('enquiry.enquiry_index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Support alternate field names from different website forms (mobile/contact, service/requirement, consent/terms)
        $request->merge([
            'contact' => $request->input('contact') ?: $request->input('mobile'),
            'requirement' => $request->input('requirement') ?: $request->input('service'),
            'terms' => $request->input('terms') ?: $request->input('consent'),
        ]);

        $validated = $request->validate([
            'isFormType' => 'required|in:Contact,Demo,Business',
        ]);

        $formType = $validated['isFormType'];

        if ($formType === 'Contact') {
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'contact' => 'required|string|max:20',
                'region' => 'nullable|string|max:255',
                'message' => 'nullable|string',
                'company_name' => 'nullable|string|max:255',
                'requirement' => 'nullable|string|max:255',
                'other_service' => 'nullable|string|max:255',
                'volume' => 'nullable|string|max:255',
                'terms' => 'accepted',
            ];
        } else { // Demo or Business
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'contact' => 'required|string|max:20',
                'company_name' => 'required|string|max:255',
                'requirement' => 'required|string|max:255',
                'other_service' => 'nullable|string|max:255',
                'region' => 'nullable|string|max:255',
                'message' => 'nullable|string',
                'terms' => 'accepted',
            ];
        }

        $formValidated = $request->validate($rules);

        $requirement = $formValidated['requirement'] ?? null;
        if ($requirement === 'Other Services' && !empty($formValidated['other_service'])) {
            $requirement = $formValidated['other_service'];
        }

        $message = trim((string) ($formValidated['message'] ?? ''));
        if (!empty($formValidated['volume'])) {
            $volumeLine = 'Estimated Volume: ' . $formValidated['volume'];
            $message = $message !== '' ? $volumeLine . "\n\n" . $message : $volumeLine;
        }

        $enquiry = EnquiryMaster::create([
            'name' => $formValidated['name'],
            'email' => $formValidated['email'],
            'contact' => $formValidated['contact'],
            'region' => $formValidated['region'] ?? null,
            'company_name' => $formValidated['company_name'] ?? null,
            'requirement' => $requirement,
            'type' => $formType,
            'message' => $message !== '' ? $message : null,
            'is_terms_accepted' => true,
        ]);

        // Send admin notification and user confirmation emails without blocking enquiry save
        try {
            $adminEmail = config('mail.admin_email');
            if (!empty($adminEmail)) {
                Mail::to($adminEmail)->send(new EnquiryAdminNotification($enquiry));
            }

            if (!empty($enquiry->email)) {
                Mail::to($enquiry->email)->send(new EnquiryUserConfirmation($enquiry));
            }
        } catch (\Throwable $e) {
            Log::error('Failed to send enquiry emails for enquiry #' . $enquiry->id . ': ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you! Your enquiry has been received. A confirmation email has been sent and our team will contact you soon.');
    }
}
