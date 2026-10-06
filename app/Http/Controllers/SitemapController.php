<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
      
        $routes = [
            '/',
            '/about-us',
            '/pricing-web',
            '/contact-us',
            '/term-and-Conditions',
            '/privacy-policy',
            '/refund_policy',
            '/bulk-sms',
            '/bulk-whatsapp',
            '/email-marketing',
            '/website-development',
            '/faq',
            '/rcs-messaging',
            '/reseller',
            '/voice-call',
            '/services-web',
            '/sms-api',
            '/whatsapp-business-api',
            '/blog_list',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($routes as $route) {
            $xml .= '<url>';
            $xml .= '<loc>' . url($route) . '</loc>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }
}
