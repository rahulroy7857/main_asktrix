@extends('layouts.app')

@section('title', 'Guide to Income Tax Return (ITR) Filing - Asktrix')

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
    .content-section h4 {
        color: #1a237e;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 12px;
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
    .itr-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .itr-table th {
        background: #1a237e;
        color: white;
        padding: 12px;
        text-align: left;
        font-weight: 600;
    }
    .itr-table td {
        padding: 12px;
        border-bottom: 1px solid #e5e7eb;
    }
    .itr-table tr:hover {
        background: #f9fafb;
    }
    
    /* Ensure mobile input is full width */
    #mobile {
        width: 100% !important;
        min-width: 100% !important;
    }
    
    /* Override intl-tel-input width constraints */
    .iti {
        width: 100% !important;
    }
    
    .iti__selected-flag {
        width: auto !important;
    }
    
    .iti input {
        width: 100% !important;
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
                        Guide to Income Tax Return (ITR) Filing
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        An Income Tax Return (ITR) is a form used to file information about your income and taxes to the Income Tax Department of India. It is mandatory for individuals and entities whose income exceeds the basic exemption limit to file their ITR annually.
                    </p>
                </div>

                <!-- Governing Act and Rules -->
                <div class="content-section">
                    <h2>Governing Act and Rules</h2>
                    <p>Income Tax Return filing is governed by the following acts and rules:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Income Tax Act, 1961:</strong> Primary legislation governing income tax in India</li>
                        <li><strong>Income Tax Rules, 1962:</strong> Detailed procedures for return filing and compliance</li>
                        <li><strong>Finance Act:</strong> Annual amendments to tax rates and provisions</li>
                    </ul>
                </div>

                <!-- Types of ITR Forms -->
                <div class="content-section">
                    <h2>Types of ITR Forms</h2>
                    <div class="overflow-x-auto">
                        <table class="itr-table">
                            <thead>
                                <tr>
                                    <th>ITR Form</th>
                                    <th>Applicable For</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>ITR-1 (Sahaj)</strong></td>
                                    <td>Individuals</td>
                                    <td>For individuals with income up to ₹50 lakh from salary, house property, other sources</td>
                                </tr>
                                <tr>
                                    <td><strong>ITR-2</strong></td>
                                    <td>Individuals and HUFs</td>
                                    <td>For individuals and HUFs not having business or professional income</td>
                                </tr>
                                <tr>
                                    <td><strong>ITR-3</strong></td>
                                    <td>Individuals and HUFs</td>
                                    <td>For individuals and HUFs having income from business or profession</td>
                                </tr>
                                <tr>
                                    <td><strong>ITR-4 (Sugam)</strong></td>
                                    <td>Individuals, HUFs, and Firms</td>
                                    <td>For individuals, HUFs, and Firms under presumptive taxation scheme</td>
                                </tr>
                                <tr>
                                    <td><strong>ITR-5</strong></td>
                                    <td>Firms, LLPs, AOPs, BOIs</td>
                                    <td>For firms, LLPs, AOPs, BOIs, and other entities</td>
                                </tr>
                                <tr>
                                    <td><strong>ITR-6</strong></td>
                                    <td>Companies</td>
                                    <td>For companies other than those claiming exemption under section 11</td>
                                </tr>
                                <tr>
                                    <td><strong>ITR-7</strong></td>
                                    <td>Persons and Companies</td>
                                    <td>For persons including companies required to furnish return under sections 139(4A), 139(4B), 139(4C), 139(4D), 139(4E), or 139(4F)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Who Must File an Income Tax Return -->
                <div class="content-section">
                    <h2>Who Must File an Income Tax Return?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Individuals:</strong> Total income exceeds ₹2.5 lakh (₹3 lakh for senior citizens, ₹5 lakh for super senior citizens)</li>
                        <li><strong>Companies:</strong> All companies regardless of income or loss</li>
                        <li><strong>Capital Gains:</strong> Individuals with capital gains exceeding ₹2.5 lakh</li>
                        <li><strong>Foreign Assets:</strong> Individuals with foreign assets or income</li>
                        <li><strong>High-Value Transactions:</strong> Individuals with high-value transactions (deposits, investments, etc.)</li>
                        <li><strong>Refund Claims:</strong> Individuals claiming tax refunds</li>
                    </ul>
                </div>

                <!-- Who is Exempt from Filing ITR -->
                <div class="content-section">
                    <h2>Who is Exempt from Filing ITR?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Low Income:</strong> Individuals with total income below ₹2.5 lakh (₹3 lakh for senior citizens)</li>
                        <li><strong>Senior Citizens:</strong> Individuals above 60 years with income below ₹3 lakh</li>
                        <li><strong>Super Senior Citizens:</strong> Individuals above 80 years with income below ₹5 lakh</li>
                        <li><strong>Agricultural Income:</strong> Individuals with only agricultural income below exemption limit</li>
                    </ul>
                </div>

                <!-- Step by Step Process for Income Tax Return Filing -->
                <div class="content-section">
                    <h2>Step by Step Process for Income Tax Return Filing</h2>
                    <p>Our streamlined process ensures quick and hassle-free ITR filing:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Gather Required Documents</h3>
                                <p class="text-gray-600">Collect all necessary documents including Form 16, bank statements, investment proofs, and other income-related documents.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Log into the Income Tax Portal</h3>
                                <p class="text-gray-600">Access the official Income Tax e-filing portal (www.incometax.gov.in) using your PAN and password. Ensure you have valid credentials.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Select the Appropriate ITR Form</h3>
                                <p class="text-gray-600">Choose the correct ITR form based on your income sources and taxpayer category. Common forms include ITR-1, ITR-2, ITR-3, and ITR-4.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Fill Out the ITR Form</h3>
                                <p class="text-gray-600">Enter all required information including personal details, income from various sources, deductions, and tax calculations. Ensure accuracy in all entries.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Compute and Pay Tax Liability (If Any)</h3>
                                <p class="text-gray-600">Calculate your total tax liability and pay any outstanding tax using available payment methods. Ensure sufficient balance in your bank account.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">6</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Verify and Submit</h3>
                                <p class="text-gray-600">Review all information one final time, generate the return summary, and submit the return. Download the acknowledgment for your records.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Benefits of Timely ITR Filing -->
                <div class="content-section">
                    <h2>Benefits of Timely ITR Filing</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Avoid Penalties:</strong> Timely filing prevents late filing penalties and interest charges</li>
                        <li><strong>Carry Forward Losses:</strong> Allows carrying forward of losses to future years</li>
                        <li><strong>Loan Processing:</strong> ITR acknowledgment is required for loan applications</li>
                        <li><strong>Visa Applications:</strong> Required for visa applications to many countries</li>
                        <li><strong>Tax Refunds:</strong> Enables claiming of tax refunds if applicable</li>
                        <li><strong>Compliance Record:</strong> Maintains good compliance record with tax authorities</li>
                    </ul>
                </div>

                <!-- Income Tax Exemptions and Deductions -->
                <div class="content-section">
                    <h2>Income Tax Exemptions and Deductions</h2>
                    <p>Popular deduction options to reduce your tax liability:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Section 80C:</strong> Up to ₹1.5 lakh for investments in PPF, ELSS, NSC, etc.</li>
                        <li><strong>Section 80D:</strong> Up to ₹25,000 for health insurance premiums</li>
                        <li><strong>Section 80G:</strong> Donations to charitable organizations</li>
                        <li><strong>Section 80TTA:</strong> Up to ₹10,000 interest on savings account</li>
                        <li><strong>Section 24:</strong> Interest on home loan up to ₹2 lakh</li>
                    </ul>
                    <div class="bg-blue-50 p-4 rounded-lg mt-4">
                        <h4 class="font-semibold mb-2">Example Tax Savings:</h4>
                        <p>If you invest ₹1.5 lakh under Section 80C, you can save up to ₹46,800 in taxes (assuming 30% tax bracket).</p>
                    </div>
                </div>

                <!-- Due Dates for Filing ITR -->
                <div class="content-section">
                    <h2>Due Dates for Filing ITR</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Individuals:</strong> July 31st of the assessment year</li>
                        <li><strong>Companies:</strong> October 31st of the assessment year</li>
                        <li><strong>Audit Cases:</strong> October 31st of the assessment year</li>
                        <li><strong>Transfer Pricing Cases:</strong> November 30th of the assessment year</li>
                    </ul>
                </div>

                <!-- Penalties for Non-Compliance -->
                <div class="content-section">
                    <h2>Penalties for Non-Compliance</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Late Filing:</strong> ₹5,000 penalty for filing after due date (₹1,000 if income is below ₹5 lakh)</li>
                        <li><strong>Non-Filing:</strong> Up to ₹10,000 penalty for not filing ITR</li>
                        <li><strong>Incorrect Information:</strong> Penalty of 50% to 200% of tax evaded</li>
                        <li><strong>Interest:</strong> 1% per month on outstanding tax amount</li>
                    </ul>
                </div>

                <!-- Asktrix's Expert ITR Filing Services -->
                <div class="content-section">
                    <h2>Asktrix's Expert ITR Filing Services</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Accuracy:</strong> Expert review ensures error-free filing</li>
                        <li><strong>Compliance:</strong> Full compliance with latest tax laws</li>
                        <li><strong>Timely Submission:</strong> On-time filing to avoid penalties</li>
                        <li><strong>Maximum Deductions:</strong> Optimize your tax savings</li>
                        <li><strong>Document Management:</strong> Secure handling of all documents</li>
                        <li><strong>Expert Support:</strong> Professional guidance throughout the process</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about ITR filing, forms, eligibility, process, benefits, and compliance.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who needs to file an ITR?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Individuals with total income exceeding ₹2.5 lakh (₹3 lakh for senior citizens, ₹5 lakh for super senior citizens) must file ITR. Companies must file regardless of income.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Which ITR form is applicable to salaried individuals?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Salaried individuals with income up to ₹50 lakh and no business income should use ITR-1 (Sahaj). Those with capital gains or foreign income should use ITR-2.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the penalty for late ITR filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late filing attracts a penalty of ₹5,000 (₹1,000 if income is below ₹5 lakh). Additional interest at 1% per month is charged on outstanding tax.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can I revise my ITR after submission?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, you can revise your ITR within the assessment year or before completion of assessment, whichever is earlier, using the same ITR form.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are Sections 80C and 80D?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Section 80C allows deduction up to ₹1.5 lakh for investments in PPF, ELSS, NSC, etc. Section 80D allows deduction up to ₹25,000 for health insurance premiums.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does Asktrix assist in ITR filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides complete ITR filing services including form selection, data entry, tax calculation, deduction optimization, and timely submission with expert guidance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Ensuring smooth ITR filing with Asktrix provides not only compliance but also maximum tax savings and peace of mind. Our comprehensive approach ensures your tax returns are filed accurately and on time.
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
                        <div class="price-highlight">₹2,899 INR</div>
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
                                   value="income-tax-return-filing">
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
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">Tell us about your query</label>
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
