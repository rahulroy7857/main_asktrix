@extends('layouts.app')

@section('title', 'Guide to Professional Tax Return Filing - Asktrix')

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
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .content-section h3 {
        color: #1a237e;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 16px;
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
        font-size: 32px;
        font-weight: 700;
        color: #4caf50;
    }
    .tax-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .tax-table th {
        background: #1a237e;
        color: white;
        padding: 12px;
        text-align: left;
        font-weight: 600;
    }
    .tax-table td {
        padding: 12px;
        border-bottom: 1px solid #e5e7eb;
    }
    .tax-table tr:nth-child(even) {
        background: #f9fafb;
    }
    .tax-table tr:hover {
        background: #f3f4f6;
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
                        Guide to Professional Tax Return Filing
                    </h1>
                    <button class="bg-Asktrix-green hover:bg-green-600 text-white font-semibold py-2 md:py-3 px-4 md:px-6 rounded-lg transition-colors mb-6">
                        Get Started
                    </button>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Professional tax is a state-level tax levied on professionals and salaried individuals in India. It is governed by respective state governments and varies from state to state. Asktrix provides comprehensive support for professional tax registration, filing, and compliance across all Indian states.
                    </p>
                </div>

                <!-- Governing Act & Legal Rules -->
                <div class="content-section">
                    <h2>Governing Act & Legal Rules</h2>
                    <p>Professional tax is governed by various state-specific acts and rules:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Maharashtra Professional Tax Act, 1975:</strong> Governs professional tax in Maharashtra</li>
                        <li><strong>Karnataka Tax on Professions, Trades, Callings and Employments Act, 1976:</strong> Applicable in Karnataka</li>
                        <li><strong>West Bengal State Tax on Professions, Trades, Callings and Employments Act, 1979:</strong> For West Bengal</li>
                        <li><strong>Andhra Pradesh Tax on Professions, Trades, Callings and Employments Act, 1987:</strong> Applicable in Andhra Pradesh</li>
                        <li><strong>Gujarat Professional Tax Act, 1976:</strong> Governs professional tax in Gujarat</li>
                    </ul>
                </div>

                <!-- Common Professional Tax Filing Errors -->
                <div class="content-section">
                    <h2>Common Professional Tax Filing Errors</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Late filing of returns and payment of tax</li>
                        <li>Incorrect calculation of tax amount based on salary slabs</li>
                        <li>Non-registration of new employees within prescribed time</li>
                        <li>Failure to deduct professional tax from employee salaries</li>
                        <li>Incomplete or incorrect information in returns</li>
                        <li>Missing deadlines for annual returns</li>
                    </ul>
                </div>

                <!-- Eligibility for Professional Tax Registration -->
                <div class="content-section">
                    <h2>Eligibility for Professional Tax Registration and Filing</h2>
                    <h3>For Employees:</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Salaried individuals earning above the exemption limit</li>
                        <li>Employees working in companies, firms, or organizations</li>
                        <li>Government employees (varies by state)</li>
                    </ul>
                    
                    <h3>For Professionals:</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Chartered Accountants, Lawyers, Doctors, Engineers</li>
                        <li>Consultants and freelancers</li>
                        <li>Business owners and traders</li>
                    </ul>
                    
                    <h3>For Employers:</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Companies with employees</li>
                        <li>Partnership firms</li>
                        <li>Proprietorship concerns</li>
                        <li>Any organization employing staff</li>
                    </ul>
                </div>

                <!-- Professional Tax Rules and Sample Calculation -->
                <div class="content-section">
                    <h2>Professional Tax Rules and Sample Calculation</h2>
                    <p>Professional tax is calculated based on monthly salary/wages. The tax amount varies according to different salary slabs defined by each state government. The tax is deducted monthly from the salary and paid to the state government.</p>
                </div>

                <!-- State-wise Professional Tax Slab Rates -->
                <div class="content-section">
                    <h2>State-wise Professional Tax Slab Rates</h2>
                    <p>Professional tax rates vary significantly across different states in India. Each state has its own slab structure and tax rates.</p>
                </div>

                <!-- Example Calculation in Maharashtra -->
                <div class="content-section">
                    <h2>Example Calculation in Maharashtra</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Salary up to ₹5,000:</strong> No tax</li>
                        <li><strong>Salary ₹5,001 - ₹10,000:</strong> ₹150 per month</li>
                        <li><strong>Salary ₹10,001 - ₹15,000:</strong> ₹175 per month</li>
                        <li><strong>Salary above ₹15,000:</strong> ₹200 per month</li>
                    </ul>
                </div>

                <!-- Step-by-Step Process for Tax Return Filing -->
                <div class="content-section">
                    <h2>Step-by-Step Process for Tax Return Filing</h2>
                    <p>Our streamlined process ensures quick and hassle-free professional tax return filing:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Register for Professional Tax</h3>
                                <p class="text-gray-600">Obtain professional tax registration certificate from the state commercial tax department. This is mandatory for employers and self-employed professionals.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Maintain Payroll and Income Records</h3>
                                <p class="text-gray-600">Keep detailed records of employee salaries, professional tax deductions, and payment schedules. Maintain proper documentation for audit purposes.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">File Professional Tax Returns</h3>
                                <p class="text-gray-600">Submit monthly/quarterly returns as per state requirements. Include details of employees, salary slabs, and tax calculations. File annual returns before the due date.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Payment of Professional Tax</h3>
                                <p class="text-gray-600">Make timely payment of professional tax to the state government. Ensure payment is made before the due date to avoid penalties and interest charges.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professional Tax State-wise Slab and Due Dates Table -->
                <div class="content-section">
                    <h2>Professional Tax State-wise Slab and Due Dates</h2>
                    <table class="tax-table">
                        <thead>
                            <tr>
                                <th>State</th>
                                <th>Periodicity</th>
                                <th>Slab</th>
                                <th>Amount to be Paid</th>
                                <th>Deadline for Registration/Return</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Andhra Pradesh</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Assam</td>
                                <td>Yearly</td>
                                <td>Above ₹10,000</td>
                                <td>₹2,500</td>
                                <td>31st December every year</td>
                            </tr>
                            <tr>
                                <td>Bihar</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>15th of every month</td>
                            </tr>
                            <tr>
                                <td>Chhattisgarh</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Gujarat</td>
                                <td>Monthly</td>
                                <td>Above ₹12,000</td>
                                <td>₹200</td>
                                <td>30th of every month</td>
                            </tr>
                            <tr>
                                <td>Haryana</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>15th of every month</td>
                            </tr>
                            <tr>
                                <td>Himachal Pradesh</td>
                                <td>Yearly</td>
                                <td>Above ₹5,000</td>
                                <td>₹1,000</td>
                                <td>31st March every year</td>
                            </tr>
                            <tr>
                                <td>Jharkhand</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Karnataka</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Kerala</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>15th of every month</td>
                            </tr>
                            <tr>
                                <td>Madhya Pradesh</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Maharashtra</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Meghalaya</td>
                                <td>Yearly</td>
                                <td>Above ₹5,000</td>
                                <td>₹1,000</td>
                                <td>31st March every year</td>
                            </tr>
                            <tr>
                                <td>Mizoram</td>
                                <td>Yearly</td>
                                <td>Above ₹5,000</td>
                                <td>₹1,000</td>
                                <td>31st March every year</td>
                            </tr>
                            <tr>
                                <td>Nagaland</td>
                                <td>Yearly</td>
                                <td>Above ₹5,000</td>
                                <td>₹1,000</td>
                                <td>31st March every year</td>
                            </tr>
                            <tr>
                                <td>Odisha</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Punjab</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>15th of every month</td>
                            </tr>
                            <tr>
                                <td>Rajasthan</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Tamil Nadu</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Telangana</td>
                                <td>Monthly</td>
                                <td>Above ₹15,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                            <tr>
                                <td>Uttar Pradesh</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>15th of every month</td>
                            </tr>
                            <tr>
                                <td>Uttarakhand</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>15th of every month</td>
                            </tr>
                            <tr>
                                <td>West Bengal</td>
                                <td>Monthly</td>
                                <td>Above ₹10,000</td>
                                <td>₹200</td>
                                <td>20th of every month</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Benefits of Professional Tax Compliance -->
                <div class="content-section">
                    <h2>Benefits of Professional Tax Compliance</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Avoid penalties and legal consequences</li>
                        <li>Maintain good standing with state authorities</li>
                        <li>Ensure smooth business operations</li>
                        <li>Build credibility with employees and stakeholders</li>
                        <li>Comply with statutory requirements</li>
                    </ul>
                </div>

                <!-- Penalties and Consequences -->
                <div class="content-section">
                    <h2>Penalties and Consequences for Non-Compliance</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Late filing penalty: ₹100-500 per month</li>
                        <li>Interest on delayed payment: 1-2% per month</li>
                        <li>Prosecution under state tax laws</li>
                        <li>Business license cancellation</li>
                        <li>Difficulty in obtaining government contracts</li>
                    </ul>
                </div>

                <!-- Example Calculation and Filing -->
                <div class="content-section">
                    <h2>Example of Professional Tax Calculation and Filing</h2>
                    <p><strong>Scenario:</strong> A company in Maharashtra with 50 employees earning ₹20,000 per month each.</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Professional tax per employee: ₹200 per month</li>
                        <li>Total monthly professional tax: ₹200 × 50 = ₹10,000</li>
                        <li>Annual professional tax: ₹10,000 × 12 = ₹1,20,000</li>
                        <li>Due date: 20th of every month</li>
                    </ul>
                </div>

                <!-- Documents Required -->
                <div class="content-section">
                    <h2>Documents Required for Professional Tax Return Filing</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Professional tax registration certificate</li>
                        <li>Employee salary details and PAN cards</li>
                        <li>Monthly payroll records</li>
                        <li>Bank payment challans</li>
                        <li>Previous year's returns (if applicable)</li>
                        <li>Audit reports (if required)</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about professional tax registration, filing, compliance, and state-specific requirements.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is professional tax?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Professional tax is a state-level tax levied on professionals and salaried individuals. It varies from state to state and is deducted monthly from salaries or paid annually by self-employed professionals.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Which states require professional tax?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Professional tax is applicable in states like Maharashtra, Karnataka, West Bengal, Andhra Pradesh, Tamil Nadu, Gujarat, and others. Not all states levy professional tax.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who needs to pay professional tax?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Salaried employees earning above the exemption limit, self-employed professionals, and employers are required to pay professional tax as per state regulations.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the maximum professional tax limit?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The maximum professional tax that can be levied is ₹2,500 per annum as per Article 276 of the Indian Constitution. However, rates vary by state.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How is professional tax calculated?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Professional tax is calculated based on monthly salary slabs defined by each state. The tax amount varies according to different income brackets.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the due dates for professional tax filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Due dates vary by state. Generally, monthly returns are due by 15th-20th of the following month, and annual returns by March 31st or December 31st depending on the state.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if I don't pay professional tax?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Non-payment attracts penalties, interest charges, and legal consequences. It can also affect business operations and compliance status.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can professional tax be claimed as deduction?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, professional tax paid can be claimed as a deduction under Section 16(iii) of the Income Tax Act while calculating taxable income.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is professional tax applicable to freelancers?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, freelancers and self-employed professionals are also liable to pay professional tax as per state regulations, usually on an annual basis.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does Asktrix help with professional tax compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides comprehensive professional tax services including registration, monthly/quarterly return filing, payment processing, compliance tracking, and expert guidance across all states.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Professional tax compliance is essential for maintaining legal standing and avoiding penalties. Asktrix ensures seamless compliance with state-specific requirements, providing expert guidance and timely filing services.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Form -->
            <div class="lg:col-span-1">
                <div class="form-sidebar p-4 md:p-6">
                    <h3 class="text-xl font-bold Asktrix-blue mb-3 md:mb-4">Clear your doubts</h3>
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm text-gray-600">Price from onwards</span>                        
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
                                   value="professional-tax-return-filing">
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
