<?php

namespace App\Http\Controllers;

use App\Models\EnquiryMaster;
use Illuminate\Http\Request;

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
                'isFormType' => 'nullable',
                'terms' => 'accepted',
            ];
        } else { // Demo or Business
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'contact' => 'required|string|max:20',
                'company_name' => 'required|string|max:255',
                'requirement' => 'required|string|max:255',
                'region' => 'nullable|string|max:255',
                'message' => 'nullable|string',
                'isFormType' => 'nullable',
                'terms' => 'accepted',
            ];
        }
        $validated = array_merge($validated, $request->validate($rules));

        $validated['requirement'] = ($request->requirement == 'Other Services') ? $request->other_service : $request->requirement;

        // Map 'isFormType' to 'type' for DB storage and remove the original key
        $validated['type'] = $validated['isFormType'];
        unset($validated['isFormType']);

        $validated['is_terms_accepted'] = 1;
        unset($validated['terms']);

        EnquiryMaster::create($validated);
        return redirect()->back()->with('success', 'Thank you! Your enquiry has been received. Our team will contact you soon.');
    }
}
