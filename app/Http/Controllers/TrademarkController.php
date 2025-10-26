<?php

namespace App\Http\Controllers;

class TrademarkController extends ServiceController
{
    /**
     * Get trademark-specific data
     */
    protected function getTrademarkData()
    {
        return [
            'pageTitle' => 'Trademark & Intellectual Property Services',
            'pageSubtitle' => 'Accurate BookKeeping, Empowered Growth, Enhanced Compliances, Strong Finances, Strong Future',
            'services' => [
                [
                    'title' => 'Trademark Registration',
                    'description' => 'Complete trademark registration services to protect your brand identity and intellectual property.',
                    'icon' => 'fas fa-trademark',
                    'link' => '#'
                ],
                [
                    'title' => 'Copyright Registration',
                    'description' => 'Copyright registration services for literary, artistic, and creative works with expert guidance.',
                    'icon' => 'fas fa-copyright',
                    'link' => '#'
                ],
                [
                    'title' => 'Copyright Objection',
                    'description' => 'Professional handling of copyright objections and disputes with legal expertise.',
                    'icon' => 'fas fa-gavel',
                    'link' => '#'
                ],
                [
                    'title' => 'Copyright Hearing',
                    'description' => 'Representation in copyright hearings and legal proceedings with experienced attorneys.',
                    'icon' => 'fas fa-balance-scale',
                    'link' => '#'
                ],
                [
                    'title' => 'Patent Registration',
                    'description' => 'Patent registration services for inventions and innovations with comprehensive documentation.',
                    'icon' => 'fas fa-lightbulb',
                    'link' => '#'
                ],
                [
                    'title' => 'TradeMark Objection',
                    'description' => 'Professional handling of trademark objections and opposition proceedings.',
                    'icon' => 'fas fa-exclamation-triangle',
                    'link' => '#'
                ],
                [
                    'title' => 'TradeMark Hearing',
                    'description' => 'Legal representation in trademark hearings and dispute resolution proceedings.',
                    'icon' => 'fas fa-gavel',
                    'link' => '#'
                ],
                [
                    'title' => 'TradeMark Opposition',
                    'description' => 'Trademark opposition services to protect your brand from conflicting registrations.',
                    'icon' => 'fas fa-shield-alt',
                    'link' => '#'
                ],
                [
                    'title' => 'TradeMark Rectification',
                    'description' => 'Trademark rectification services to correct errors in trademark registrations.',
                    'icon' => 'fas fa-edit',
                    'link' => '#'
                ],
                [
                    'title' => 'TradeMark Certificate',
                    'description' => 'Trademark certificate services and documentation for successful registrations.',
                    'icon' => 'fas fa-certificate',
                    'link' => '#'
                ],
                [
                    'title' => 'TradeMark Renewal',
                    'description' => 'Trademark renewal services to maintain your brand protection and legal rights.',
                    'icon' => 'fas fa-sync-alt',
                    'link' => '#'
                ],
                [
                    'title' => 'Copyright Certificate',
                    'description' => 'Copyright certificate services and documentation for registered works.',
                    'icon' => 'fas fa-award',
                    'link' => '#'
                ]
            ]
        ];
    }

    /**
     * Get the view name for trademark service
     */
    protected function getViewName()
    {
        return 'services.trademark.trademark';
    }

    /**
     * Get service-specific data
     */
    protected function getServiceData()
    {
        $data = $this->getTrademarkData();
        $data['routeName'] = 'trademark';
        return $data;
    }

    /**
     * Show trademark registration page
     */
    public function trademarkRegistration()
    {
        return view('services.trademark.trademark-registration');
    }

    /**
     * Show copyright registration page
     */
    public function copyrightRegistration()
    {
        return view('services.trademark.copyright-registration');
    }

    /**
     * Show copyright objection page
     */
    public function copyrightObjection()
    {
        return view('services.trademark.copyright-objection');
    }

    /**
     * Show copyright hearing page
     */
    public function copyrightHearing()
    {
        return view('services.trademark.copyright-hearing');
    }

    /**
     * Show patent registration page
     */
    public function patentRegistration()
    {
        return view('services.trademark.patent-registration');
    }

    /**
     * Show trademark objection page
     */
    public function trademarkObjection()
    {
        return view('services.trademark.trademark-objection');
    }

    /**
     * Show trademark hearing page
     */
    public function trademarkHearing()
    {
        return view('services.trademark.trademark-hearing');
    }

    /**
     * Show trademark opposition page
     */
    public function trademarkOpposition()
    {
        return view('services.trademark.trademark-opposition');
    }

    /**
     * Show trademark rectification page
     */
    public function trademarkRectification()
    {
        return view('services.trademark.trademark-rectification');
    }

    /**
     * Show trademark registration certificate page
     */
    public function trademarkRegistrationCertificate()
    {
        return view('services.trademark.trademark-registration-certificate');
    }

    /**
     * Show trademark renewal page
     */
    public function trademarkRenewal()
    {
        return view('services.trademark.trademark-renewal');
    }

    /**
     * Show copyright registration certificate page
     */
    public function copyrightRegistrationCertificate()
    {
        return view('services.trademark.copyright-registration-certificate');
    }
}