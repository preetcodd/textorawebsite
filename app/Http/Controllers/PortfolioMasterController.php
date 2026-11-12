<?php

namespace App\Http\Controllers;

use App\Models\PortfolioMaster;
use Illuminate\Http\Request;

class PortfolioMasterController extends Controller
{
    /**
     * Display a listing of the resource for the admin panel.
     */
    public function index()
    {
        return view('portfolio.portfolio_index');
    }

    /**
     * Public customer-facing view of all published portfolio items.
     */
    public function portfolio_web_view()
    {
        $portfolios = PortfolioMaster::where('is_published', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        return view('Website.portfolio', [
            'portfolios' => $portfolios
        ]);
    }
}
