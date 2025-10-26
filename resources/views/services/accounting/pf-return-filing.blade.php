@extends('layouts.app')

@section('title', 'Guide to Provident Fund (PF) Return Filing - Asktrix')

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


    /* Table styling */
    .compliance-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .compliance-table th {
        background: #1a237e;
        color: white;
        padding: 12px 16px;
        text-align: left;
        font-weight: 600;
    }
    .compliance-table td {
        padding: 12px 16px;
        border-bottom: 1px solid #e5e7eb;
    }
    .compliance-table tr:hover {
        background: #f8f9fa;
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
                        Guide to Provident Fund (PF) Return Filing
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Provident Fund (PF) is a mandatory social security scheme for employees in India, governed by the Employees' Provident Fund and Miscellaneous Provisions Act, 1952. This comprehensive guide covers PF registration, contribution rates, filing procedures, and compliance requirements to help employers and employees understand their obligations and benefits.
                    </p>
                </div>

                <!-- Governing Act and Rules -->
                <div class="content-section">
                    <h2>Governing Act and Rules</h2>
                    <p>PF compliance is governed by several key acts and schemes:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Employees' Provident Fund and Miscellaneous Provisions Act, 1952:</strong> Primary legislation governing PF</li>
                        <li><strong>Employees' Provident Fund Scheme, 1952:</strong> Detailed scheme for PF contributions</li>
                        <li><strong>Employees' Pension Scheme, 1995:</strong> Pension benefits for employees</li>
                        <li><strong>Employees' Deposit Linked Insurance Scheme, 1976:</strong> Insurance coverage</li>
                    </ul>
                </div>

                <!-- Eligibility for PF Registration and Filing -->
                <div class="content-section">
                    <h2>Eligibility for PF Registration and Filing</h2>
                    
                    <div class="mb-6">
                        <h3>Employer Eligibility</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Any establishment employing 20 or more employees</li>
                            <li>Mandatory registration with EPFO within 30 days of reaching 20 employees</li>
                            <li>Applies to all industries and sectors</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3>Employee Eligibility</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>All employees earning up to ₹15,000 per month (basic + DA)</li>
                            <li>Employees earning above ₹15,000 can voluntarily join PF</li>
                            <li>Applies to all employees regardless of designation</li>
                        </ul>
                    </div>
                </div>

                <!-- Contribution Rates for PF -->
                <div class="content-section">
                    <h2>Contribution Rates for PF</h2>
                    <div class="bg-gray-50 p-4 md:p-6 rounded-lg">
                        <h3 class="font-semibold mb-3 md:mb-4">Current Contribution Rates:</h3>
                        <ul class="space-y-2">
                            <li><strong>Employer Contribution:</strong> 12% of basic salary + DA</li>
                            <li><strong>Provident Fund:</strong> 3.67% of basic salary + DA</li>
                            <li><strong>Employee Pension Scheme (EPS):</strong> 8.33% of basic salary + DA</li>
                            <li><strong>Employee Contribution:</strong> 12% of basic salary + DA</li>
                        </ul>
                    </div>
                </div>

                <!-- Example Calculation of PF Contribution -->
                <div class="content-section">
                    <h2>Example Calculation of PF Contribution</h2>
                    <div class="bg-blue-50 p-4 md:p-6 rounded-lg">
                        <h3 class="font-semibold mb-3 md:mb-4">For an employee with basic salary of ₹12,000:</h3>
                        <ul class="space-y-2">
                            <li><strong>Employee PF Contribution:</strong> ₹12,000 × 12% = ₹1,440</li>
                            <li><strong>Employer PF Contribution:</strong> ₹12,000 × 3.67% = ₹440.40</li>
                            <li><strong>Employer EPS Contribution:</strong> ₹12,000 × 8.33% = ₹999.60</li>
                            <li><strong>Total PF Contribution:</strong> ₹1,440 + ₹440.40 = ₹1,880.40</li>
                        </ul>
                    </div>
                </div>

                <!-- Step-by-Step Process for PF Return Filing -->
                <div class="content-section">
                    <h2>Step-by-Step Process for PF Return Filing</h2>
                    <p>Our streamlined process ensures quick and hassle-free PF return filing:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Register on the EPFO Portal</h3>
                                <p class="text-gray-600">Complete employer registration with EPFO, obtain establishment code, and set up digital signature certificate for online filing.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Maintain Monthly Payroll Records</h3>
                                <p class="text-gray-600">Keep accurate records of employee salaries, PF contributions, and maintain proper documentation for each pay period.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Deposit PF Contributions</h3>
                                <p class="text-gray-600">Make monthly PF contributions to EPFO within 15 days of the following month using online banking or challan.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">File PF Returns</h3>
                                <p class="text-gray-600">File monthly PF returns (ECR) and annual returns online through the EPFO portal with accurate employee data.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Generate PF Return Acknowledgment</h3>
                                <p class="text-gray-600">Download and maintain acknowledgment receipts for all filed returns as proof of compliance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Due Dates for PF Filing -->
                <div class="content-section">
                    <h2>Due Dates for PF Filing</h2>
                    <table class="compliance-table">
                        <thead>
                            <tr>
                                <th>Filing Type</th>
                                <th>Period</th>
                                <th>Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">Monthly</td>
                                <td>ECR Filing</td>
                                <td>15th of following month</td>
                            </tr>
                            <tr>
                                <td>Contribution Payment</td>
                                <td>15th of following month</td>
                            </tr>
                            <tr>
                                <td>Annual</td>
                                <td>Annual Return</td>
                                <td>30th April</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Benefits of PF Return Filing -->
                <div class="content-section">
                    <h2>Benefits of PF Return Filing</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Compliance:</strong> Maintains legal compliance with EPFO regulations</li>
                        <li><strong>Employee Retirement Fund:</strong> Secures employee's financial future</li>
                        <li><strong>Employee Benefits:</strong> Provides pension and insurance benefits</li>
                        <li><strong>Tax Benefits:</strong> Employer contributions are tax-deductible</li>
                        <li><strong>Social Security:</strong> Ensures social security for employees</li>
                    </ul>
                </div>

                <!-- Penalties and Consequences for Non-Compliance -->
                <div class="content-section">
                    <h2>Penalties and Consequences for Non-Compliance</h2>
                    <div class="bg-red-50 p-4 md:p-6 rounded-lg">
                        <h3 class="font-semibold mb-3 md:mb-4 text-red-800">Consequences of Non-Compliance:</h3>
                        <ul class="space-y-2 text-red-700">
                            <li><strong>Interest on Late Payment:</strong> 12% per annum on delayed contributions</li>
                            <li><strong>Penalty Charges:</strong> ₹1,000 per month for delayed filing</li>
                            <li><strong>Legal Action:</strong> Prosecution under EPF Act with imprisonment up to 3 years</li>
                            <li><strong>Establishment Closure:</strong> EPFO can initiate closure proceedings</li>
                        </ul>
                    </div>
                </div>

                <!-- Example of PF Calculation and Filing -->
                <div class="content-section">
                    <h2>Example of PF Calculation and Filing</h2>
                    <div class="bg-green-50 p-4 md:p-6 rounded-lg">
                        <h3 class="font-semibold mb-3 md:mb-4">For an employee earning ₹10,000 basic salary:</h3>
                        <ul class="space-y-2">
                            <li><strong>Employee PF:</strong> ₹10,000 × 12% = ₹1,200</li>
                            <li><strong>Employer PF:</strong> ₹10,000 × 3.67% = ₹367</li>
                            <li><strong>Employer EPS:</strong> ₹10,000 × 8.33% = ₹833</li>
                            <li><strong>Forms Required:</strong> 12A, 5, 10, 2A, 3A, 6A</li>
                        </ul>
                    </div>
                </div>

                <!-- Documents Required for PF Return Filing -->
                <div class="content-section">
                    <h2>Documents Required for PF Return Filing</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Challan Receipts:</strong> Proof of PF contribution payments</li>
                        <li><strong>Employee UAN:</strong> Universal Account Numbers for all employees</li>
                        <li><strong>Payroll Records:</strong> Monthly salary and contribution records</li>
                        <li><strong>Form 12A:</strong> Monthly return of contributions</li>
                        <li><strong>Form 5:</strong> Return of ownership</li>
                        <li><strong>Form 10:</strong> Return of contributions</li>
                        <li><strong>Form 2A:</strong> Annual return of contributions</li>
                        <li><strong>Form 3A:</strong> Annual return of contributions</li>
                        <li><strong>Form 6A:</strong> Annual return of contributions</li>
                    </ul>
                </div>

                <!-- Asktrix's PF Filing Services -->
                <div class="content-section">
                    <h2>Asktrix's PF Filing Services</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Simplified PF Compliance:</strong> Complete PF registration and filing assistance</li>
                        <li><strong>Automated Reminders and Support:</strong> Never miss filing deadlines</li>
                        <li><strong>Full-Service PF Management:</strong> End-to-end PF compliance solutions</li>
                        <li><strong>Expert Guidance:</strong> Professional support for complex PF matters</li>
                        <li><strong>Document Management:</strong> Organized record-keeping and documentation</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about PF return filing, eligibility, contribution rates, process, benefits, penalties, and compliance requirements.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is PF return filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>PF return filing is the process of submitting monthly and annual returns to EPFO, including employee contribution details, employer contributions, and compliance with PF regulations.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who needs to register for PF?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Any establishment employing 20 or more employees must register with EPFO and comply with PF regulations within 30 days of reaching the threshold.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the due date for PF deposits?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>PF contributions must be deposited by the 15th of the following month. For example, January contributions are due by February 15th.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is PF mandatory for employees earning above ₹15,000?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>PF is mandatory for employees earning up to ₹15,000. Employees earning above ₹15,000 can voluntarily join PF if they wish.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What forms are required for PF return filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Key forms include Form 12A (monthly return), Form 5 (return of ownership), Form 10 (return of contributions), Form 2A, 3A, and 6A (annual returns).</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the penalty for late PF payments?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late payments attract 12% interest per annum, plus penalty charges of ₹1,000 per month for delayed filing, and potential legal action.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How do I assign UAN to an employee?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>UAN (Universal Account Number) is generated automatically by EPFO when an employee is registered. Employers must link UAN to employee records during filing.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Does Asktrix offer support for PF compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Asktrix provides comprehensive PF compliance services including registration, monthly filing, annual returns, and ongoing support for all PF-related matters.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can a director opt out of PF?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Directors who are employees and earn salary are covered under PF. However, directors who only receive sitting fees may be exempt from PF contributions.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How is PF calculated?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>PF is calculated as 12% of basic salary + DA for both employee and employer. Employer's 12% is split as 3.67% to PF and 8.33% to EPS.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 11 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can PF returns be filed online?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, PF returns can be filed online through the EPFO portal using digital signature certificates and proper authentication.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 12 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does PF withdrawal work?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>PF withdrawal is allowed for specific purposes like retirement, resignation, medical emergencies, or home purchase, subject to EPFO rules and conditions.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 13 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is PF applicable for contractual employees?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, PF is applicable to contractual employees if they are employed for more than 120 days in a year and meet the salary criteria.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 14 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the interest rates for PF contributions?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>EPFO declares interest rates annually. For FY 2023-24, the interest rate is 8.15% per annum, credited to employee PF accounts.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 15 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can PF contributions vary by state?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, PF contribution rates are uniform across India as per EPF Act. However, some states may have additional labor welfare schemes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Ensuring proper PF compliance with Asktrix provides not only legal adherence but also peace of mind for both employers and employees. Our comprehensive approach ensures your organization meets all EPFO requirements efficiently and accurately, while securing the financial future of your workforce.
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
                        <div class="price-highlight">₹4,899 INR</div>
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
                                   value="pf-return-filing">
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
