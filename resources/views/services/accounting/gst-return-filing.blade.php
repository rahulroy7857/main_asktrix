@extends('layouts.app')

@section('title', 'GST Return Filing Guide (Types, Eligibility, and Compliance) - Asktrix')

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

    /* Custom styling for intl-tel-input to match our design */
    .iti {
        width: 100% !important;
    }
    
    .iti__selected-flag {
        width: auto !important;
    }
    
    .iti input {
        width: 100% !important;
    }
    .gst-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .gst-table th {
        background: #1a237e;
        color: white;
        padding: 12px;
        text-align: left;
        font-weight: 600;
    }
    .gst-table td {
        padding: 12px;
        border-bottom: 1px solid #e5e7eb;
    }
    .gst-table tr:hover {
        background: #f9fafb;
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
                        GST Return Filing Guide (Types, Eligibility, and Compliance)
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        This comprehensive guide covers all aspects of GST return filing, including types of returns, eligibility criteria, compliance requirements, and step-by-step filing process to simplify your GST compliance experience.
                    </p>
                </div>

                <!-- Governing Act and Rules -->
                <div class="content-section">
                    <h2>Governing Act and Rules</h2>
                    <p>GST return filing is governed by the following acts and rules:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Central Goods and Services Tax (CGST) Act, 2017:</strong> Governs CGST levy and collection</li>
                        <li><strong>Integrated Goods and Services Tax (IGST) Act, 2017:</strong> Governs IGST levy and collection</li>
                        <li><strong>State Goods and Services Tax (SGST) Act, 2017:</strong> Governs SGST levy and collection</li>
                        <li><strong>GST Rules, 2017:</strong> Detailed procedures for return filing and compliance</li>
                    </ul>
                </div>

                <!-- Types of GST Returns -->
                <div class="content-section">
                    <h2>Types of GST Returns</h2>
                    <div class="overflow-x-auto">
                        <table class="gst-table">
                            <thead>
                                <tr>
                                    <th>Return Type</th>
                                    <th>Who Should File</th>
                                    <th>Frequency</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>GSTR-1</strong></td>
                                    <td>Regular taxpayers</td>
                                    <td>Monthly/Quarterly</td>
                                    <td>Outward supplies</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-2A/2B</strong></td>
                                    <td>Auto-populated</td>
                                    <td>Monthly</td>
                                    <td>Inward supplies</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-3B</strong></td>
                                    <td>Regular taxpayers</td>
                                    <td>Monthly/Quarterly</td>
                                    <td>Summary of outward supplies, ITC, and tax liability</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-4</strong></td>
                                    <td>Composition dealers</td>
                                    <td>Annually</td>
                                    <td>Summary of outward supplies</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-5</strong></td>
                                    <td>Non-resident foreign taxpayers</td>
                                    <td>Monthly</td>
                                    <td>Outward supplies and tax liability</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-6</strong></td>
                                    <td>Input Service Distributors</td>
                                    <td>Monthly</td>
                                    <td>ITC distribution</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-7</strong></td>
                                    <td>TDS deductors</td>
                                    <td>Monthly</td>
                                    <td>TDS details</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-8</strong></td>
                                    <td>E-commerce operators</td>
                                    <td>Monthly</td>
                                    <td>TCS details</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-9</strong></td>
                                    <td>Regular taxpayers</td>
                                    <td>Annually</td>
                                    <td>Annual return</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-10</strong></td>
                                    <td>Taxpayers whose registration is cancelled</td>
                                    <td>One-time</td>
                                    <td>Final return</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-11</strong></td>
                                    <td>UIN holders</td>
                                    <td>Monthly</td>
                                    <td>Inward supplies</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Who Should Mandatorily File GST Returns -->
                <div class="content-section">
                    <h2>Who Should Mandatorily File GST Returns?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Regular Taxpayers:</strong> Businesses with turnover exceeding ₹40 lakh (₹20 lakh for special category states)</li>
                        <li><strong>Composition Scheme Holders:</strong> Businesses opting for composition scheme</li>
                        <li><strong>Casual Taxable Persons:</strong> Persons making occasional taxable supplies</li>
                        <li><strong>Non-resident Foreign Taxpayers:</strong> Foreign entities making taxable supplies in India</li>
                        <li><strong>Input Service Distributors:</strong> Entities distributing ITC to branches</li>
                        <li><strong>TDS/TCS Deductors:</strong> Entities required to deduct/collect tax at source</li>
                        <li><strong>E-commerce Operators:</strong> Online platforms facilitating supplies</li>
                    </ul>
                </div>

                <!-- Who Is Exempt from GST Filing -->
                <div class="content-section">
                    <h2>Who Is Exempt from GST Filing?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Small Businesses:</strong> Businesses with annual turnover below ₹20 lakh (₹10 lakh for special category states)</li>
                        <li><strong>Agriculturalists:</strong> Farmers engaged in agricultural activities</li>
                        <li><strong>Exempt Supplies:</strong> Businesses dealing only in exempt goods/services</li>
                        <li><strong>Non-taxable Supplies:</strong> Businesses dealing only in non-taxable supplies</li>
                    </ul>
                </div>

                <!-- Step-by-Step Filing Process -->
                <div class="content-section">
                    <h2>Step-by-Step Filing Process for GST Returns</h2>
                    <p>Our streamlined process ensures quick and hassle-free GST return filing:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Log in to the GST Portal</h3>
                                <p class="text-gray-600">Access the official GST portal (www.gst.gov.in) using your GSTIN and password. Ensure you have valid credentials and updated contact information.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Select the Appropriate Return Type</h3>
                                <p class="text-gray-600">Choose the correct return form based on your business type and filing frequency. Common returns include GSTR-1, GSTR-3B, GSTR-4, etc.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Enter Required Details</h3>
                                <p class="text-gray-600">Fill in all mandatory fields including sales details, purchase information, tax calculations, and input tax credit claims. Ensure accuracy in all entries.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Review Auto-Populated Information</h3>
                                <p class="text-gray-600">Verify auto-populated data from GSTR-2A/2B against your purchase records. Reconcile any discrepancies and make necessary corrections.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Payment of GST Liability</h3>
                                <p class="text-gray-600">Calculate and pay any outstanding GST liability using available payment methods. Ensure sufficient balance in electronic cash ledger.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">6</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">File and Submit</h3>
                                <p class="text-gray-600">Review all information one final time, generate the return summary, and submit the return. Download the acknowledgment for your records.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Due Dates for GST Return Filing -->
                <div class="content-section">
                    <h2>Due Dates for GST Return Filing</h2>
                    <div class="overflow-x-auto">
                        <table class="gst-table">
                            <thead>
                                <tr>
                                    <th>Return Type</th>
                                    <th>Due Date</th>
                                    <th>Frequency</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>GSTR-1</strong></td>
                                    <td>11th of next month</td>
                                    <td>Monthly</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-3B</strong></td>
                                    <td>20th of next month</td>
                                    <td>Monthly</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-4</strong></td>
                                    <td>18th of month succeeding quarter</td>
                                    <td>Quarterly</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-5</strong></td>
                                    <td>20th of next month</td>
                                    <td>Monthly</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-6</strong></td>
                                    <td>13th of next month</td>
                                    <td>Monthly</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-7</strong></td>
                                    <td>10th of next month</td>
                                    <td>Monthly</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-8</strong></td>
                                    <td>10th of next month</td>
                                    <td>Monthly</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-9</strong></td>
                                    <td>31st December of next financial year</td>
                                    <td>Annually</td>
                                </tr>
                                <tr>
                                    <td><strong>GSTR-10</strong></td>
                                    <td>Within 3 months of cancellation</td>
                                    <td>One-time</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Penalties for Non-Compliance -->
                <div class="content-section">
                    <h2>Penalties for Non-Compliance</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Late Fees:</strong> ₹200 per day (₹100 for CGST + ₹100 for SGST) with maximum penalty of ₹5,000 per return</li>
                        <li><strong>Interest:</strong> 18% per annum on outstanding tax amount from due date to payment date</li>
                        <li><strong>Legal Actions:</strong> Prosecution proceedings for willful non-compliance or tax evasion</li>
                        <li><strong>Registration Cancellation:</strong> GST registration may be cancelled for persistent non-compliance</li>
                        <li><strong>Input Tax Credit Blocking:</strong> ITC may be blocked for non-filing of returns</li>
                    </ul>
                </div>

                <!-- Benefits of GST Return Filing with Asktrix -->
                <div class="content-section">
                    <h2>Benefits of GST Return Filing with Asktrix</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Easy-to-Use Platform:</strong> User-friendly interface for seamless return filing</li>
                        <li><strong>Timely Reminders:</strong> Automated alerts for due dates and compliance requirements</li>
                        <li><strong>Detailed ITC Calculations:</strong> Accurate input tax credit calculations and reconciliation</li>
                        <li><strong>Expert Support:</strong> Professional guidance from GST experts throughout the process</li>
                        <li><strong>Error Prevention:</strong> Built-in validation to minimize filing errors</li>
                        <li><strong>Document Management:</strong> Secure storage and management of all GST-related documents</li>
                        <li><strong>Compliance Tracking:</strong> Real-time tracking of filing status and compliance history</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about GST return filing, types, eligibility, compliance, penalties, and benefits.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is GSTR-3B?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>GSTR-3B is a monthly summary return that contains details of outward supplies, input tax credit claimed, and tax liability. It's filed by regular taxpayers on a monthly basis.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who must file GSTR-1?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>All regular taxpayers registered under GST must file GSTR-1, which contains details of outward supplies made during the tax period.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can GST returns be revised once filed?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, GST returns cannot be revised once filed. However, errors can be corrected in subsequent returns or through amendment procedures.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is GSTR-4 mandatory for composition taxpayers?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, GSTR-4 is mandatory for taxpayers registered under the composition scheme. It's filed quarterly and contains summary details of supplies.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What if my turnover is below ₹20 lakh?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>If your turnover is below ₹20 lakh (₹10 lakh for special category states), GST registration is optional. However, voluntary registration provides benefits like input tax credit.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How can I claim ITC under GST?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>ITC can be claimed in GSTR-3B based on invoices uploaded by suppliers in GSTR-1. The credit is auto-populated from GSTR-2A/2B.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the penalty for late filing of GSTR-1?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late filing of GSTR-1 attracts a penalty of ₹200 per day (₹100 for CGST + ₹100 for SGST) with a maximum penalty of ₹5,000 per return.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is GSTIN mandatory for all businesses?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GSTIN is mandatory for businesses with turnover above ₹20 lakh (₹10 lakh for special category states). Below this threshold, registration is optional.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the process to cancel GST registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GST registration can be cancelled by filing Form GST REG-16. The process involves filing final returns and clearing all dues before cancellation.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are GSTR 2A and GSTR 2B?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GSTR-2A is auto-populated from supplier returns, while GSTR-2B is a static return with ITC details. Both help in reconciling input tax credit.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 11 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who files GSTR-5?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GSTR-5 is filed by non-resident foreign taxpayers who make taxable supplies in India but don't have a fixed place of business.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 12 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Do I need to file nil returns under GST?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, even if you have no business activity during a tax period, you must file nil returns to maintain compliance and avoid penalties.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 13 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How often do I need to pay GST?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GST payment is due monthly along with return filing. The due date for payment is the same as the return filing due date.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 14 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is professional help necessary for GST filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>While not mandatory, professional help ensures accurate filing, compliance, and helps avoid penalties. Asktrix provides expert assistance for all GST needs.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 15 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can ITC be claimed for all purchases?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>ITC can be claimed only for business-related purchases. Personal expenses, exempt supplies, and blocked credits are not eligible for ITC.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 16 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does GSTR-7 apply?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GSTR-7 is filed by entities required to deduct TDS under GST. It contains details of TDS deducted and deposited during the tax period.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 17 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the due date for GSTR-8?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GSTR-8 is due on the 10th of the month following the tax period. It's filed by e-commerce operators for TCS details.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 18 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can errors in GST returns be corrected?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Errors can be corrected in subsequent returns or through amendment procedures. Major errors may require filing of revised returns in certain cases.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 19 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the benefits of timely GST filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Timely filing ensures compliance, avoids penalties, maintains good standing, enables ITC claims, and prevents registration cancellation.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 20 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does Asktrix assist in GST filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides complete GST compliance services including registration, monthly return filing, reconciliation, annual return preparation, and expert guidance throughout the process.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Ensuring smooth GST compliance with Asktrix provides not only legal adherence but also ongoing support for business growth and success. Our comprehensive approach ensures your business meets all GST requirements efficiently and accurately.
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
                        <div class="price-highlight">₹7,899 INR</div>
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
                                   value="gst-return-filing">
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
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">I'm interested in...</label>
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
