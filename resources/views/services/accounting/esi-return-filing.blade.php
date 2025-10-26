@extends('layouts.app')

@section('title', 'Guide to ESI Return Filing - Asktrix')

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


    /* Due dates table styling */
    .due-dates-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .due-dates-table th,
    .due-dates-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }
    .due-dates-table th {
        background: #1a237e;
        color: white;
        font-weight: 600;
    }
    .due-dates-table tr:hover {
        background: #f8f9fa;
    }

    /* Example calculation styling */
    .calculation-example {
        background: #f0f8ff;
        border: 2px solid #42a5f5;
        border-radius: 12px;
        padding: 25px;
        margin: 20px 0;
    }
    .calculation-example h4 {
        color: #1a237e;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .calculation-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid #e0e0e0;
    }
    .calculation-row:last-child {
        border-bottom: none;
        font-weight: bold;
        background: #e3f2fd;
        padding: 12px;
        border-radius: 6px;
        margin-top: 10px;
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
                        Guide to ESI Return Filing
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Employee State Insurance (ESI) is a social security scheme that provides medical and cash benefits to employees and their families. This comprehensive guide will help you understand ESI return filing requirements, processes, and compliance obligations for employers in India.
                    </p>
                </div>

                <!-- Governing Act and Rules -->
                <div class="content-section">
                    <h2>Governing Act and Rules</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Employee State Insurance Act, 1948:</strong> The primary legislation governing ESI scheme and its implementation</li>
                        <li><strong>Employee State Insurance (Central) Rules, 1950:</strong> Detailed rules and procedures for ESI compliance and return filing</li>
                    </ul>
                </div>

                <!-- Eligibility for ESI Registration and Filing -->
                <div class="content-section">
                    <h2>Eligibility for ESI Registration and Filing</h2>
                    
                    <h3>Employer Eligibility</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Companies with 10 or more employees (in some states, threshold is 20 employees)</li>
                        <li>Employees earning up to ₹21,000 per month are covered under ESI scheme</li>
                    </ul>

                    <h3>Employee Eligibility</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Employees with monthly wages up to ₹21,000 are eligible for ESI benefits</li>
                        <li>Both permanent and temporary employees are covered under the scheme</li>
                    </ul>
                </div>

                <!-- Contribution Rates for ESI -->
                <div class="content-section">
                    <h2>Contribution Rates for ESI</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Employer Contribution:</strong> 3.25% of employee wages</li>
                        <li><strong>Employee Contribution:</strong> 0.75% of employee wages</li>
                        <li><strong>Total ESI Contribution:</strong> 4% of employee wages</li>
                    </ul>
                    <p class="mt-4">Contributions must be deposited monthly, and quarterly returns must be filed with the ESIC (Employee State Insurance Corporation).</p>
                </div>

                <!-- Step-by-Step Process for ESI Return Filing -->
                <div class="content-section">
                    <h2>Step-by-Step Process for ESI Return Filing</h2>
                    <p>Our streamlined process ensures quick and hassle-free ESI return filing:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Register on the ESIC Portal</h3>
                                <p class="text-gray-600">Create an account on the ESIC portal (www.esic.nic.in) using your company registration details. Complete the employer registration process and obtain your ESIC registration number.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Maintain Accurate Payroll Records</h3>
                                <p class="text-gray-600">Keep detailed records of employee wages, attendance, and other relevant information. Ensure all employee data is updated and accurate for ESI calculation purposes.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Deposit ESI Contributions</h3>
                                <p class="text-gray-600">Calculate ESI contributions for each employee and deposit the total amount (employer + employee contributions) to the designated bank account before the due date.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Quarterly ESI Return Filing</h3>
                                <p class="text-gray-600">File quarterly returns (Form 6) on the ESIC portal within the prescribed time limit. Include details of all employees, their wages, and contributions made during the quarter.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Generate ESI Return Acknowledgment</h3>
                                <p class="text-gray-600">After successful filing, generate and save the acknowledgment receipt. This serves as proof of compliance and should be maintained for audit purposes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Due Dates for ESI Filing -->
                <div class="content-section">
                    <h2>Due Dates for ESI Filing</h2>
                    <table class="due-dates-table">
                        <thead>
                            <tr>
                                <th>Period</th>
                                <th>Filing Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>April - June</td>
                                <td>July 15</td>
                            </tr>
                            <tr>
                                <td>July - September</td>
                                <td>October 15</td>
                            </tr>
                            <tr>
                                <td>October - December</td>
                                <td>January 15</td>
                            </tr>
                            <tr>
                                <td>January - March</td>
                                <td>April 15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Benefits of Timely ESI Return Filing -->
                <div class="content-section">
                    <h2>Benefits of Timely ESI Return Filing</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Compliance with Legal Requirements:</strong> Avoid penalties and legal consequences by meeting filing deadlines</li>
                        <li><strong>Employee Benefits:</strong> Ensure employees receive medical and cash benefits without interruption</li>
                        <li><strong>Access to Claims and ESI Services:</strong> Maintain eligibility for ESI medical facilities and cash benefits</li>
                    </ul>
                </div>

                <!-- Penalties and Consequences for Non-Compliance -->
                <div class="content-section">
                    <h2>Penalties and Consequences for Non-Compliance</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Interest on Late Payment:</strong> 12% per annum on delayed ESI contributions</li>
                        <li><strong>Penalty for Late Filing:</strong> Additional charges for late submission of returns</li>
                        <li><strong>Employer Liability:</strong> Legal action and prosecution for willful non-compliance</li>
                    </ul>
                </div>

                <!-- Example of ESI Calculation and Filing -->
                <div class="content-section">
                    <h2>Example of ESI Calculation and Filing</h2>
                    <div class="calculation-example">
                        <h4>Example: Ms. Priya - Monthly Wage: ₹18,000</h4>
                        <div class="calculation-row">
                            <span>Employer's Contribution (3.25%)</span>
                            <span>₹585</span>
                        </div>
                        <div class="calculation-row">
                            <span>Employee's Contribution (0.75%)</span>
                            <span>₹135</span>
                        </div>
                        <div class="calculation-row">
                            <span>Total ESI Contribution</span>
                            <span>₹720</span>
                        </div>
                    </div>
                </div>

                <!-- Documents Required for ESI Return Filing -->
                <div class="content-section">
                    <h2>Documents Required for ESI Return Filing</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Challan Receipts:</strong> Proof of ESI contribution payments</li>
                        <li><strong>Employee IP Numbers:</strong> Individual employee identification numbers</li>
                        <li><strong>Monthly Payroll Records:</strong> Detailed wage and attendance records</li>
                        <li><strong>Form 6 Register:</strong> Quarterly return form with employee details</li>
                        <li><strong>Inspection Book:</strong> Record of ESIC inspections and compliance</li>
                    </ul>
                </div>

                <!-- Asktrix's ESI Filing Services -->
                <div class="content-section">
                    <h2>Asktrix's ESI Filing Services</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Hassle-Free Registration and Return Filing:</strong> Complete ESI registration and quarterly return filing services</li>
                        <li><strong>Timely Reminders and Compliance Updates:</strong> Automated reminders for due dates and regulatory changes</li>
                        <li><strong>Comprehensive Support for ESI Management:</strong> End-to-end ESI compliance management and expert guidance</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about ESI return filing, eligibility, process, benefits, penalties, and compliance requirements.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is ESI?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>ESI (Employee State Insurance) is a social security scheme that provides medical and cash benefits to employees and their families. It covers medical expenses, sickness benefits, maternity benefits, and other social security benefits.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who is eligible for ESI?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Employees earning up to ₹21,000 per month are eligible for ESI. Employers with 10 or more employees (20 in some states) must register for ESI and contribute to the scheme.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who contributes to the ESI scheme?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Both employers and employees contribute to ESI. Employers contribute 3.25% of employee wages, while employees contribute 0.75% of their wages, making a total contribution of 4%.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">When is the ESI contribution due?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>ESI contributions must be deposited monthly, typically by the 15th of the following month. Quarterly returns must be filed within 15 days of the quarter end.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is Form 6?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Form 6 is the quarterly return form that employers must file with ESIC. It contains details of all employees, their wages, contributions made, and other relevant information for the quarter.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if ESI returns are filed late?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late filing of ESI returns attracts penalties and interest charges. Employers may face legal action and prosecution for willful non-compliance with ESI regulations.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can proprietorships apply for ESI?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, proprietorship firms with 10 or more employees (20 in some states) must register for ESI and comply with all ESI requirements, including return filing and contribution payments.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How can Asktrix help with ESI compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides comprehensive ESI compliance services including registration, monthly contribution calculations, quarterly return filing, and ongoing compliance management with expert guidance and timely reminders.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the penalty for late ESI deposit?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late ESI deposits attract interest at 12% per annum. Additionally, there may be penalties for late filing of returns and other compliance violations.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is ESI compulsory for all employers?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>ESI is compulsory for employers with 10 or more employees (20 in some states) in establishments covered under the ESI Act. The threshold varies by state and type of establishment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            ESI return filing is essential for maintaining compliance and ensuring employee welfare. Asktrix provides expert guidance and comprehensive support to help you navigate ESI requirements efficiently and avoid penalties while ensuring your employees receive the benefits they deserve.
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
                                   value="esi-return-filing">
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
