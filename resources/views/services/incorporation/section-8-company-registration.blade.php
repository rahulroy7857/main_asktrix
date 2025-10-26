@extends('layouts.app')

@section('title', 'Section 8 Company Registration in India with Asktrix')

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
                        Section 8 Company Registration in India with Asktrix
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        A Section 8 Company is a non-profit organization established for promoting commerce, art, science, sports, education, research, social welfare, religion, charity, protection of environment, or any such other object. At Asktrix, we provide comprehensive Section 8 company registration services with expert guidance throughout the entire process.
                    </p>
                </div>

                <!-- What is Section 8 Company -->
                <div class="content-section">
                    <h2>What is a Section 8 Company?</h2>
                    <p>
                        A Section 8 Company is a company registered under Section 8 of the Companies Act, 2013, with the primary objective of promoting charitable activities rather than earning profits. These companies are ideal for NGOs, charitable trusts, educational institutions, and other non-profit organizations that want to operate with limited liability protection.
                    </p>
                </div>

                <!-- Why Choose Asktrix -->
                <div class="content-section">
                    <h2>Why Choose Asktrix for Section 8 Company Registration?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Expert Guidance:</strong> Our experienced team provides comprehensive guidance throughout the registration process</li>
                        <li><strong>Dedicated Support:</strong> Personalized support tailored to your non-profit organization's needs</li>
                        <li><strong>Affordable Services:</strong> Competitive pricing with transparent fee structure</li>
                        <li><strong>Regulatory Compliance:</strong> Ensure full compliance with all legal requirements and regulations</li>
                    </ul>
                </div>

                <!-- Key Features -->
                <div class="content-section">
                    <h2>Key Features of a Section 8 Company</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Non-Profit Objectives:</strong> Established solely for charitable purposes without profit motive</li>
                        <li><strong>Limited Liability:</strong> Members' liability is limited to the amount they guarantee to contribute</li>
                        <li><strong>No Minimum Capital:</strong> No minimum capital requirement for registration</li>
                        <li><strong>No Profit Distribution:</strong> Profits must be used for promoting the company's objectives</li>
                        <li><strong>Tax Exemptions:</strong> Eligible for various tax exemptions under Income Tax Act</li>
                        <li><strong>Grants and Funding Opportunities:</strong> Access to government grants and funding programs</li>
                    </ul>
                </div>

                <!-- Types of Section 8 Companies -->
                <div class="content-section">
                    <h2>Types of Section 8 Companies</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Charitable Section 8 Companies:</strong> Focused on charitable activities and social welfare</li>
                        <li><strong>Educational Section 8 Companies:</strong> Established for promoting education and research</li>
                        <li><strong>Environmental Section 8 Companies:</strong> Dedicated to environmental protection and conservation</li>
                        <li><strong>Sports and Cultural Section 8 Companies:</strong> Promoting sports, arts, and cultural activities</li>
                    </ul>
                </div>

                <!-- Documents Required -->
                <div class="content-section">
                    <h2>Documents Required for Section 8 Company Registration</h2>
                    <p>The following documents are essential for Section 8 company registration:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Identity Proof:</strong> PAN card, Aadhaar card, or passport of all directors</li>
                        <li><strong>Address Proof:</strong> Utility bills, bank statements, or rental agreements</li>
                        <li><strong>Director Identification Number (DIN):</strong> Unique identification number for each director</li>
                        <li><strong>Digital Signature Certificate (DSC):</strong> Required for online filing of documents</li>
                        <li><strong>Memorandum of Association (MOA):</strong> Defining the company's objectives and scope</li>
                        <li><strong>Board Resolution:</strong> Resolution for incorporation and appointment of directors</li>
                    </ul>
                </div>

                <!-- Eligibility Criteria -->
                <div class="content-section">
                    <h2>Eligibility Criteria for Registering a Section 8 Company</h2>
                    <p>To register a Section 8 company, the following criteria must be met:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Non-Profit Objectives:</strong> Company must be established for charitable purposes only</li>
                        <li><strong>Minimum Directors:</strong> At least 2 directors required (maximum 15)</li>
                        <li><strong>Indian Residents:</strong> At least one director must be a resident of India</li>
                        <li><strong>Other Conditions:</strong> Must comply with all provisions of Companies Act, 2013</li>
                    </ul>
                </div>

                <!-- Step-by-Step Process -->
                <div class="content-section">
                    <h2>Step-by-Step Registration Process with Asktrix</h2>
                    <p>Our streamlined process ensures quick and hassle-free Section 8 company registration:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-certificate text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 1: Obtain Digital Signature Certificate (DSC)</h3>
                                <p class="text-gray-600">Obtain DSC for all directors to enable online document signing and filing.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 2: Apply for Director Identification Number (DIN)</h3>
                                <p class="text-gray-600">Apply for DIN for all directors through Form DIR-3.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-tag text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 3: Name Reservation</h3>
                                <p class="text-gray-600">Submit company name for approval through RUN (Reserve Unique Name) service.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file-alt text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 4: Draft MOA and AOA</h3>
                                <p class="text-gray-600">Prepare Memorandum of Association and Articles of Association with charitable objectives.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-upload text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 5: File SPICe+ Form</h3>
                                <p class="text-gray-600">Submit SPICe+ form with all required documents and information.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-certificate text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 6: Certificate of Incorporation</h3>
                                <p class="text-gray-600">Receive Certificate of Incorporation and commence charitable activities.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-id-card text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 7: PAN and TAN Application</h3>
                                <p class="text-gray-600">Apply for Permanent Account Number (PAN) and Tax Deduction Account Number (TAN).</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-gift text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Step 8: Comply with Tax Exemptions</h3>
                                <p class="text-gray-600">Apply for tax exemptions under Section 12A and 80G of Income Tax Act.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rules and Regulations -->
                <div class="content-section">
                    <h2>Rules and Regulations for Section 8 Companies</h2>
                    <p>Section 8 companies must comply with various regulations under the Companies Act, 2013:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Non-Profit Declaration:</strong> Must declare that profits will be used for charitable purposes only</li>
                        <li><strong>Taxation and Exemptions:</strong> Eligible for tax exemptions under Income Tax Act</li>
                        <li><strong>Governance and Directors:</strong> Must maintain proper governance structure</li>
                        <li><strong>Filing Annual Returns:</strong> Regular filing of annual returns and financial statements</li>
                    </ul>
                </div>

                <!-- Compliance Requirements -->
                <div class="content-section">
                    <h2>Compliance Requirements After Registration</h2>
                    <p>Post-registration, Section 8 companies must fulfill various compliance obligations:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Annual General Meetings (AGM):</strong> Conduct AGM within 6 months of financial year end</li>
                        <li><strong>The Income Tax Act:</strong> Comply with tax exemption requirements under Section 12A and 80G</li>
                        <li><strong>Statutory Registers:</strong> Maintain proper statutory registers and records</li>
                        <li><strong>Annual Audit:</strong> Conduct annual audit of financial statements</li>
                        <li><strong>Charitable Activities:</strong> Ensure all activities align with charitable objectives</li>
                    </ul>
                </div>

                <!-- Benefits and Advantages -->
                <div class="content-section">
                    <h2>Benefits and Advantages of Section 8 Companies</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Tax Exemptions:</strong> Eligible for various tax exemptions under Income Tax Act</li>
                        <li><strong>Government Grants and Donations:</strong> Access to government funding and donations</li>
                        <li><strong>Limited Liability Protection:</strong> Members' liability is limited to their contribution</li>
                        <li><strong>Enhanced Credibility:</strong> Registered status provides credibility and trust</li>
                        <li><strong>Public Trust:</strong> Builds public trust and confidence in charitable activities</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about Section 8 company registration in India.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the main objective of a Section 8 Company?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>A Section 8 Company is established for promoting charitable activities such as commerce, art, science, sports, education, research, social welfare, religion, charity, or environmental protection, without any profit motive.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can a Section 8 Company distribute profits?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, Section 8 Companies cannot distribute profits to members. All profits must be used for promoting the company's charitable objectives and cannot be distributed as dividends.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the minimum number of directors required?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>A Section 8 Company requires a minimum of 2 directors and can have a maximum of 15 directors. At least one director must be a resident of India.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is there a minimum capital requirement?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, there is no minimum capital requirement for Section 8 Companies. They can be incorporated with any amount of capital as per their requirements.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What tax exemptions are available?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Section 8 Companies are eligible for tax exemptions under Section 12A and 80G of the Income Tax Act, subject to fulfillment of certain conditions and compliance requirements.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can foreign nationals be directors?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, foreign nationals can be directors in Section 8 Companies. However, at least one director must be a resident of India.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How long does registration take?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>With Asktrix, Section 8 company registration typically takes 10-20 working days, depending on document verification and government processing time.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are required for registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include identity proof, address proof, DIN, DSC, MOA, AOA, and board resolution. All documents must be properly attested and verified.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can Section 8 Companies receive foreign funding?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Section 8 Companies can receive foreign funding, but they must comply with Foreign Contribution Regulation Act (FCRA) requirements and obtain necessary approvals.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the ongoing compliance requirements?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Section 8 Companies must conduct AGMs, file annual returns, maintain statutory registers, conduct audits, and ensure all activities align with charitable objectives.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 11 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can Section 8 Companies change their objectives?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Section 8 Companies can change their objectives, but it requires approval from the Registrar of Companies and must still maintain charitable nature.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 12 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if a Section 8 Company makes profits?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Any profits made by Section 8 Companies must be used for promoting their charitable objectives and cannot be distributed to members or shareholders.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 13 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is audit mandatory for Section 8 Companies?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Section 8 Companies must conduct annual statutory audit of their financial statements and file audited accounts with the Registrar of Companies.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 14 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can Section 8 Companies engage in commercial activities?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Section 8 Companies can engage in commercial activities only if the profits are used for charitable purposes and the activities align with their charitable objectives.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 15 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the difference between Section 8 Company and Trust?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Section 8 Companies are incorporated under Companies Act with limited liability, while Trusts are governed by Indian Trusts Act. Section 8 Companies offer better governance structure and limited liability protection.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Starting your Section 8 Company with Asktrix provides not only legal registration but also ongoing support for compliance and growth. Explore a smooth path to charitable success and secure your organization's future with Asktrix's professional guidance and support. For new clients tax saving guidance will come at free of cost.
                            For more details fill the form and get the benefits
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
                        <div class="price-highlight">₹14,999 INR</div>
                        <span class="text-sm text-gray-600">All Inclusive</span>
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
                                   value="section-8-company-registration">
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
                            <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" 
                                   id="mobile" 
                                   name="mobile" 
                                   required
                                   value="{{ old('mobile') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('mobile') border-red-500 @enderror"
                                   placeholder="Enter your phone number">
                        </div>                       
                        
                        
                        <div>
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
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
                            <span id="submitText">Get a Call Back</span>
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
