@extends('layouts.app')

@section('title', 'Darpan ID Registration with Asktrix')

@section('styles')
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css">
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
    .benefit-card {
        background: #f8f9fa;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .benefit-card h4 {
        color: #1a237e;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .benefit-card ul {
        margin-bottom: 12px;
    }
    .benefit-card li {
        margin-bottom: 6px;
        color: #374151;
    }
    .benefit-card .highlight {
        background: #e0f2fe;
        padding: 8px 12px;
        border-radius: 4px;
        font-weight: 600;
        color: #1a237e;
        margin-top: 12px;
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
                        Darpan ID Registration with Asktrix
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        The Darpan ID is a unique identification number issued to Non-Governmental Organizations (NGOs) by the NITI Aayog, under the NGO-DARPAN Portal. It is mandatory for NGOs seeking government grants to ensure transparency and accountability in fund utilization.
                    </p>
                </div>

                <!-- Overview of Darpan ID and Government Rules -->
                <div class="content-section">
                    <h2>Overview of Darpan ID and Government Rules</h2>
                    <p>The Darpan ID serves as a unified digital platform for NGOs to interact with government agencies, ensuring transparency and accountability in the utilization of government funds.</p>
                    
                    <h3>Eligibility</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>NGOs, societies, trusts, and Section 8 companies are eligible</li>
                        <li>Must be registered under relevant acts (Societies Registration Act, Trust Act, Companies Act)</li>
                        <li>Should have a valid registration certificate</li>
                    </ul>

                    <h3>Required Documents</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>PAN of the NGO</li>
                        <li>Details of the board members: Aadhaar or PAN is required for the members</li>
                        <li>Registration Certificate of the organization</li>
                        <li>Organization details: Including address and bank account information</li>
                    </ul>

                    <h3>Application Process</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Register on the NGO-DARPAN Portal by providing the organization's information</li>
                        <li>Submit the details of board members along with Aadhaar or PAN for identification</li>
                        <li>After submission, the portal will generate a unique Darpan ID</li>
                        <li><strong>Compliance:</strong> NGOs with a Darpan ID must comply with regular updates on the portal and are subject to government checks to ensure funds are used for stated purposes</li>
                    </ul>
                </div>

                <!-- Benefits of Darpan ID Registration -->
                <div class="content-section">
                    <h2>Benefits of Darpan ID Registration</h2>
                    
                    <div class="benefit-card">
                        <h4>Eligibility for Government Grants</h4>
                        <p>Darpan ID is mandatory for NGOs to receive government funding and grants, opening doors to various financial support programs.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Increased Transparency</h4>
                        <p>The portal ensures transparency in NGO operations and fund utilization, building trust with government agencies and donors.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Streamlined Interactions with Government Agencies</h4>
                        <p>Simplifies communication and documentation processes with various government departments and ministries.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Enhanced Credibility</h4>
                        <p>Having a Darpan ID enhances the organization's credibility and legitimacy in the eyes of stakeholders and beneficiaries.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Access to Networking Opportunities</h4>
                        <p>Provides access to government-sponsored programs, workshops, and networking events for NGOs.</p>
                    </div>
                </div>

                <!-- Consequences of Non-Compliance -->
                <div class="content-section">
                    <h2>Consequences of Non-Compliance or Lack of Darpan ID</h2>
                    
                    <div class="benefit-card">
                        <h4>Ineligibility for Government Funding</h4>
                        <p>NGOs without Darpan ID cannot receive government grants, severely limiting their funding opportunities.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Reduced Transparency and Credibility</h4>
                        <p>Lack of Darpan ID may raise questions about the organization's legitimacy and transparency.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Increased Scrutiny and Penalties for Misuse of Funds</h4>
                        <p>Organizations without proper registration face higher scrutiny and potential penalties for any fund misuse.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Restricted Collaborations</h4>
                        <p>Limited opportunities for collaboration with government agencies and other registered NGOs.</p>
                    </div>
                </div>

                <!-- Step-by-Step Registration Process -->
                <div class="content-section">
                    <h2>Step-by-Step Registration Process with Asktrix</h2>
                    <p>Our streamlined process ensures quick and hassle-free Darpan ID registration:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Document Collection and Verification</h3>
                                <p class="text-gray-600">Our experts help you gather all required documents including PAN, registration certificate, board member details, and organization information.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Portal Registration</h3>
                                <p class="text-gray-600">We assist in registering your organization on the NGO-DARPAN Portal with accurate information and proper categorization.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Application Submission</h3>
                                <p class="text-gray-600">We prepare and submit your application with all necessary details and supporting documents through the official portal.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Verification and Approval</h3>
                                <p class="text-gray-600">NITI Aayog verifies the submitted information and approves the application, generating a unique Darpan ID.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Ongoing Compliance Support</h3>
                                <p class="text-gray-600">We provide continuous support for maintaining compliance, updating information, and ensuring adherence to government regulations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- How Asktrix Supports Darpan ID Registration -->
                <div class="content-section">
                    <h2>How Asktrix Supports Darpan ID Registration</h2>
                    <p>Asktrix provides comprehensive assistance throughout the Darpan ID registration process, ensuring compliance and efficiency.</p>
                    
                    <div class="benefit-card">
                        <h4>Document Preparation</h4>
                        <p>We help you prepare and organize all required documents, ensuring they meet government standards and requirements.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Portal Registration and Submission</h4>
                        <p>Our experts handle the technical aspects of portal registration and application submission, minimizing errors and delays.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Compliance Guidance</h4>
                        <p>We provide ongoing guidance on compliance requirements, helping you maintain your Darpan ID status and avoid penalties.</p>
                    </div>

                    <div class="benefit-card">
                        <h4>Renewal and Updates</h4>
                        <p>Asktrix assists with periodic updates, renewals, and modifications to your Darpan ID registration as needed.</p>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about Darpan ID registration, eligibility, required documents, process steps, costs, and timelines.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Items -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the purpose of a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Darpan ID is a unique identification number issued by NITI Aayog to NGOs for transparency, accountability, and streamlined interaction with government agencies.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who can apply for a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>NGOs, societies, trusts, and Section 8 companies registered under relevant acts can apply for Darpan ID.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is it mandatory to have a Darpan ID for government funding?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Darpan ID is mandatory for NGOs to receive government grants and funding from various ministries and departments.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can private companies apply for a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Only Section 8 companies (non-profit companies) can apply for Darpan ID. Regular private companies are not eligible.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are required for Darpan ID registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include PAN of NGO, board member details (Aadhaar/PAN), registration certificate, and organization details including address and bank account information.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is there a fee for Darpan ID registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Darpan ID registration is free of cost. However, professional assistance services may have associated fees.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How long does it take to get a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Typically, Darpan ID is generated immediately after successful submission of all required documents and information on the portal.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if I don't have a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Without Darpan ID, NGOs cannot receive government funding, face reduced credibility, and have limited collaboration opportunities with government agencies.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can I edit my details after obtaining a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, you can update your organization details, board member information, and other details through the NGO-DARPAN portal.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Are there any compliance requirements with a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, NGOs must maintain updated information, comply with regular reporting requirements, and ensure proper utilization of government funds.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is a Darpan ID valid permanently?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Darpan ID is valid as long as the organization remains active and compliant. Regular updates and compliance are required to maintain validity.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can international NGOs register for a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>International NGOs operating in India can register for Darpan ID if they meet the eligibility criteria and have proper registration in India.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How often should I update my details on the Darpan portal?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>You should update your details whenever there are changes in board members, address, contact information, or other significant organizational changes.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the consequence of misinformation on the Darpan portal?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Providing false information can lead to rejection of applications, cancellation of Darpan ID, and potential legal consequences.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Do all Indian states require a Darpan ID for government funds?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Darpan ID is mandatory across all Indian states and union territories for receiving government funding and grants.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What if my NGO's board members change?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>You must update the board member information on the Darpan portal within 30 days of any changes to maintain compliance.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is there any limit on the amount of funding an NGO can receive with a Darpan ID?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>There are no specific limits on funding amounts, but funding depends on project proposals, organizational capacity, and government policies.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does the Darpan ID improve donor confidence?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Darpan ID provides transparency and accountability, demonstrating the NGO's legitimacy and compliance with government standards, which builds donor confidence.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What role does Asktrix play in Darpan ID registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides end-to-end support including document preparation, portal registration, application submission, compliance guidance, and ongoing support for Darpan ID maintenance.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can an NGO hold multiple Darpan IDs?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, each NGO can have only one Darpan ID. Multiple registrations for the same organization are not permitted.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Ensuring Darpan ID compliance for your NGO with Asktrix provides not only legal adherence but also ongoing support for growth and success. Our comprehensive approach ensures your organization meets all government standards efficiently and accurately.
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
                        <div class="price-highlight">₹9,899 INR</div>
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
                                   value="darpan-registration">
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
                                   placeholder="Enter your phone number">
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
