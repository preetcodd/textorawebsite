<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    public function index()
    {
        $routes = [
            '/',
            '/about-us',
            '/pricing-web',
            '/contact-us',
            '/portfolio',
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
            '/url-shortener',
            '/whatsapp-link-generator',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($routes as $route) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars(url($route), ENT_XML1, 'UTF-8') . '</loc>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
