<?php

namespace App\Http\Controllers;

class LicenseRegistrationController extends ServiceController
{
    /**
     * Get license registration-specific data
     */
    protected function getLicenseRegistrationData()
    {
        return [
            'pageTitle' => 'License Registration Services for Your Business',
            'pageSubtitle' => 'Accurate BookKeeping, Empowered Growth, Enhanced Compliances, Strong Finances, Strong Future',
            'services' => [
                [
                    'title' => 'IE Code',
                    'description' => 'Import Export Code registration services for businesses involved in international trade.',
                    'icon' => 'fas fa-globe',
                    'link' => '#'
                ],
                [
                    'title' => 'TRADE License',
                    'description' => 'Trade license registration services for businesses operating in different municipalities.',
                    'icon' => 'fas fa-store',
                    'link' => '#'
                ],
                [
                    'title' => 'FIRE License',
                    'description' => 'Fire safety license services for businesses ensuring compliance with fire safety regulations.',
                    'icon' => 'fas fa-fire-extinguisher',
                    'link' => '#'
                ],
                [
                    'title' => 'Shop and Establishment',
                    'description' => 'Shop and establishment license services for retail and commercial businesses.',
                    'icon' => 'fas fa-building',
                    'link' => '#'
                ],
                [
                    'title' => 'ISO Registration',
                    'description' => 'ISO certification services to help businesses achieve quality management standards.',
                    'icon' => 'fas fa-certificate',
                    'link' => '#'
                ],
                [
                    'title' => 'LUT Registration',
                    'description' => 'Letter of Undertaking registration services for export businesses under GST.',
                    'icon' => 'fas fa-file-contract',
                    'link' => '#'
                ],
                [
                    'title' => 'FSSAI Registration',
                    'description' => 'Food Safety and Standards Authority of India registration for food businesses.',
                    'icon' => 'fas fa-utensils',
                    'link' => '#'
                ],
                [
                    'title' => 'Foreign Contribution Regulation Act (FCRA)',
                    'description' => 'FCRA registration services for organizations receiving foreign contributions.',
                    'icon' => 'fas fa-hand-holding-heart',
                    'link' => '#'
                ],
                [
                    'title' => '12A Registration',
                    'description' => '12A registration services for charitable organizations to avail tax exemptions.',
                    'icon' => 'fas fa-heart',
                    'link' => '#'
                ],
                [
                    'title' => '80G Registration',
                    'description' => '80G registration services for organizations to provide tax benefits to donors.',
                    'icon' => 'fas fa-donate',
                    'link' => '#'
                ],
                [
                    'title' => 'DARPAN ID Registration',
                    'description' => 'DARPAN ID registration services for NGOs and voluntary organizations.',
                    'icon' => 'fas fa-id-card',
                    'link' => '#'
                ]
            ]
        ];
    }

    /**
     * Get the view name for license registration service
     */
    protected function getViewName()
    {
        return 'services.licenseRegistration.license-registration';
    }

    /**
     * Get service-specific data
     */
    protected function getServiceData()
    {
        $data = $this->getLicenseRegistrationData();
        $data['routeName'] = 'license-registration';
        return $data;
    }

    /**
     * IE Code Registration page
     */
    public function ieCodeRegistration()
    {
        return view('services.licenseRegistration.ie-code-registration');
    }

    /**
     * Trade License Registration page
     */
    public function tradeLicenseRegistration()
    {
        return view('services.licenseRegistration.trade-license-registration');
    }

    /**
     * Fire License Registration page
     */
    public function fireLicenseRegistration()
    {
        return view('services.licenseRegistration.fire-license-registration');
    }

    /**
     * Shop and Establishment License Registration page
     */
    public function shopEstablishmentLicenseRegistration()
    {
        return view('services.licenseRegistration.shop-establishment-license');
    }

    /**
     * ISO Certification page
     */
    public function isoCertification()
    {
        return view('services.licenseRegistration.iso-certification');
    }

    /**
     * LUT Registration page
     */
    public function lutRegistration()
    {
        return view('services.licenseRegistration.letter-of-undertaking-gst-lut');
    }

    /**
     * FSSAI Registration page
     */
    public function fssaiRegistration()
    {
        return view('services.licenseRegistration.fssai-registration');
    }

    /**
     * FCRA Registration page
     */
    public function fcraRegistration()
    {
        return view('services.licenseRegistration.fcra-registration');
    }

    /**
     * 12A Registration page
     */
    public function twelveARegistration()
    {
        return view('services.licenseRegistration.12a-registration');
    }

    /**
     * 80G Registration page
     */
    public function eightyGRegistration()
    {
        return view('services.licenseRegistration.80g-registration');
    }

    /**
     * Darpan ID Registration page
     */
    public function darpanRegistration()
    {
        return view('services.licenseRegistration.darpan-registration');
    }
}