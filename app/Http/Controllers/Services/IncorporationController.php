<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\ServiceController;

class IncorporationController extends ServiceController
{

    public function index()
    {       
        $data = array_merge($this->getCommonData(), $this->getIncorporationData());
        return view('services.incorporation.incorporation', $data);
    }

    public function llpRegistration()
    {
        return view('services.incorporation.llp-registration');
    }

    public function partnershipFirmRegistration()
    {
        return view('services.incorporation.partnership-firm-registration');
    }

    public function soleProprietorshipRegistration()
    {
        return view('services.incorporation.sole-proprietorship-registration');
    }
    /**
     * Get incorporation-specific data
     */
    protected function getIncorporationData()
    {
        return [
            'pageTitle' => 'Top-Quality Incorporation Services for Your Business',
            'pageSubtitle' => 'Accurate BookKeeping, Empowered Growth, Enhanced Compliances, Strong Finances, Strong Future',
            'services' => [
                [
                    'title' => 'Sole Proprietorship Registration',
                    'description' => 'A Sole Proprietorship is a simple business structure ideal for individuals looking to start a small business. It\'s owned, managed',
                    'icon' => 'fas fa-user',
                    'link' => '#'
                ],
                [
                    'title' => 'One Person Company (OPC)',
                    'description' => 'Starting a One Person Company (OPC) in India is ideal for solo entrepreneurs who want the benefits of a private limited company with simplified',
                    'icon' => 'fas fa-building',
                    'link' => '#'
                ],
                [
                    'title' => 'Partnership Firm',
                    'description' => 'A Partnership Firm is a popular business structure in India, offering simplicity in terms of formation, management',
                    'icon' => 'fas fa-users',
                    'link' => '#'
                ],
                [
                    'title' => 'LLP Registration',
                    'description' => 'A Limited Liability Partnership (LLP) combines the benefits of both registered company and partnership firm. It offers partners the flexibility',
                    'icon' => 'fas fa-file-contract',
                    'link' => '#'
                ],
                [
                    'title' => 'Private Limited Company',
                    'description' => 'Starting a private limited company in India offers multiple benefits for business owners, including separate legal identity,',
                    'icon' => 'fas fa-building',
                    'link' => '#'
                ],
                [
                    'title' => 'Public Limited Company',
                    'description' => 'Launching a Public Limited Company (PLC) in India is a strategic move for businesses looking to raise capital from the general public and operate',
                    'icon' => 'fas fa-building',
                    'link' => '#'
                ],
                [
                    'title' => 'Trust Registration',
                    'description' => 'Establishing a trust in India is a meaningful way to contribute to social welfare, manage estates, or achieve charitable, educational, or religious',
                    'icon' => 'fas fa-hand-holding-heart',
                    'link' => '#'
                ],
                [
                    'title' => 'Section 8 Company',
                    'description' => 'A Section 8 Company is a special type of non-profit organization in India with the aim of promoting charity and getting funds from',
                    'icon' => 'fas fa-university',
                    'link' => '#'
                ]
            ]
        ];
    }

    /**
     * Get the view name for incorporation service
     */
    protected function getViewName()
    {
        return 'services.service-template';
    }

    /**
     * Get service-specific data
     */
    protected function getServiceData()
    {
        $data = $this->getIncorporationData();
        $data['routeName'] = 'incorporation';
        return $data;
    }

}