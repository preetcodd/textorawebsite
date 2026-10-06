<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\PricingMaster;
use Illuminate\Http\Request;

class PricingMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pricing.pricing_index');
    }
    public function pricing_web_view()
    {
        // Custom ordering for category: STARTER PLAN, BUSINESS PLAN, ENTERPRISE PLAN
        $pricings = PricingMaster::where('is_active', true)
            ->orderBy('service')
            ->orderBy('subcategory')
            ->orderByRaw("FIELD(category, 'STARTER PLAN', 'BUSINESS PLAN', 'ENTERPRISE PLAN')")
            ->get()
            ->groupBy(['service', 'subcategory']);

        $allServices = ['Whatsapp', 'Bulk Whatsapp', 'SMS', 'RCS','Email']; // All possible services for tabs
        $services = $allServices; // Use all, even if no data
        $firstService = 'SMS'; // Default to Bulk SMS

        return view('Website.pricing_page', [
            'pricings' => $pricings,
            'services' => $services,
            'firstService' => $firstService
        ]);
    }
}
