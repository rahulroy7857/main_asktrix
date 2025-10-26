@extends('layouts.app')

@section('title', 'LLP Compliance Guide (Accounting, Auditing & Mandatory Filings) - Asktrix')

@section('styles')
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<style>
    .Asktrix-blue {
        color: #1a237e;
    }
    .Asktrix-light-blue {
        color: #42a5f5;
    }
    .Asktrix-green {
        color: #4caf50;
    }
    .bg-Asktrix-blue {
        background-color: #1a237e;
    }
    .bg-Asktrix-light-blue {
        background-color: #42a5f5;
    }
    .bg-Asktrix-green {
        background-color: #4caf50;
    }
    .border-Asktrix-green {
        border-color: #4caf50;
    }
    .form-sidebar {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border: 2px solid #4caf50;
        border-radius: 12px;
        position: sticky;
        top: 100px;
    }
    .faq-item {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 8px;
        overflow: hidden;
    }
    .faq-question {
        background: #f8f9fa;
        padding: 16px 20px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }
    .faq-question:hover {
        background: #e9ecef;
    }
    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        background: white;
    }
    .faq-answer.active {
        padding: 20px;
        max-height: 500px;
    }
    .faq-icon {
        transition: transform 0.3s ease;
    }
    .faq-icon.rotated {
        transform: rotate(180deg);
    }
    .content-section {
        margin-bottom: 24px;
    }
    
    @media (min-width: 768px) {
        .content-section {
            margin-bottom: 40px;
        }
    }
        margin-bottom: 24px;
    }
    .content-section h2 {
        color: #1a237e;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 16px;
    }
    
    @media (min-width: 768px) {
        .content-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
    }
    .content-section h3 {
        color: #1a237e;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 12px;
    }
    
    @media (min-width: 768px) {
        .content-section h3 {
            font-size: 22px;
            margin-bottom: 16px;
        }
    }
    .content-section p {
        color: #374151;
        line-height: 1.7;
        margin-bottom: 16px;
    }
    .content-section ul {
        margin-bottom: 20px;
    }
    .content-section li {
        color: #374151;
        margin-bottom: 8px;
        line-height: 1.6;
    }
    .price-highlight {
        font-size: 24px;
        font-weight: 700;
        color: #4caf50;
    }
    
    @media (min-width: 768px) {
        .price-highlight {
            font-size: 32px;
        }
    }
    .scroll-to-top-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: #42a5f5;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        z-index: 1000;
    }
    .scroll-to-top-btn:hover {
        background: #1a237e;
        transform: translateY(-2px);
    }

    /* Custom styling for intl-tel-input to match our design */
    .iti {
        width: 100%;
    }

    .iti__country-list {
        border: 1px solid #d1d5db !important;
        border-radius: 0.5rem !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        max-height: 200px !important;
    }

    .iti__country {
        padding: 8px 12px !important;
        border-bottom: 1px solid #f3f4f6 !important;
    }

    .iti__country:last-child {
        border-bottom: none !important;
    }

    .iti__country:hover {
        background-color: #eff6ff !important;
    }

    .iti__country.iti__highlight {
        background-color: #dbeafe !important;
    }

    .iti__flag {
        border-radius: 2px !important;
    }

    .iti__selected-flag {
        border-right: 1px solid #d1d5db !important;
        background-color: #f9fafb !important;
        border-radius: 0.5rem 0 0 0.5rem !important;
    }

    .iti__selected-flag:hover {
        background-color: #f3f4f6 !important;
    }

    .iti__arrow {
        border-top-color: #6b7280 !important;
    }

    .iti__search-input {
        border: 1px solid #d1d5db !important;
        border-radius: 0.375rem !important;
        padding: 8px 12px !important;
        font-size: 14px !important;
    }

    .iti__search-input:focus {
        border-color: #6b7280 !important;
        box-shadow: 0 0 0 1px #6b7280 !important;
        outline: none !important;
    }

    .iti__search-input:focus-visible {
        border-color: #4caf50 !important;
        box-shadow: 0 0 0 1px #4caf50 !important;
        outline: none !important;
    }

    /* General form input focus styling */
    input:focus, textarea:focus {
        border-color: #6b7280 !important;
        box-shadow: 0 0 0 1px #6b7280 !important;
        outline: none !important;
    }

    /* Focus-visible styling with green color */
    input:focus-visible, textarea:focus-visible {
        border-color: #4caf50 !important;
        box-shadow: 0 0 0 1px #4caf50 !important;
        outline: none !important;
    }

    /* Input field styling */
    #mobile {
        border-left: none !important;
        border-radius: 0 0.5rem 0.5rem 0 !important;
    }

    #mobile:focus {
        border-color: #6b7280 !important;
        box-shadow: 0 0 0 1px #6b7280 !important;
        outline: none !important;
    }

    #mobile:focus-visible {
        border-color: #4caf50 !important;
        box-shadow: 0 0 0 1px #4caf50 !important;
        outline: none !important;
    }
</style>
@endsection

@section('content')
<div class="min-h-screen bg-white">
    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-6 md:py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:p-6 md:gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Page Title -->
                <div class="mb-6 md:mb-8">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold Asktrix-blue mb-6 leading-tight">
                        LLP Compliance Guide (Accounting, Auditing & Mandatory Filings)
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Limited Liability Partnerships (LLPs) are a popular business structure in India that combines the benefits of partnerships and companies. Compliance is essential for LLPs to maintain legal standing and avoid penalties. Asktrix provides comprehensive support for all LLP compliance requirements, ensuring your business meets all regulatory obligations efficiently and accurately.
                    </p>
                </div>

                <!-- Governing Acts and Rules -->
                <div class="content-section">
                    <h2>Governing Acts and Rules</h2>
                    <p>LLPs must comply with various acts and regulations:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>LLP Act, 2008:</strong> Primary legislation governing LLP operations</li>
                        <li><strong>LLP Rules, 2009:</strong> Detailed rules and procedures for LLP compliance</li>
                        <li><strong>Income Tax Act, 1961:</strong> Tax compliance and filing requirements</li>
                        <li><strong>GST Act, 2017:</strong> Goods and Services Tax compliance</li>
                    </ul>
                </div>

                <!-- Mandatory Compliance Requirements -->
                <div class="content-section">
                    <h2>Mandatory Compliance Requirements for LLPs</h2>
                    
                    <!-- Annual Compliance Requirements -->
                    <div class="mb-6 md:mb-8">
                        <h3>Annual Compliance Requirements</h3>
                        
                        <!-- Financial Statements Preparation -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Financial Statements Preparation</h4>
                            <p>LLPs must prepare annual financial records for transparency and MCA compliance:</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li>Balance Sheet</li>
                                <li>Profit and Loss Account</li>
                            </ul>
                        </div>

                        <!-- Filing of Annual Return -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Filing of Annual Return (Form 11)</h4>
                            <p>Annual return must be filed by May 30 for the April-March financial year, containing details about partner changes and other statutory information.</p>
                        </div>

                        <!-- Statement of Account & Solvency -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Statement of Account & Solvency (Form 8)</h4>
                            <p>LLPs must file financial statements and solvency declaration by October 30. Asktrix offers comprehensive filing support to ensure timely compliance.</p>
                        </div>

                        <!-- Income Tax Returns -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Income Tax Returns (ITR)</h4>
                            <p>LLPs must file ITR-5 by July 31 (unaudited) or October 31 (audited). Audit is mandatory for turnover over ₹40 lakh or professional receipts over ₹50 lakh under Section 44AB.</p>
                        </div>

                        <!-- GST Compliance -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Goods and Services Tax (GST) Compliance</h4>
                            <p>Registered LLPs must file monthly or quarterly GST returns (GSTR-1, GSTR-3B). Asktrix handles all GST filings and ITC claims efficiently.</p>
                        </div>
                    </div>

                    <!-- Event-Based Compliance -->
                    <div class="mb-6 md:mb-8">
                        <h3>Event-Based Compliance</h3>
                        
                        <!-- Changes in Partners -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Changes in Partners (Form 4)</h4>
                            <p>Any appointment or resignation of partners must be filed within 30 days using Form 4. Asktrix provides expert assistance for all partner change filings.</p>
                        </div>

                        <!-- Change of LLP Agreement -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Change of LLP Agreement (Form 3)</h4>
                            <p>Modifications to the LLP Agreement require filing Form 3 to update MCA on business operations, profit-sharing, and responsibilities.</p>
                        </div>

                        <!-- Contribution or Capital Changes -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Contribution or Capital Changes</h4>
                            <p>Any changes in partner contributions or capital require filing Form 3 and Form 4 with proper documentation.</p>
                        </div>

                        <!-- Address Change -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Address Change (Form 15)</h4>
                            <p>Registered office address changes must be filed within 30 days using Form 15 to maintain accurate MCA records.</p>
                        </div>
                    </div>

                    <!-- Financial Records to Maintain -->
                    <div class="mb-6 md:mb-8">
                        <h3>Financial Records to Maintain for LLPs</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>Books of Accounts:</strong> Detailed records of sales, purchases, assets, and liabilities</li>
                            <li><strong>Minute Books:</strong> Not mandatory but beneficial for transparency and governance</li>
                            <li><strong>Partner Contribution Register:</strong> Detailed records of capital contributions from each partner</li>
                            <li><strong>Employee Records (if applicable):</strong> Payroll and employee records for compliance</li>
                        </ul>
                    </div>

                    <!-- Audit Requirements -->
                    <div class="mb-6 md:mb-8">
                        <h3>Audit Requirements for LLPs</h3>
                        
                        <!-- Annual Audit Requirement -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Annual Audit Requirement</h4>
                            <p>Audit by a Chartered Accountant is mandatory if turnover exceeds ₹40 lakh or capital exceeds ₹25 lakh.</p>
                        </div>

                        <!-- Tax Audit Requirement -->
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold Asktrix-blue mb-3">Tax Audit Requirement</h4>
                            <p>Tax audit under Section 44AB is mandatory if turnover exceeds ₹1 crore or professional receipts exceed ₹50 lakh.</p>
                        </div>
                    </div>

                    <!-- Timelines and Penalties -->
                    <div class="mb-6 md:mb-8">
                        <h3>Timelines and Penalties</h3>
                        <div class="bg-gray-50 p-4 md:p-6 rounded-lg">
                            <h4 class="font-semibold mb-3 md:mb-4">Key Deadlines and Penalties:</h4>
                            <ul class="space-y-2">
                                <li><strong>Form 11 (Annual Return):</strong> Due by May 30 - Late fees ₹100 per day</li>
                                <li><strong>Form 8 (Statement of Account & Solvency):</strong> Due by October 30 - Late fees ₹100 per day</li>
                                <li><strong>ITR Filing:</strong> July 31 (unaudited) or October 31 (audited) - Interest and penalties apply</li>
                            </ul>
                            <p class="mt-4 text-sm text-gray-600">Timely compliance is crucial to avoid penalties. Asktrix provides proactive support to ensure all deadlines are met.</p>
                        </div>
                    </div>

                    <!-- Benefits of Compliance -->
                    <div class="mb-6 md:mb-8">
                        <h3>Benefits of Compliance with Asktrix's Expertise</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>Compliance Monitoring:</strong> Avoid costly penalties through timely filing</li>
                            <li><strong>Expert Guidance:</strong> Minimize legal and financial risks with professional support</li>
                            <li><strong>Transparency for Partners:</strong> Provide clarity and confidence in business operations</li>
                            <li><strong>Peace of Mind:</strong> Focus on business growth while we handle compliance</li>
                        </ul>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about LLP compliance, eligibility, documents, process, benefits, costs, and timelines.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is annual compliance mandatory for all LLPs?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Yes, all LLPs must file annual returns and a statement of account & solvency, regardless of turnover.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if an LLP fails to file Form 11?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late filing of Form 11 attracts a penalty of ₹100 per day until the form is filed. Continued non-compliance may result in additional penalties.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Does an LLP need to maintain financial records?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, LLPs must maintain proper books of accounts, partner contribution registers, and other financial records as per LLP Act requirements.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">When is an LLP audit mandatory?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Audit is mandatory if turnover exceeds ₹40 lakh or capital exceeds ₹25 lakh. Tax audit is required if turnover exceeds ₹1 crore or professional receipts exceed ₹50 lakh.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the deadlines for LLP compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Form 11 is due by May 30, Form 8 by October 30, ITR by July 31 (unaudited) or October 31 (audited), and partner changes within 30 days.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How to change LLP partners?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Partner changes require filing Form 4 within 30 days of appointment or resignation, along with necessary resolutions and documentation.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is Form 8 for LLPs?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Form 8 is the Statement of Account & Solvency that must be filed annually by October 30, containing financial statements and solvency declaration.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Are GST returns mandatory for LLPs?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, LLPs with turnover above ₹20 lakhs must register for GST and file monthly returns (GSTR-1, GSTR-3B) and annual return (GSTR-9).</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How to change LLP registered office?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Registered office address change requires filing Form 15 within 30 days of the change, along with necessary resolutions and documentation.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the penalties for late filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late filing penalties include ₹100 per day for Form 11 and Form 8, plus additional fees. GST late filing attracts ₹200 per day penalty.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 11 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Does Asktrix help with LLP compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Asktrix provides comprehensive LLP compliance services including annual filings, partner changes, GST compliance, and audit support.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 12 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are needed for LLP compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include financial statements, partner details, bank statements, GST returns, and other relevant business documents.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 13 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can LLP agreement be modified?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, LLP agreement modifications require filing Form 3 to update MCA records about business operations, profit-sharing, and responsibilities.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 14 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the cost of LLP compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Compliance costs vary based on turnover and complexity. Asktrix offers competitive pricing starting from ₹10,899 for comprehensive LLP compliance services.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 15 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does Asktrix ensure timely compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides proactive compliance monitoring, automated reminders, expert guidance, and systematic tracking to ensure all LLP deadlines are met efficiently.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Asktrix provides tailored compliance solutions for LLPs, helping you stay ahead of statutory requirements with minimal effort.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Form -->
            <div class="lg:col-span-1">
                <div class="form-sidebar p-4 md:p-6">
                    <h3 class="text-xl font-bold Asktrix-blue mb-3 md:mb-4">Clear your doubts</h3>
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm text-gray-600">Price Starts Onwards</span>
                        <div class="price-highlight">₹10,899 INR</div>
                    </div>
                    
                    <!-- AJAX Message Container -->
                    <div id="ajaxMessage" class="hidden mb-6"></div>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-3 md:px-4 py-2 md:py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-3 md:px-4 py-2 md:py-3 rounded mb-6">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-3 md:px-4 py-2 md:py-3 rounded mb-6">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-3 md:space-y-4">
                        @csrf
                        <div>
                            <input type="hidden" 
                                   id="service_type" 
                                   name="service_type" 
                                   value="llp-annual-filing">
                        </div>
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required
                                   value="{{ old('name') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('name') border-red-500 @enderror"
                                   placeholder="Enter your name">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   value="{{ old('email') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('email') border-red-500 @enderror"
                                   placeholder="Enter your email">
                        </div>
                        
                        <div>
                            <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Mobile</label>
                            <input type="tel" 
                                   id="mobile" 
                                   name="mobile" 
                                   required
                                   value="{{ old('mobile') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('mobile') border-red-500 @enderror"
                                   placeholder="Enter your mobile number">
                        </div>
                        
                        <div>
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">Tell us more about your Query</label>
                            <textarea id="query" 
                                      name="query" 
                                      rows="3" 
                                      required
                                      class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('query') border-red-500 @enderror"
                                      placeholder="Describe your requirements...">{{ old('query') }}</textarea>
                        </div>
                        
                        <button type="submit" 
                                id="submitBtn"
                                class="w-full bg-Asktrix-green hover:bg-green-600 text-white font-semibold py-2 md:py-3 px-4 md:px-6 rounded-lg transition-colors">
                            <span id="submitText">Pay Now</span>
                            <span id="loadingText" class="hidden">
                                <i class="fas fa-spinner fa-spin mr-2"></i>Submitting...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll to Top Button -->
<button class="scroll-to-top-btn" onclick="scrollToTop()" style="display: none;">
    <i class="fas fa-chevron-up"></i>
</button>
@endsection

@section('scripts')
<!-- intl-tel-input JS -->
<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize intl-tel-input on mobile input
        const input = document.querySelector("#mobile");
        const iti = window.intlTelInput(input, {
            initialCountry: "in", // Default to India
            preferredCountries: ['in', 'us', 'gb', 'ca', 'au', 'de', 'fr', 'jp', 'cn', 'br'],
            onlyCountries: ['in', 'us', 'gb', 'ca', 'au', 'de', 'fr', 'jp', 'cn', 'br', 'ru', 'it', 'es', 'nl', 'se', 'no', 'dk', 'fi', 'ch', 'at', 'be', 'pl', 'cz', 'hu', 'pt', 'gr', 'tr', 'il', 'za', 'eg', 'ng', 'ke', 'ma', 'tn', 'ae', 'sa', 'qa', 'kw', 'bh', 'om', 'jo', 'lb', 'sg', 'my', 'th', 'vn', 'id', 'ph', 'kr', 'tw', 'hk', 'mo', 'nz', 'zw', 'gh', 'et', 'ug', 'tz', 'mx', 'ar', 'cl', 'co', 'pe', 've', 'ec', 'bo', 'py', 'uy'],
            autoHideDialCode: false,
            nationalMode: false,
            separateDialCode: true,
            utilsScript: "https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/utils.js"
        });

        // AJAX Form Submission
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            // Validate phone number first
            if (input.value.trim()) {
                if (!iti.isValidNumber()) {
                    showMessage('Please enter a valid phone number', 'error');
                    return false;
                }
                
                // Get country data and separate mobile number from country code
                const countryData = iti.getSelectedCountryData();
                const fullNumber = iti.getNumber();
                const mobileNumber = iti.getNumber().replace('+' + countryData.dialCode, '');
                
                // Add/update country code
                if (!$('input[name="country_code"]').length) {
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'country_code',
                        value: '+' + countryData.dialCode
                    }).appendTo(this);
                } else {
                    $('input[name="country_code"]').val('+' + countryData.dialCode);
                }
                
                // Update mobile input with only the mobile number (without country code)
                $('#mobile').val(mobileNumber);
            }
            
            // Show loading state
            showLoading(true);
            
            // Get form data
            const formData = new FormData(this);
            
            // Submit via AJAX
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    showLoading(false);
                    if (response.success) {
                        showMessage(response.message, 'success');
                        $('#contactForm')[0].reset();
                        // Reset phone input
                        iti.setNumber('');
                    } else {
                        showMessage(response.message, 'error');
                    }
                },
                error: function(xhr) {
                    showLoading(false);
                    if (xhr.status === 422) {
                        // Validation errors
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = 'Please correct the following errors:\n';
                        for (let field in errors) {
                            errorMessage += errors[field][0] + '\n';
                        }
                        showMessage(errorMessage, 'error');
                    } else {
                        showMessage('Sorry, there was an error submitting your request. Please try again later.', 'error');
                    }
                }
            });
        });

        // Handle country change
        input.addEventListener('countrychange', function() {
            const countryData = iti.getSelectedCountryData();
            console.log('Country changed to:', countryData.name, '+' + countryData.dialCode);
        });

        // Handle input validation
        input.addEventListener('blur', function() {
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    input.classList.remove('error');
                } else {
                    input.classList.add('error');
                }
            }
        });

        // Helper functions
        function showLoading(show) {
            if (show) {
                $('#submitBtn').prop('disabled', true);
                $('#submitText').addClass('hidden');
                $('#loadingText').removeClass('hidden');
            } else {
                $('#submitBtn').prop('disabled', false);
                $('#submitText').removeClass('hidden');
                $('#loadingText').addClass('hidden');
            }
        }

        function showMessage(message, type) {
            const messageDiv = $('#ajaxMessage');
            messageDiv.removeClass('hidden bg-green-100 border-green-400 text-green-700 bg-red-100 border-red-400 text-red-700');
            
            if (type === 'success') {
                messageDiv.addClass('bg-green-100 border border-green-400 text-green-700 px-3 md:px-4 py-2 md:py-3 rounded');
            } else {
                messageDiv.addClass('bg-red-100 border border-red-400 text-red-700 px-3 md:px-4 py-2 md:py-3 rounded');
            }
            
            messageDiv.html(message);
            
            // Auto-hide success messages after 5 seconds
            if (type === 'success') {
                setTimeout(function() {
                    messageDiv.addClass('hidden');
                }, 5000);
            }
        }
    });

    function toggleFAQ(element) {
        const answer = element.nextElementSibling;
        const icon = element.querySelector('.faq-icon');
        
        // Close all other FAQ items
        document.querySelectorAll('.faq-answer').forEach(item => {
            if (item !== answer) {
                item.classList.remove('active');
            }
        });
        
        document.querySelectorAll('.faq-icon').forEach(item => {
            if (item !== icon) {
                item.classList.remove('rotated');
            }
        });
        
        // Toggle current FAQ item
        answer.classList.toggle('active');
        icon.classList.toggle('rotated');
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Show/hide scroll to top button
    window.addEventListener('scroll', function() {
        const scrollBtn = document.querySelector('.scroll-to-top-btn');
        if (window.pageYOffset > 300) {
            scrollBtn.style.display = 'flex';
        } else {
            scrollBtn.style.display = 'none';
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endsection
