<?php

namespace App\Http\Controllers;

class RocController extends ServiceController
{
    /**
     * Get ROC-specific data
     */
    protected function getRocData()
    {
        return [
            'pageTitle' => 'ROC Compliance & Company Services',
            'pageSubtitle' => 'Accurate BookKeeping, Empowered Growth, Enhanced Compliances, Strong Finances, Strong Future',
            'services' => [
                [
                    'title' => 'Addition Of Director',
                    'description' => 'Adding a director to a company in India is a crucial corporate governance process, governed by the Companies Act, 2013. We handle all documentation and compliance requirements.',
                    'icon' => 'fas fa-user-plus',
                    'link' => route('appointment-of-director')
                ],
                [
                    'title' => 'Removal Of Director',
                    'description' => 'The removal of a director from a company in India is a significant corporate action governed by the Companies Act, 2013. We ensure proper legal compliance.',
                    'icon' => 'fas fa-user-minus',
                    'link' => route('removal-of-director')
                ],
                [
                    'title' => 'Share Transfer',
                    'description' => 'Transferring shares in a company is a crucial aspect of corporate governance and financial management. It allows for the reallocation of ownership.',
                    'icon' => 'fas fa-exchange-alt',
                    'link' => route('company-share-transfer')
                ],
                [
                    'title' => 'Company Strike Off Clearance',
                    'description' => 'Company Strike Off refers to the formal process of removing a company\'s name from the Registrar of Companies (ROC) when it\'s no longer operational.',
                    'icon' => 'fas fa-times-circle',
                    'link' => route('strike-off-company')
                ],
                [
                    'title' => 'DIN Reactivation',
                    'description' => 'The Director Identification Number (DIN) is a unique identification number assigned to individuals intending to be directors of a company in India.',
                    'icon' => 'fas fa-redo',
                    'link' => route('director-disqualification')
                ],
                [
                    'title' => 'Company Name Change',
                    'description' => 'Changing the name of a company in India involves specific steps as per the Companies Act, 2013 and applicable MCA rules.',
                    'icon' => 'fas fa-edit',
                    'link' => route('company-name-change')
                ],
                [
                    'title' => 'Increased Authorized Capital',
                    'description' => 'Increasing authorized capital allows a company to raise its limit for issuing shares, which can help in bringing additional funds for growth.',
                    'icon' => 'fas fa-arrow-up',
                    'link' => route('authorized-capital')
                ],
                [
                    'title' => 'Register Office Address Change',
                    'description' => 'Changing a company\'s registered office address involves a regulated process governed by the Companies Act, 2013 and corresponding MCA rules.',
                    'icon' => 'fas fa-map-marker-alt',
                    'link' => route('change-of-registered-office')
                ]
            ]
        ];
    }

    /**
     * Get the view name for ROC service
     */
    protected function getViewName()
    {
        return 'services.roc.roc-registrar-of-companies';
    }

    /**
     * Get service-specific data
     */
    protected function getServiceData()
    {
        $data = $this->getRocData();
        $data['routeName'] = 'roc';
        return $data;
    }

    /**
     * Show appointment of director page
     */
    public function appointmentOfDirector()
    {
        return view('services.roc.appointment-of-director');
    }

    /**
     * Show removal of director page
     */
    public function removalOfDirector()
    {
        return view('services.roc.removal-of-director');
    }

    /**
     * Show company share transfer page
     */
    public function companyShareTransfer()
    {
        return view('services.roc.company-share-transfer');
    }

    /**
     * Show company strike off page
     */
    public function strikeOffCompany()
    {
        return view('services.roc.strike-off-company');
    }

    /**
     * Show director disqualification page
     */
    public function directorDisqualification()
    {
        return view('services.roc.director-disqualification');
    }

    /**
     * Show company name change page
     */
    public function companyNameChange()
    {
        return view('services.roc.company-name-change');
    }

    /**
     * Show authorized capital increase page
     */
    public function authorizedCapital()
    {
        return view('services.roc.authorized-capital');
    }

    /**
     * Show change of registered office page
     */
    public function changeOfRegisteredOffice()
    {
        return view('services.roc.change-of-registered-office');
    }
}