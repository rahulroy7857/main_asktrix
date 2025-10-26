@extends('layouts.app')

@section('title', 'Trade License Registration with Asktrix - Complete Guide')

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

    /* States table styling */
    .states-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .states-table th,
    .states-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }
    .states-table th {
        background: #1a237e;
        color: white;
        font-weight: 600;
    }
    .states-table tr:hover {
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
                        Trade License Registration with Asktrix
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        A trade license is a legal document issued by local government authorities that permits individuals or businesses to conduct commercial activities within a specific area. It ensures compliance with local regulations and enables legitimate business operations.
                    </p>
                </div>

                <!-- Importance of a Trade License -->
                <div class="content-section">
                    <h2>Importance of a Trade License</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Legal Compliance:</strong> Ensures your business operates within the legal framework and meets all regulatory requirements</li>
                        <li><strong>Credibility:</strong> Enhances business credibility and trustworthiness among customers, suppliers, and financial institutions</li>
                        <li><strong>Regulatory Oversight:</strong> Provides proper oversight and regulation of business activities to maintain public safety and order</li>
                        <li><strong>Eligibility for Government Schemes:</strong> Makes your business eligible for various government schemes, subsidies, and financial assistance programs</li>
                    </ul>
                </div>

                <!-- Business Entities and Activities Requiring a Trade License -->
                <div class="content-section">
                    <h2>Business Entities and Activities Requiring a Trade License</h2>
                    
                    <h3>Business Entities</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Sole Proprietorship</li>
                        <li>Partnership Firms</li>
                        <li>Limited Liability Partnerships (LLPs)</li>
                        <li>Private Limited Companies</li>
                        <li>Public Limited Companies</li>
                        <li>One Person Company (OPC)</li>
                    </ul>

                    <h3>Common Activities Requiring a Trade License</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Retail and Wholesale Trade</li>
                        <li>Manufacturing and Production Units</li>
                        <li>Food and Beverage Services</li>
                        <li>Hospitality Services</li>
                        <li>Construction and Real Estate</li>
                        <li>Transportation Services</li>
                        <li>Healthcare Services</li>
                        <li>Educational Institutions</li>
                        <li>Service Providers</li>
                    </ul>
                </div>

                <!-- Applicable States in India -->
                <div class="content-section">
                    <h2>Applicable States in India</h2>
                    <table class="states-table">
                        <thead>
                            <tr>
                                <th>State/Union Territory</th>
                                <th>Issuing Authority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Maharashtra</strong></td>
                                <td>Issued by Municipal Corporations (e.g., BMC, PMC)</td>
                            </tr>
                            <tr>
                                <td><strong>Delhi</strong></td>
                                <td>Issued by the Municipal Corporation of Delhi (MCD)</td>
                            </tr>
                            <tr>
                                <td><strong>Karnataka</strong></td>
                                <td>Issued by local municipal authorities e.g., BBMP</td>
                            </tr>
                            <tr>
                                <td><strong>Tamil Nadu</strong></td>
                                <td>Issued by Corporation of Chennai and other municipal bodies</td>
                            </tr>
                            <tr>
                                <td><strong>Gujarat</strong></td>
                                <td>Issued by Municipal Corporations and Nagar Palikas</td>
                            </tr>
                            <tr>
                                <td><strong>West Bengal</strong></td>
                                <td>Issued by Kolkata Municipal Corporation and other municipalities</td>
                            </tr>
                            <tr>
                                <td><strong>Uttar Pradesh</strong></td>
                                <td>Issued by Municipal Corporations and Nagar Nigams</td>
                            </tr>
                            <tr>
                                <td><strong>Rajasthan</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Andhra Pradesh</strong></td>
                                <td>Issued by Greater Visakhapatnam Municipal Corporation and others</td>
                            </tr>
                            <tr>
                                <td><strong>Telangana</strong></td>
                                <td>Issued by Greater Hyderabad Municipal Corporation and others</td>
                            </tr>
                            <tr>
                                <td><strong>Kerala</strong></td>
                                <td>Issued by Municipal Corporations and Municipalities</td>
                            </tr>
                            <tr>
                                <td><strong>Punjab</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Haryana</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Committees</td>
                            </tr>
                            <tr>
                                <td><strong>Madhya Pradesh</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Bihar</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Odisha</strong></td>
                                <td>Issued by Municipal Corporations and Municipalities</td>
                            </tr>
                            <tr>
                                <td><strong>Assam</strong></td>
                                <td>Issued by Municipal Corporations and Town Committees</td>
                            </tr>
                            <tr>
                                <td><strong>Jharkhand</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Chhattisgarh</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Himachal Pradesh</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Uttarakhand</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Goa</strong></td>
                                <td>Issued by Municipal Councils and Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Manipur</strong></td>
                                <td>Issued by Municipal Councils and Town Committees</td>
                            </tr>
                            <tr>
                                <td><strong>Meghalaya</strong></td>
                                <td>Issued by Municipal Boards and Town Committees</td>
                            </tr>
                            <tr>
                                <td><strong>Nagaland</strong></td>
                                <td>Issued by Town Councils and Municipal Boards</td>
                            </tr>
                            <tr>
                                <td><strong>Tripura</strong></td>
                                <td>Issued by Municipal Councils and Nagar Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Sikkim</strong></td>
                                <td>Issued by Municipal Councils and Town Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Mizoram</strong></td>
                                <td>Issued by Municipal Councils and Town Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Arunachal Pradesh</strong></td>
                                <td>Issued by Municipal Councils and Town Committees</td>
                            </tr>
                            <tr>
                                <td><strong>Chandigarh</strong></td>
                                <td>Issued by Municipal Corporation Chandigarh</td>
                            </tr>
                            <tr>
                                <td><strong>Puducherry</strong></td>
                                <td>Issued by Municipal Councils and Commune Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Lakshadweep</strong></td>
                                <td>Issued by District Panchayats and Village Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Andaman and Nicobar Islands</strong></td>
                                <td>Issued by Municipal Councils and Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Dadra and Nagar Haveli</strong></td>
                                <td>Issued by District Panchayats and Village Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Daman and Diu</strong></td>
                                <td>Issued by Municipal Councils and Panchayats</td>
                            </tr>
                            <tr>
                                <td><strong>Jammu and Kashmir</strong></td>
                                <td>Issued by Municipal Corporations and Municipal Councils</td>
                            </tr>
                            <tr>
                                <td><strong>Ladakh</strong></td>
                                <td>Issued by Municipal Councils and Panchayats</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Trade License Registration Process with Asktrix -->
                <div class="content-section">
                    <h2>Trade License Registration Process with Asktrix</h2>
                    <p>Our streamlined process ensures quick and hassle-free trade license registration:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Consultation</h3>
                                <p class="text-gray-600">Our experts assess your business requirements and determine the appropriate type of trade license needed for your specific business activities and location.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Document Collection</h3>
                                <p class="text-gray-600">We help you gather all necessary documents including identity proof, address proof, business registration documents, and property ownership/rental agreements.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Application Preparation</h3>
                                <p class="text-gray-600">Our team prepares and fills out all required application forms accurately, ensuring compliance with local municipal requirements and regulations.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Online Submission</h3>
                                <p class="text-gray-600">We submit your application online through the respective municipal corporation's portal, ensuring all documents are properly uploaded and verified.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Fee Payment</h3>
                                <p class="text-gray-600">We handle the payment of all applicable fees and charges, ensuring timely processing and avoiding any delays in the application process.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">6</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Inspection</h3>
                                <p class="text-gray-600">We coordinate with municipal authorities for site inspection (if required) and ensure all compliance requirements are met at your business premises.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">7</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">License Issuance</h3>
                                <p class="text-gray-600">Once approved, we collect your trade license certificate and ensure it's properly delivered to you, along with guidance on renewal procedures and compliance requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compliance Requirements -->
                <div class="content-section">
                    <h2>Compliance Requirements</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Renewal:</strong> Trade licenses must be renewed annually before the expiry date to maintain legal compliance</li>
                        <li><strong>Record Keeping:</strong> Maintain proper records of business activities, transactions, and compliance with local regulations</li>
                        <li><strong>Adherence to Regulations:</strong> Ensure ongoing compliance with all applicable municipal laws, health and safety standards, and environmental regulations</li>
                    </ul>
                </div>

                <!-- Benefits of Obtaining a Trade License -->
                <div class="content-section">
                    <h2>Benefits of Obtaining a Trade License</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Legal Protection:</strong> Provides legal protection and legitimacy for your business operations</li>
                        <li><strong>Business Growth:</strong> Enables expansion opportunities and access to formal business networks and partnerships</li>
                        <li><strong>Access to Government Schemes:</strong> Makes your business eligible for various government schemes, subsidies, and financial assistance programs</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about trade license registration, eligibility, process, benefits, costs, and compliance requirements.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is a trade license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>A trade license is a legal document issued by local government authorities that permits individuals or businesses to conduct commercial activities within a specific area. It ensures compliance with local regulations and enables legitimate business operations.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How long does it take to obtain a trade license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The processing time varies by location and municipality, typically ranging from 15 to 45 days. With Asktrix's expert assistance, we ensure faster processing and timely completion of your trade license application.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the cost of obtaining a trade license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The cost varies depending on the type of business, location, and municipal authority. Fees typically range from ₹500 to ₹5,000. Asktrix provides transparent pricing and handles all fee payments on your behalf.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are required for trade license registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include identity proof, address proof, business registration documents, property ownership/rental agreement, NOC from property owner, and other location-specific documents. Asktrix provides a comprehensive checklist tailored to your requirements.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is a trade license mandatory for all businesses?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, a trade license is mandatory for most commercial activities. The specific requirements vary by location and type of business. Asktrix helps determine the exact requirements for your business.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can I operate without a trade license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Operating without a valid trade license is illegal and can result in penalties, fines, and closure of your business. It's essential to obtain and maintain a valid trade license for legal compliance.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How often do I need to renew my trade license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Trade licenses typically need to be renewed annually. The renewal process should be initiated before the expiry date to avoid penalties and ensure continuous legal operation of your business.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if my trade license expires?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Operating with an expired trade license can result in penalties, fines, and potential closure of your business. It's crucial to renew your license before expiry to maintain legal compliance.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can I transfer my trade license to another person?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Trade license transfer procedures vary by municipality. Generally, licenses are not directly transferable, and the new owner must apply for a fresh license. Asktrix can guide you through the appropriate process.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How can Asktrix help with trade license registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides comprehensive trade license services including consultation, document preparation, application submission, fee payment, inspection coordination, and license collection. We ensure hassle-free and timely completion of the entire process.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Obtaining a trade license is essential for legal business operations and compliance with local regulations. Asktrix provides expert guidance and comprehensive support to help you navigate the trade license registration process efficiently, ensuring your business operates within the legal framework and avoids penalties while enabling growth and success.
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
                                   value="trade-license-registration">
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
