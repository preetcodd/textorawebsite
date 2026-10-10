<?php

namespace App\Http\Controllers;

use App\Models\WhatsappShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WhatsappLinkController extends Controller
{
    /**
     * Generate a branded short WhatsApp link.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'country_code' => 'required|string',
            'phone_number' => 'required|string',
            'message'      => 'nullable|string|max:1000',
        ]);

        $cleanCountry = preg_replace('/\D/', '', $validated['country_code']);
        $cleanPhone   = preg_replace('/\D/', '', $validated['phone_number']);

        if (empty($cleanPhone) || strlen($cleanPhone) < 6) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Please provide a valid phone number (minimum 6 digits).',
            ], 422);
        }

        $message = trim($validated['message'] ?? '');
        $fullNumber = $cleanCountry . $cleanPhone;

        // Construct standard WhatsApp deep link
        $targetUrl = 'https://wa.me/' . $fullNumber;
        if (!empty($message)) {
            $targetUrl .= '?text=' . rawurlencode($message);
        }

        // Check if identical link already exists to reuse slug
        $existing = WhatsappShortLink::where('country_code', $validated['country_code'])
            ->where('phone_number', $cleanPhone)
            ->where('message', $message)
            ->first();

        if ($existing) {
            $slug = $existing->slug;
        } else {
            // Generate unique 6-character random lowercase alphanumeric slug
            do {
                $slug = Str::lower(Str::random(6));
            } while (WhatsappShortLink::where('slug', $slug)->exists());

            WhatsappShortLink::create([
                'slug'         => $slug,
                'country_code' => $validated['country_code'],
                'phone_number' => $cleanPhone,
                'message'      => $message,
                'target_url'   => $targetUrl,
                'clicks'       => 0,
            ]);
        }

        // Subdomain branding (e.g. https://w.textorasms.com/aabpbe)
        $shortDomain = env('WHATSAPP_SHORT_DOMAIN', 'w.textorasms.com');
        $shortUrl = 'https://' . $shortDomain . '/' . $slug;
        $pathUrl  = url('/w/' . $slug);

        return response()->json([
            'status'     => 'success',
            'slug'       => $slug,
            'short_url'  => $shortUrl,
            'path_url'   => $pathUrl,
            'target_url' => $targetUrl,
        ]);
    }

    /**
     * Redirect short link to WhatsApp.
     */
    public function redirect($slug)
    {
        $link = WhatsappShortLink::where('slug', $slug)->first();

        if (!$link) {
            return redirect('/whatsapp-link-generator')->with('error', 'WhatsApp short link not found.');
        }

        // Increment analytics counter
        $link->increment('clicks');

        // Redirect directly to WhatsApp deep link
        return redirect()->away($link->target_url);
    }
}
