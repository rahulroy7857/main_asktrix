@extends('layouts.app')

@section('title', 'Guide to TDS Return Filing - Asktrix')

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
    .data-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .data-table th {
        background: #1a237e;
        color: white;
        padding: 12px 16px;
        text-align: left;
        font-weight: 600;
        font-size: 14px;
    }
    .data-table td {
        padding: 12px 16px;
        border-bottom: 1px solid #e5e7eb;
        font-size: 14px;
        color: #374151;
    }
    .data-table tr:hover {
        background: #f9fafb;
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
                        Guide to TDS Return Filing
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Tax Deducted at Source (TDS) is a critical tax mechanism in India that ensures tax collection at the source of income. Understanding TDS return filing is essential for businesses and individuals to maintain compliance and avoid penalties. Asktrix provides comprehensive TDS filing services to ensure seamless compliance.
                    </p>
                </div>

                <!-- Governing Act and Rules -->
                <div class="content-section">
                    <h2>Governing Acts and Rules</h2>
                    <p>TDS is governed by various acts and regulations:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Income Tax Act, 1961:</strong> Primary legislation governing TDS provisions</li>
                        <li><strong>Income Tax Rules, 1962:</strong> subordination rules for TDS implementation</li>
                        <li><strong>CBDT Notifications:</strong> Regular updates and amendments to TDS rates and procedures</li>
                        <li><strong>Finance Acts:</strong> Annual amendments to TDS provisions</li>
                    </ul>
                </div>

                <!-- Types of TDS Returns and Applicability -->
                <div class="content-section">
                    <h2>Types of TDS Returns and Applicability</h2>
                    <p>TDS returns are filed using different forms based on the nature of payments:</p>
                    
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Applicable Deductor</th>
                                <th>Purpose</th>
                                <th>Examples of Deduction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Form 24Q</strong></td>
                                <td>Employers deducting from salaries</td>
                                <td>Salary TDS</td>
                                <td>Monthly salary payments to employees</td>
                            </tr>
                            <tr>
                                <td><strong>Form 26Q</strong></td>
                                <td>Non-employer deducting</td>
                                <td>Non-salary TDS</td>
                                <td>Professional fees, rent, interest, commission</td>
                            </tr>
                            <tr>
                                <td><strong>Form 27Q</strong></td>
                                <td>Non-resident payments</td>
                                <td>Foreign payments</td>
                                <td>Payments to non-resident individuals/companies</td>
                            </tr>
                            <tr>
                                <td><strong>Form 27EQ</strong></td>
                                <td>TDS collectors</td>
                                <td>TCS reporting</td>
                                <td>Tax collected at source for specified goods</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Step-by-Step Process for TDS Return Filing -->
                <div class="content-section">
                    <h2>Step-by-Step Process for TDS Return Filing</h2>
                    <p>Our streamlined process ensures quick and hassle-free TDS return filing:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Gather Required Documents</h3>
                                <p class="text-gray-600">Collect all TDS-related documents including PAN cards of deductees, payment vouchers, TDS certificates received, and challans for tax deposited.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Use TDS Software or Utility</h3>
                                <p class="text-gray-600">Download and install the latest TDS software from the Income Tax Department website for preparing and validating returns.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Fill the Relevant TDS Form</h3>
                                <p class="text-gray-600">Choose the appropriate form (24Q, 26Q, 27Q, or 27EQ) and enter all required details including deductee particulars and payment information.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Validate and Generate Form</h3>
                                <p class="text-gray-600">Use the validation feature to check for errors and generate the validated form ready for upload to the Income Tax portal.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Submit TDS Return</h3>
                                <p class="text-gray-600">Upload the generated TDS return file on the Income Tax e-filing portal using digital signature or EVC authentication.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">6</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Generate TDS Certificates</h3>
                                <p class="text-gray-600">After successful filing, generate Form 16/16A TDS certificates for all deductees and provide them within prescribed timelines.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Due Dates for Filing TDS Returns -->
                <div class="content-section">
                    <h2>Due Dates for Filing TDS Returns</h2>
                    <p>TDS returns must be filed quarterly within prescribed deadlines:</p>
                    
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Quarter</th>
                                <th>Period</th>
                                <th>Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Q1</strong></td>
                                <td>April - June</td>
                                <td>July 31</td>
                            </tr>
                            <tr>
                                <td><strong>Q2</strong></td>
                                <td>July - September</td>
                                <td>October 31</td>
                            </tr>
                            <tr>
                                <td><strong>Q3</strong></td>
                                <td>October - December</td>
                                <td>January 31</td>
                            </tr>
                            <tr>
                                <td><strong>Q4</strong></td>
                                <td>January - March</td>
                                <td>May 31</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Benefits of Timely TDS Filing -->
                <div class="content-section">
                    <h2>Benefits of Timely TDS Filing</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Avoid Penalties:</strong> Prevents late filing fees and interest charges</li>
                        <li><strong>Better Compliance:</strong> Maintains good standing with tax authorities</li>
                        <li><strong>Deductee Satisfaction:</strong> Enables timely TDS credit for recipients</li>
                        <li><strong>Business Credibility:</strong> Demonstrates professional tax management</li>
                        <li><strong>Smooth Audits:</strong> Reduces scrutiny and audit risks</li>
                    </ul>
                </div>

                <!-- Common TDS Sections and Rates -->
                <div class="content-section">
                    <h2>Common TDS Sections and Rates</h2>
                    <p>Important TDS sections applicable to various payments:</p>
                    
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Section</th>
                                <th>Nature of Payment</th>
                                <th>TDS Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>192</strong></td>
                                <td>Salary</td>
                                <td>As per tax slabs</td>
                            </tr>
                            <tr>
                                <td><strong>194A</strong></td>
                                <td>Interest (other than securities)</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td><strong>194C</strong></td>
                                <td>Contract payments</td>
                                <td>1% (individual/HUF) / 2% (company)</td>
                            </tr>
                            <tr>
                                <td><strong>194H</strong></td>
                                <td>Commission/brokerage</td>
                                <td>5%</td>
                            </tr>
                            <tr>
                                <td><strong>194I</strong></td>
                                <td>Rent (land/building/machinery)</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td><strong>194J</strong></td>
                                <td>Professional services</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td><strong>194LA</strong></td>
                                <td>Payment for acquisition of immovable property</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td><strong>194M</strong></td>
                                <td>Contractor/sub-contractor payments</td>
                                <td>5%</td>
                            </tr>
                            <tr>
                                <td><strong>194N</strong></td>
                                <td>Cash withdrawal</td>
                                <td>2% / 5%</td>
                            </tr>
                            <tr>
                                <td><strong>194O</strong></td>
                                <td>E-commerce operators</td>
                                <td>1%</td>
                            </tr>
                            <tr>
                                <td><strong>194P</strong></td>
                                <td>TDS for senior citizens</td>
                                <td>As per tax slabs</td>
                            </tr>
                            <tr>
                                <td><strong>194Q</strong></td>
                                <td>Purchase of goods</td>
                                <td>0.1%</td>
                            </tr>
                            <tr>
                                <td><strong>194R</strong></td>
                                <td>Benefits/perquisites</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td><strong>194S</strong></td>
                                <td>Payment on transfer of virtual digital asset</td>
                                <td>1%</td>
                            </tr>
                            <tr>
                                <td><strong>206AB</strong></td>
                                <td>Higher TDS for non-filers</td>
                                <td>5% or twice</td>
                            </tr>
                            <tr>
                                <td><strong>206CCA</strong></td>
                                <td>Higher TCS for non-filers</td>
                                <td>Double the normal rate</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Penalties and Consequences -->
                <div class="content-section">
                    <h2>Penalties and Consequences for Non-Compliance</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Late Filing Fee:</strong> ₹200 per day for delayed filing (up to TDS amount)</li>
                        <li><strong>Interest on Delayed Payment:</strong> 1.5% per month on delayed TDS payment</li>
                        <li><strong>Penalty for Incorrect Returns:</strong> ₹10,000 per incorrect return</li>
                        <li><strong>Prosecution:</strong> Possible imprisonment for willful failures</li>
                        <li><strong>Deductee Issues:</strong> Recipients face TDS credit problems</li>
                    </ul>
                </div>

                <!-- Example -->
                <div class="content-section">
                    <h2>Example of TDS Calculation and Filing</h2>
                    <p><strong>Consider a company paying professional fees:</strong></p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Amount Paid:</strong> ₹50,000 to consultant</li>
                        <li><strong>TDS Rate:</strong> 10% under Section 194J</li>
                        <li><strong>TDS Deducted:</strong> ₹5,000</li>
                        <li><strong>Net Payment:</strong> ₹45,000</li>
                        <li><strong>Form 26AS:</strong> Deductee can claim ₹5,000 credit</li>
                        <li><strong>TDS Certificate:</strong> Form 16A issued within 15 days</li>
                    </ul>
                </div>

                <!-- Asktrix's Expert TDS Filing Services -->
                <div class="content-section">
                    <h2>Asktrix's Expert TDS Filing Services</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Accurate TDS Management:</strong> Expert handling of all TDS-related activities</li>
                        <li><strong>Timely Reminders:</strong> Proactive notifications for due dates</li>
                        <li><strong>Quality Assurance:</strong> Thorough validation before filing</li>
                        <li><strong>Compliance Support:</strong> Ongoing assistance for TDS compliance</li>
                        <li><strong>Deductee Coordination:</strong> Smooth TDS certificate management</li>
                        <li><strong>Regulatory Updates:</strong> Stay updated with latest TDS provisions</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about TDS return filing, eligibility, documents, process, benefits, costs, and timelines.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is TDS?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Tax Deducted at Source (TDS) is a tax collection mechanism where tax is deducted at the source of income generation and paid to the government by the payer on behalf of the payee.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who is responsible for deducting TDS?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Any person making specified payments above prescribed threshold limits is responsible for deducting TDS, including employers, companies, partnerships, and individuals.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is TAN?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>TAN (Tax Deduction Account Number) is a 10-digit alphanumeric number required for deducting TDS. It is mandatory for entities deducting TDS.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What forms are used for TDS returns?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Common TDS return forms include Form 24Q (salary), Form 26Q (non-salary), Form 27Q (non-resident), and Form 27EQ (TCS).</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">When are TDS returns due?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>TDS returns are due quarterly: Q1 by July 31, Q2 by October 31, Q3 by January 31, and Q4 by May 31.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if TDS return is filed late?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late filing attracts a penalty of ₹200 per day until the return is filed, subject to a maximum of the TDS amount itself.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does Asktrix assist with TDS?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides comprehensive TDS filing services including accurate calculations, timely filing, TDS certificate generation, and ongoing compliance support.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can TDS returns be revised?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, TDS returns can be revised under certain circumstances to correct errors or omissions, usually before the due date for filing original return.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are required for TDS filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include PAN details of deductees, payment vouchers, bank challans, TDS certificates, and authorized signatory details.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How are TDS certificates generated?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>TDS certificates (Form 16/16A) are generated from TRACES after successful filing of TDS returns and must be provided to deductees within 15 days.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Professional TDS filing with Asktrix ensures smooth tax compliance and eliminates penalties. Our expert team handles all aspects of TDS management with accuracy and timeliness.
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
                                   value="tds-return-filing">
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
