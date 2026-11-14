<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\PricingMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PricingMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pricing.pricing_index');
    }

    public function pricing_web_view()
    {
        try {
            // Custom ordering for category: STARTER PLAN, BUSINESS PLAN, ENTERPRISE PLAN (compatible with PostgreSQL, MySQL, SQLite)
            $pricings = PricingMaster::where('is_active', true)
                ->orderBy('service')
                ->orderBy('subcategory')
                ->orderByRaw("CASE category WHEN 'STARTER PLAN' THEN 1 WHEN 'BUSINESS PLAN' THEN 2 WHEN 'ENTERPRISE PLAN' THEN 3 ELSE 4 END")
                ->get()
                ->groupBy(['service', 'subcategory']);
        } catch (\Throwable $e) {
            Log::warning('Pricing database query failed, falling back to empty collection: ' . $e->getMessage());
            $pricings = collect();
        }

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
