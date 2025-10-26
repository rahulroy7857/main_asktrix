<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class RegistrationController extends ServiceController
{
    /**
     * Get registration-specific data
     */
    protected function getRegistrationData()
    {
        return [
            'pageTitle' => 'Complete Registration Services for Your Business',
            'pageSubtitle' => 'Accurate BookKeeping, Empowered Growth, Enhanced Compliances, Strong Finances, Strong Future',
            'services' => [
                [
                    'title' => 'GST Registration',
                    'description' => 'Professional GST registration services for businesses with expert guidance and documentation support.',
                    'icon' => 'fas fa-receipt',
                    'link' => '#'
                ],
                [
                    'title' => 'Professional Tax Registration',
                    'description' => 'Professional tax registration services for businesses operating in different states of India.',
                    'icon' => 'fas fa-briefcase',
                    'link' => '#'
                ],
                [
                    'title' => 'MSME Registration',
                    'description' => 'MSME registration services to help small and medium enterprises avail government benefits.',
                    'icon' => 'fas fa-industry',
                    'link' => '#'
                ],
                [
                    'title' => 'ESI Registration',
                    'description' => 'Employee State Insurance registration services for businesses with proper documentation.',
                    'icon' => 'fas fa-shield-alt',
                    'link' => '#'
                ],
                [
                    'title' => 'EPF Registration',
                    'description' => 'Employee Provident Fund registration services ensuring proper employee benefits setup.',
                    'icon' => 'fas fa-piggy-bank',
                    'link' => '#'
                ],
                [
                    'title' => 'RCMC Registration',
                    'description' => 'Registration Cum Membership Certificate for export-import businesses with expert guidance.',
                    'icon' => 'fas fa-globe',
                    'link' => '#'
                ],
                [
                    'title' => 'STARTUP India Registration',
                    'description' => 'Startup India registration services to help new businesses avail government incentives and benefits.',
                    'icon' => 'fas fa-rocket',
                    'link' => '#'
                ],
                [
                    'title' => 'Digital Signature Certificate',
                    'description' => 'Digital Signature Certificate services for secure online transactions and document signing.',
                    'icon' => 'fas fa-certificate',
                    'link' => '#'
                ]
            ]
        ];
    }

    /**
     * Get the view name for registration service
     */
    protected function getViewName()
    {
        return 'services.registrations.registration';
    }

    /**
     * Get service-specific data
     */
    protected function getServiceData()
    {
        $data = $this->getRegistrationData();
        $data['routeName'] = 'registration';
        return $data;
    }

    /**
     * Show private limited company registration page
     */
    public function privateLimitedCompany()
    {
        return view('services.incorporation.private-limited-company-registration');
    }

    /**
     * Show public limited company registration page
     */
    public function publicLimitedCompany()
    {
        return view('services.incorporation.public-limited-company-registration');
    }

    /**
     * Show one person company registration page
     */
    public function onePersonCompany()
    {
        return view('services.incorporation.one-person-company-registration');
    }

    /**
     * Show trust registration page
     */
    public function trustRegistration()
    {
        return view('services.incorporation.trust-registration');
    }

    /**
     * Show Section 8 Company registration page
     */
    public function section8Company()
    {
        return view('services.incorporation.section-8-company-registration');
    }

    /**
     * Show GST registration page
     */
    public function gstRegistration()
    {
        return view('services.registrations.gst-registration');
    }

    /**
     * Show Professional Tax registration page
     */
    public function professionalTaxRegistration()
    {
        return view('services.registrations.professional-tax-registration');
    }

    /**
     * Show MSME registration page
     */
    public function msmeRegistration()
    {
        return view('services.registrations.msme-registration');
    }

    /**
     * Show ESI registration page
     */
    public function esicRegistration()
    {
        return view('services.registrations.esic-registration');
    }

    /**
     * Show EPF registration page
     */
    public function epfRegistration()
    {
        return view('services.registrations.epf-registration');
    }

    /**
     * Show RCMC registration page
     */
    public function rcmcRegistration()
    {
        return view('services.registrations.rcmc-registration');
    }

    /**
     * Show Startup India registration page
     */
    public function startupIndiaRegistration()
    {
        return view('services.registrations.startup-india-registration');
    }

    /**
     * Show Digital Signature Certificate registration page
     */
    public function digitalSignatureOnline()
    {
        return view('services.registrations.digital-signature-online');
    }

    /**
     * Handle private limited company contact form submission
     */
    public function privateLimitedCompanyContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'query' => 'required|string|max:1000',
            'country_code' => 'required|string|max:10',
        ]);

        try {
            // Create contact record
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'country_code' => $request->country_code,
                'query' => $request->query,
                'service_type' => 'private_limited_company_registration',
                'status' => 'new',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your inquiry! We will contact you soon regarding your private limited company registration requirements.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error submitting your request. Please try again later.'
            ], 500);
        }
    }
}