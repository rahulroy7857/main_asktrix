@extends('layouts.app')

@section('title', 'FSSAI License with Asktrix')

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
    .license-type-card {
        background: #f8f9fa;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .license-type-card h4 {
        color: #1a237e;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .license-type-card ul {
        margin-bottom: 12px;
    }
    .license-type-card li {
        margin-bottom: 6px;
        color: #374151;
    }
    .license-type-card .highlight {
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
                        FSSAI License with Asktrix
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        The Food Safety and Standards Authority of India (FSSAI) License is mandatory for all food businesses in India. It ensures food safety, quality, and compliance with food regulations. Asktrix provides comprehensive FSSAI registration services to help your food business operate legally and gain consumer trust.
                    </p>
                </div>

                <!-- Types of FSSAI Licenses -->
                <div class="content-section">
                    <h2>Types of FSSAI Licenses</h2>
                    
                    <!-- Basic FSSAI Registration -->
                    <div class="license-type-card">
                        <h4>Basic FSSAI Registration</h4>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>Who Should Obtain It?</strong> Small businesses with annual turnover up to ₹12 lakhs</li>
                            <li><strong>License Type:</strong> Basic License</li>
                            <li><strong>Examples:</strong> Small retailers, hawkers, petty food manufacturers, small-scale food processors</li>
                        </ul>
                        <div class="highlight">Ideal for small-scale food businesses and street vendors</div>
                    </div>

                    <!-- State FSSAI License -->
                    <div class="license-type-card">
                        <h4>State FSSAI License</h4>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>Who Should Obtain It?</strong> Medium-sized businesses with annual turnover between ₹12 lakhs and ₹20 crores</li>
                            <li><strong>License Type:</strong> State License</li>
                            <li><strong>Examples:</strong> Food manufacturers, storage units, distributors, restaurants, hotels</li>
                        </ul>
                        <div class="highlight">Required for medium-scale food businesses operating within a state</div>
                    </div>

                    <!-- General FSSAI License -->
                    <div class="license-type-card">
                        <h4>General FSSAI License</h4>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>Who Should Obtain It?</strong> Large food businesses with annual turnover above ₹20 crores</li>
                            <li><strong>License Type:</strong> Central License</li>
                            <li><strong>Examples:</strong> Importers, exporters, central government agencies, large manufacturers</li>
                        </ul>
                        <div class="highlight">Mandatory for large-scale food businesses and import/export operations</div>
                    </div>
                </div>

                <!-- Eligibility Criteria -->
                <div class="content-section">
                    <h2>Eligibility Criteria for FSSAI License</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Business Turnover:</strong> Based on annual revenue from food business activities</li>
                        <li><strong>Nature of Business:</strong> Must be involved in food manufacturing, processing, storage, distribution, or sale</li>
                        <li><strong>Geographical Scope:</strong> Single state (State License) or multiple states/import-export (Central License)</li>
                        <li><strong>Production Capacity:</strong> Manufacturing capacity determines license type</li>
                        <li><strong>Business Structure:</strong> Individual, partnership, company, or any other legal entity</li>
                    </ul>
                </div>

                <!-- Who Needs FSSAI License -->
                <div class="content-section">
                    <h2>Who Needs an FSSAI License?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Food manufacturers and processors</li>
                        <li>Food storage and warehousing units</li>
                        <li>Food retailers and distributors</li>
                        <li>Food vendors and hawkers</li>
                        <li>Caterers and food service providers</li>
                        <li>Hotels and restaurants</li>
                        <li>Food importers and exporters</li>
                        <li>Online food delivery platforms</li>
                        <li>Food packaging and labeling businesses</li>
                        <li>Any business handling food products</li>
                    </ul>
                </div>

                <!-- Who Doesn't Require FSSAI License -->
                <div class="content-section">
                    <h2>Who Doesn't Require an FSSAI License?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Individual consumers purchasing food for personal consumption</li>
                        <li>Small food services with minimal operations (as per state-specific exemptions)</li>
                        <li>Occasional caterers for private events (non-commercial)</li>
                        <li>Agricultural producers selling raw produce directly</li>
                        <li>Home-based food businesses below certain thresholds</li>
                    </ul>
                </div>

                <!-- Import/Export Business -->
                <div class="content-section">
                    <h2>Does an Import/Export Business Need an FSSAI License?</h2>
                    <p>Yes, import/export businesses dealing with food products require a Central FSSAI License. This is mandatory for all food importers and exporters to ensure compliance with international food safety standards and Indian regulations.</p>
                </div>

                <!-- Step-by-Step Registration Process -->
                <div class="content-section">
                    <h2>Step-by-Step Registration Process with Asktrix</h2>
                    <p>Our streamlined process ensures quick and hassle-free FSSAI registration:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Determine the License Type</h3>
                                <p class="text-gray-600">Our experts analyze your business turnover, nature, and scope to determine the appropriate FSSAI license type (Basic, State, or Central).</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Document Submission</h3>
                                <p class="text-gray-600">Submit all required documents including business registration, identity proof, address proof, and food safety management plan.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Application Filing</h3>
                                <p class="text-gray-600">We prepare and file your FSSAI application with all necessary details and supporting documents through the official portal.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Inspection and Verification</h3>
                                <p class="text-gray-600">FSSAI officials conduct inspection of your premises to verify compliance with food safety standards and regulations.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Approval and License Issuance</h3>
                                <p class="text-gray-600">Upon successful verification, your FSSAI license is issued and you can legally operate your food business.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Required Documents -->
                <div class="content-section">
                    <h2>Required Documents for FSSAI Registration</h2>
                    <h3>Basic Registration Documents:</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Identity proof (Aadhaar, PAN, Voter ID)</li>
                        <li>Address proof of business premises</li>
                        <li>Business registration certificate</li>
                        <li>Food safety management plan</li>
                    </ul>
                    
                    <h3>State License Documents:</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>All basic registration documents</li>
                        <li>Form B (Declaration)</li>
                        <li>List of food categories</li>
                        <li>Manufacturing process details</li>
                        <li>Quality control measures</li>
                    </ul>
                    
                    <h3>Central License Documents:</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>All state license documents</li>
                        <li>Import/export code (if applicable)</li>
                        <li>NOC from state authority</li>
                        <li>Additional compliance certificates</li>
                    </ul>
                </div>

                <!-- Compliance Requirements -->
                <div class="content-section">
                    <h2>Compliance Requirements</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Display FSSAI license number on all food products and packaging</li>
                        <li>Regular renewal of license (validity: 1-5 years depending on license type)</li>
                        <li>Comply with food safety standards and maintain hygiene</li>
                        <li>Regular inspections by FSSAI officials</li>
                        <li>Maintain proper records of food production, storage, and distribution</li>
                        <li>Follow labeling requirements as per FSSAI regulations</li>
                    </ul>
                </div>

                <!-- Benefits of FSSAI Registration -->
                <div class="content-section">
                    <h2>Benefits of FSSAI Registration</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Legal Compliance:</strong> Operate legally in the food industry</li>
                        <li><strong>Consumer Trust:</strong> Build credibility and trust among customers</li>
                        <li><strong>Brand Image:</strong> Enhance your brand reputation and marketability</li>
                        <li><strong>Business Expansion:</strong> Access to larger markets and export opportunities</li>
                        <li><strong>Quality Assurance:</strong> Ensure food safety and quality standards</li>
                        <li><strong>Competitive Advantage:</strong> Stand out from unlicensed competitors</li>
                    </ul>
                </div>

                <!-- FSSAI Standards -->
                <div class="content-section">
                    <h2>Types of FSSAI Standards for Food Businesses</h2>
                    <p>FSSAI has established comprehensive standards covering food safety, hygiene, labeling, and packaging requirements. These standards ensure that food businesses maintain high-quality standards and protect consumer health. Compliance with these standards is mandatory for all FSSAI license holders.</p>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about FSSAI registration, eligibility, process, benefits, and compliance requirements.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Items -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is an FSSAI License?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>FSSAI License is a mandatory registration/license issued by the Food Safety and Standards Authority of India for all food businesses to ensure food safety and compliance with regulations.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Who requires an FSSAI License?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>All food businesses including manufacturers, processors, retailers, distributors, restaurants, hotels, caterers, importers, and exporters require FSSAI license.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the types of FSSAI licenses?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>There are three types: Basic Registration (up to ₹12 lakhs turnover), State License (₹12 lakhs to ₹20 crores), and Central License (above ₹20 crores or import/export).</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Which FSSAI license should I get for my business?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The license type depends on your annual turnover and business scope. Asktrix experts will analyze your business and recommend the appropriate license type.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the validity of an FSSAI license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>FSSAI licenses are valid for 1-5 years depending on the license type. Basic registration is valid for 1 year, while State and Central licenses can be valid for up to 5 years.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is the FSSAI license required for import/export?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, import/export businesses dealing with food products require a Central FSSAI License to ensure compliance with international food safety standards.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How long does it take to get the FSSAI license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Basic registration takes 7-15 days, State license takes 15-30 days, and Central license takes 30-60 days, depending on document completeness and inspection requirements.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is the FSSAI number required on packaging?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, FSSAI license number must be displayed on all food product packaging and labels as per FSSAI labeling regulations.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can the FSSAI license be transferred?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>FSSAI licenses are not transferable. If business ownership changes, a new application must be filed under the new owner's name.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What if my FSSAI license expires?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Operating with an expired license is illegal and attracts penalties. License renewal should be initiated 30 days before expiry to ensure continuous operation.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are needed for an FSSAI license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include identity proof, address proof, business registration, food safety management plan, and specific forms based on license type.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can FSSAI officials inspect my premises?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, FSSAI officials can conduct surprise inspections to verify compliance with food safety standards and regulations.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How much does an FSSAI license cost?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>FSSAI license fees vary: Basic registration (₹100), State license (₹2,000-₹5,000), Central license (₹7,500-₹15,000) depending on business type and capacity.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is renewal mandatory for FSSAI licenses?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, FSSAI license renewal is mandatory before expiry to continue legal operation. Late renewal attracts additional fees and penalties.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if I can't renew my FSSAI license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Operating without a valid license is illegal and can result in closure of business, penalties up to ₹5 lakhs, and legal action.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Do home-based food businesses need FSSAI registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, home-based food businesses selling products commercially require FSSAI registration, typically Basic registration for small-scale operations.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What if I lose my FSSAI certificate?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>You can apply for a duplicate certificate through the FSSAI portal by submitting required documents and paying applicable fees.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Does Asktrix help with license modification?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Asktrix provides comprehensive support for FSSAI license modifications including address changes, product additions, and capacity upgrades.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Does every food business need the same license?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, license requirements vary based on turnover, business type, and operational scope. Asktrix experts determine the appropriate license for your specific business.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How can Asktrix assist in FSSAI registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides end-to-end FSSAI registration support including license type determination, document preparation, application filing, inspection coordination, and compliance guidance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Ensuring FSSAI compliance for your food business with Asktrix provides not only legal adherence but also ongoing support for growth and success. Our comprehensive approach ensures your food business meets all safety standards efficiently and accurately.
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
                        <div class="price-highlight">₹1,899 INR</div>
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
                                   value="fssai-registration">
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
                            <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" 
                                   id="mobile" 
                                   name="mobile" 
                                   required
                                   value="{{ old('mobile') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('mobile') border-red-500 @enderror"
                                   placeholder="Enter your phone number">
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
