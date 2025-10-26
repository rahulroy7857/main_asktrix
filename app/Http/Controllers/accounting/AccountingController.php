<?php

namespace App\Http\Controllers\accounting;

class AccountingController extends \App\Http\Controllers\ServiceController
{
    /**
     * Get accounting-specific data
     */
    protected function getAccountingData()
    {
        return [
            'pageTitle' => 'Professional Accounting Services for Your Business',
            'pageSubtitle' => 'Accurate BookKeeping, Empowered Growth, Enhanced Compliances, Strong Finances, Strong Future',
            'services' => [
                [
                    'title' => 'PVT LTD Compliance',
                    'description' => 'Complete compliance services for Private Limited Companies including annual returns, board meetings, and statutory filings.',
                    'icon' => 'fas fa-building',
                    'link' => '#'
                ],
                [
                    'title' => 'LLP Compliance',
                    'description' => 'Comprehensive compliance services for Limited Liability Partnerships including annual returns and partner changes.',
                    'icon' => 'fas fa-handshake',
                    'link' => '#'
                ],
                [
                    'title' => 'Proprietorship Compliance',
                    'description' => 'Tax compliance and filing services for sole proprietorship businesses with expert guidance.',
                    'icon' => 'fas fa-user',
                    'link' => '#'
                ],
                [
                    'title' => 'GST Return Filing',
                    'description' => 'Professional GST return filing services ensuring timely compliance and accurate reporting.',
                    'icon' => 'fas fa-receipt',
                    'link' => '#'
                ],
                [
                    'title' => 'Income Tax Return Filing',
                    'description' => 'Expert income tax return filing services for individuals and businesses with maximum deductions.',
                    'icon' => 'fas fa-file-invoice',
                    'link' => '#'
                ],
                [
                    'title' => 'TDS Return Filing',
                    'description' => 'Timely TDS return filing services ensuring compliance with tax deduction at source regulations.',
                    'icon' => 'fas fa-calculator',
                    'link' => '#'
                ],
                [
                    'title' => 'ESI Filing',
                    'description' => 'Employee State Insurance filing services for businesses with proper documentation.',
                    'icon' => 'fas fa-shield-alt',
                    'link' => '#'
                ],
                [
                    'title' => 'EPF Filing',
                    'description' => 'Employee Provident Fund filing services ensuring proper employee benefits compliance.',
                    'icon' => 'fas fa-piggy-bank',
                    'link' => '#'
                ],
                [
                    'title' => 'Professional Tax Filing',
                    'description' => 'Professional tax filing services for businesses operating in different states.',
                    'icon' => 'fas fa-briefcase',
                    'link' => route('professional-tax-return-filing')
                ]
            ]
        ];
    }

    /**
     * Get the view name for accounting service
     */
    protected function getViewName()
    {
        return 'services.accounting.accounting-registration';
    }

    /**
     * Get service-specific data
     */
    protected function getServiceData()
    {
        $data = $this->getAccountingData();
        $data['routeName'] = 'accounting';
        return $data;
    }

    /**
     * Company Annual Filing ROC page
     */
    public function companyAnnualFilingRoc()
    {
        return view('services.accounting.company-annual-filing-roc');
    }

    /**
     * LLP Annual Filing page
     */
    public function llpAnnualFiling()
    {
        return view('services.accounting.llp-annual-filing');
    }

    /**
     * Proprietorship Compliance page
     */
    public function proprietorshipCompliance()
    {
        return view('services.accounting.proprietorship-compliance');
    }

    /**
     * GST Return Filing page
     */
    public function gstReturnFiling()
    {
        return view('services.accounting.gst-return-filing');
    }

    /**
     * Income Tax Return Filing page
     */
    public function incomeTaxReturnFiling()
    {
        return view('services.accounting.income-tax-return-filing');
    }

    /**
     * TDS Return Filing page
     */
    public function tdsReturnFiling()
    {
        return view('services.accounting.tds-return-filing');
    }

    /**
     * ESI Return Filing page
     */
    public function esiReturnFiling()
    {
        return view('services.accounting.esi-return-filing');
    }

    /**
     * PF Return Filing page
     */
    public function pfReturnFiling()
    {
        return view('services.accounting.pf-return-filing');
    }

    /**
     * Professional Tax Return Filing page
     */
    public function professionalTaxReturnFiling()
    {
        return view('services.accounting.professional-tax-return-filing');
    }
}