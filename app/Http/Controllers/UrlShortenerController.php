<?php

namespace App\Http\Controllers;

use App\Models\UrlShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlShortenerController extends Controller
{
    /**
     * Display URL Shortener page.
     */
    public function index()
    {
        return view('Website.url-shortener');
    }

    /**
     * Generate a new short URL.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'destination_url' => [
                'required',
                'url:http,https',
                'max:2048',
            ],
        ]);

        do {
            $code = Str::lower(Str::random(8));
        } while (UrlShortLink::where('code', $code)->exists());

        $shortLink = UrlShortLink::create([
            'code' => $code,
            'destination_url' => $validated['destination_url'],
            'clicks' => 0,
            'is_active' => true,
        ]);

        return redirect()
            ->route('url-shortener.index')
            ->with('short_url', url('/go/' . $shortLink->code))
            ->with('original_url', $shortLink->destination_url);
    }

    /**
     * Redirect short URL to original destination.
     */
    public function redirectToDestination($code)
    {
        $shortLink = UrlShortLink::where('code', $code)
            ->where('is_active', true)
            ->firstOrFail();

        $shortLink->increment('clicks');

        return redirect()->away($shortLink->destination_url, 302);
    }
}
