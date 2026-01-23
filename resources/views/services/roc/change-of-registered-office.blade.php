@extends('layouts.app')

@section('title', 'Registered Office Address Change of Company - MCA Compliance | Asktrix')

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
                        Registered Office Address Change of Company - MCA Compliance
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Changing a company's registered office address is a crucial corporate action governed by the Companies Act, 2013 and corresponding MCA rules. Asktrix provides comprehensive support for all registered office address change requirements, ensuring your company meets all regulatory obligations efficiently and accurately.
                    </p>
                </div>

                <!-- Governing Act and Rules -->
                <div class="content-section">
                    <h2>Governing Act and Rules</h2>
                    <p>Registered office address changes are governed by various acts and regulations:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Companies Act, 2013:</strong> Primary legislation governing company operations and address changes</li>
                        <li><strong>Companies (Incorporation) Rules, 2014:</strong> Specific rules for address change procedures</li>
                        <li><strong>MCA Guidelines:</strong> Ministry of Corporate Affairs guidelines for compliance</li>
                        <li><strong>ROC Regulations:</strong> Registrar of Companies specific requirements</li>
                    </ul>
                </div>

                <!-- Types of Registered Office Changes -->
                <div class="content-section">
                    <h2>Types of Registered Office Changes</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Within the Same City:</strong> Moving to a different location within the same city limits</li>
                        <li><strong>Within the Same State:</strong> Relocating to a different city within the same state</li>
                        <li><strong>Between States:</strong> Moving the registered office to a different state</li>
                        <li><strong>International Relocation:</strong> Moving registered office outside India (special procedures apply)</li>
                    </ul>
                </div>

                <!-- Eligibility Entities -->
                <div class="content-section">
                    <h2>Eligibility Entities for Registered Office Address Change</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Private Limited Company:</strong> Most common entity type requiring address changes</li>
                        <li><strong>Public Limited Company:</strong> Listed and unlisted public companies</li>
                        <li><strong>One Person Company (OPC):</strong> Single-member companies</li>
                        <li><strong>Section 8 Company:</strong> Non-profit companies</li>
                        <li><strong>Producer Company:</strong> Agricultural and related companies</li>
                    </ul>
                </div>

                <!-- Step-by-Step Process -->
                <div class="content-section">
                    <h2>Step-by-Step Process for Registered Office Address Change</h2>
                    
                    <div class="mb-6">
                        <h3>1. Board Resolution</h3>
                        <p>Conduct a board meeting to pass a resolution approving the change of registered office address. The resolution must be properly documented and signed by all directors.</p>
                    </div>

                    <div class="mb-6">
                        <h3>2. General Meeting Approval</h3>
                        <p>Convene an Extraordinary General Meeting (EGM) to obtain shareholder approval for the address change. Special resolution may be required for inter-state changes.</p>
                    </div>

                    <div class="mb-6">
                        <h3>3. Filing Forms</h3>
                        <p>File the necessary forms with the Registrar of Companies (ROC):</p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li><strong>Form INC-22:</strong> Notice of change of registered office</li>
                            <li><strong>Form MGT-14:</strong> Filing of special resolution (if applicable)</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3>4. Update Address with ROC</h3>
                        <p>Submit all required documents and forms to the concerned ROC office within the prescribed timeline.</p>
                    </div>

                    <div class="mb-6">
                        <h3>5. Timeline and Processing</h3>
                        <p>ROC typically processes address change applications within 15-30 days from the date of filing, subject to proper documentation and compliance.</p>
                    </div>
                </div>

                <!-- Forms Required -->
                <div class="content-section">
                    <h2>Forms Required for Registered Office Change</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Form INC-22:</strong> Notice of change of registered office within 30 days</li>
                        <li><strong>Form MGT-14:</strong> Filing of special resolution within 30 days</li>
                        <li><strong>Form INC-23:</strong> Application for shifting registered office (inter-state)</li>
                        <li><strong>Form INC-24:</strong> Application for change of name and objects</li>
                    </ul>
                </div>

                <!-- Effectiveness of Address Change -->
                <div class="content-section">
                    <h2>Effectiveness of Address Change</h2>
                    <p>The change of registered office address becomes effective upon:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Approval by the Registrar of Companies</li>
                        <li>Issuance of certificate of incorporation with new address</li>
                        <li>Updating of MCA records and company master data</li>
                        <li>Notification to all stakeholders and government departments</li>
                    </ul>
                </div>

                <!-- Limitations and Frequency -->
                <div class="content-section">
                    <h2>Limitations and Frequency of Registered Office Change</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Frequency:</strong> No specific limit on number of changes per year</li>
                        <li><strong>Cooling Period:</strong> No mandatory waiting period between changes</li>
                        <li><strong>Documentation:</strong> Each change requires complete documentation</li>
                        <li><strong>Compliance:</strong> All changes must comply with regulatory requirements</li>
                    </ul>
                </div>

                <!-- LLPs Section -->
                <div class="content-section">
                    <h2>Registered Office Address Change for LLPs</h2>
                    
                    <div class="mb-6">
                        <h3>Step-by-Step Process for Registered Office Address Change for LLPs</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Partner resolution for address change</li>
                            <li>Filing Form 15 with ROC</li>
                            <li>Updating LLP agreement if required</li>
                            <li>Notification to stakeholders</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3>Types of Registered Office Change for LLPs</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Within the same city</li>
                            <li>Within the same state</li>
                            <li>Between different states</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3>Eligibility and Documentation Requirements for LLPs</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>All types of LLPs are eligible</li>
                            <li>Partner resolution required</li>
                            <li>Updated LLP agreement</li>
                            <li>Address proof documents</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3>Process Scope for Each Type of Change</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>Intra-city:</strong> Simple notification process</li>
                            <li><strong>Intra-state:</strong> Standard filing requirements</li>
                            <li><strong>Inter-state:</strong> Additional approvals and documentation</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3>Supporting Documents</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Address proof of new office</li>
                            <li>No objection certificate from landlord</li>
                            <li>Board resolution/Partner resolution</li>
                            <li>Updated statutory registers</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3>Timeline and Processing</h3>
                        <p>LLP address changes are typically processed within 10-15 days from the date of filing, subject to proper documentation.</p>
                    </div>

                    <div class="mb-6">
                        <h3>Inter-State Registered Office Change</h3>
                        <p>For inter-state changes, additional approvals may be required from both the current and new state ROC offices.</p>
                    </div>

                    <div class="mb-6">
                        <h3>Effectiveness of Address Change</h3>
                        <p>LLP address changes become effective upon ROC approval and updating of master data.</p>
                    </div>

                    <div class="mb-6">
                        <h3>Frequency of Change</h3>
                        <p>LLPs can change their registered office address as frequently as required, subject to compliance with regulatory requirements.</p>
                    </div>
                </div>

                <!-- Penalties -->
                <div class="content-section">
                    <h2>Penalties for Non-Compliance</h2>
                    <div class="bg-red-50 p-4 md:p-6 rounded-lg">
                        <h4 class="font-semibold mb-3 md:mb-4 text-red-800">Non-Compliance Consequences:</h4>
                        <ul class="space-y-2 text-red-700">
                            <li><strong>Late Filing:</strong> Penalty of ₹1,000 per day for delayed filing</li>
                            <li><strong>Incorrect Information:</strong> Additional penalties up to ₹1 lakh</li>
                            <li><strong>Non-Disclosure:</strong> Legal action and prosecution</li>
                            <li><strong>ROC Striking Off:</strong> Risk of company being struck off</li>
                        </ul>
                    </div>
                </div>

                <!-- Benefits -->
                <div class="content-section">
                    <h2>Benefits of Changing the Registered Office</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Strategic Location:</strong> Move to a more business-friendly location</li>
                        <li><strong>Cost Savings:</strong> Reduce operational costs and overheads</li>
                        <li><strong>Business Expansion:</strong> Facilitate growth and expansion plans</li>
                        <li><strong>Regulatory Compliance:</strong> Ensure compliance with local regulations</li>
                        <li><strong>Tax Benefits:</strong> Avail of state-specific tax incentives</li>
                    </ul>
                </div>

                <!-- Consequences of Non-compliance -->
                <div class="content-section">
                    <h2>Consequences of Non-compliance</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Penalties:</strong> Heavy financial penalties for late or incorrect filing</li>
                        <li><strong>Legal Challenges:</strong> Legal proceedings and court cases</li>
                        <li><strong>Business Disruption:</strong> Operational difficulties and restrictions</li>
                        <li><strong>Reputation Damage:</strong> Loss of credibility and business opportunities</li>
                        <li><strong>Regulatory Action:</strong> ROC action and potential striking off</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about registered office address change, eligibility, documents, process, benefits, costs, and timelines.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the purpose of the registered office of a company?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>The registered office serves as the official address for all legal communications, statutory notices, and official correspondence. It's where the company's statutory books and records are maintained, and it determines the jurisdiction of the ROC.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How long does it take to change a registered office address?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The process typically takes 15-30 days from filing to approval, depending on the type of change and completeness of documentation. Intra-city changes are usually faster than inter-state changes.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are required for address change?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include board resolution, shareholder resolution, address proof of new office, NOC from landlord, Form INC-22, and updated statutory registers.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is shareholder approval required for address change?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, shareholder approval is required through an EGM. For inter-state changes, a special resolution with 75% majority is mandatory.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the fees for changing registered office?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>ROC filing fees range from ₹200 to ₹600 depending on authorized capital. Additional fees may apply for inter-state changes and professional services.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can a company change its registered office multiple times?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, there's no limit on the number of times a company can change its registered office, but each change must comply with regulatory requirements and proper documentation.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if we don't file the address change?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Non-filing attracts penalties of ₹1,000 per day, legal action, and potential striking off of the company from ROC records.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can we change address to another state?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, inter-state address changes are allowed but require special resolution, additional documentation, and approval from both ROC offices.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How does Asktrix help with address change?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides end-to-end support including documentation preparation, form filing, ROC liaison, compliance tracking, and expert guidance throughout the process.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is Form INC-22?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Form INC-22 is the official form for notifying ROC about change of registered office address. It must be filed within 30 days of the change.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Ensuring smooth registered office address change with Asktrix provides not only legal compliance but also ongoing support for your business growth. Our comprehensive approach ensures your company meets all regulatory requirements efficiently and accurately.
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
                                   value="change-of-registered-office">
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
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">How can we help you?</label>
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
