<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = $this->generateSitemap();
        
        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml');
    }
    
    private function generateSitemap()
    {
        $baseUrl = url('/');
        $date = date('Y-m-d');
        
        $urls = [
            // Main Pages
            ['loc' => $baseUrl, 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => $baseUrl . '/incorporation', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/accounting-registration/', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/registrations/', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/trademark', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/license-registration', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/roc-registrar-of-companies/', 'priority' => '0.9', 'changefreq' => 'monthly'],
            
            // Incorporation Services
            ['loc' => $baseUrl . '/private-limited-company-registration', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/public-limited-company-registration', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/one-person-company-registration', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/llp-registration', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/partnership-firm-registration', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/sole-proprietorship-registration', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/trust-registration', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/section-8-company', 'priority' => '0.8'],
            
            // Accounting Services
            ['loc' => $baseUrl . '/company-annual-filing-roc/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/llp-annual-filing/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/proprietorship-compliance/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/gst-return-filing/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/income-tax-return-filing/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/tds-return-filing/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/esi-return-filing/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/pf-return-filing/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/professional-tax-return-filing/', 'priority' => '0.8'],
            
            // Registration Services
            ['loc' => $baseUrl . '/gst-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/professional-tax-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/msme-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/esic-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/epf-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/rcmc-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/startup-india-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/digital-signature-online/', 'priority' => '0.8'],
            
            // Trademark Services
            ['loc' => $baseUrl . '/trademark-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/copyright-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/copyright-objection/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/copyright-hearing/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/patent-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/trademark-objection/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/trademark-hearing/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/trademark-opposition/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/trademark-rectification/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/trademark-registration-certificate/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/trademark-renewal/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/copyright-registration-certificate/', 'priority' => '0.7'],
            
            // License Registration Services
            ['loc' => $baseUrl . '/import-export-code-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/trade-license-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/fire-license-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/shop-establishment-license-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/iso-certification/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/letter-of-undertaking-gst-lut/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/fssai-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/fcra/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/12a-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/80g-registration/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/darpan-registration/', 'priority' => '0.8'],
            
            // ROC Services
            ['loc' => $baseUrl . '/appointment-of-director/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/removal-of-director/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/company-share-transfer/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/strike-off-company/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/director-disqualification/', 'priority' => '0.7'],
            ['loc' => $baseUrl . '/company-name-change/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/authorized-capital/', 'priority' => '0.8'],
            ['loc' => $baseUrl . '/change-of-registered-office/', 'priority' => '0.8'],
        ];
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        foreach ($urls as $url) {
            $xml .= "\t<url>\n";
            $xml .= "\t\t<loc>" . htmlspecialchars($url['loc']) . "</loc>\n";
            $xml .= "\t\t<lastmod>" . $date . "</lastmod>\n";
            $xml .= "\t\t<changefreq>" . ($url['changefreq'] ?? 'monthly') . "</changefreq>\n";
            $xml .= "\t\t<priority>" . ($url['priority'] ?? '0.5') . "</priority>\n";
            $xml .= "\t</url>\n";
        }
        
        $xml .= '</urlset>';
        
        return $xml;
    }
}

