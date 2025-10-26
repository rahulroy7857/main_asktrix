@extends('layouts.app')

@section('title', 'Copyright Registration - Asktrix')

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

    /* Comparison table styling */
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .comparison-table th,
    .comparison-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }
    .comparison-table th {
        background: #1a237e;
        color: white;
        font-weight: 600;
    }
    .comparison-table tr:hover {
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
                        Copyright Registration
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Copyright registration provides legal protection for your creative works including literary, artistic, musical, and other intellectual properties. This comprehensive guide will help you understand the copyright registration process, benefits, and requirements under the Copyright Act, 1957 in India.
                    </p>
                </div>

                <!-- Importance of Copyright Registration -->
                <div class="content-section">
                    <h2>Importance of Copyright Registration</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Legal Protection:</strong> Provides statutory protection against unauthorized use, reproduction, or distribution of your creative works</li>
                        <li><strong>Exclusive Rights:</strong> Grants exclusive rights to reproduce, distribute, perform, display, and create derivative works</li>
                        <li><strong>Deterrent Against Infringement:</strong> Acts as a deterrent against potential infringers and strengthens your legal position in disputes</li>
                        <li><strong>Monetization Opportunities:</strong> Enables licensing, franchising, and other commercial exploitation of your creative works</li>
                        <li><strong>Duration of Protection:</strong> Provides long-term protection (typically lifetime of author plus 60 years)</li>
                    </ul>
                </div>

                <!-- Types of Works Eligible for Copyright Registration -->
                <div class="content-section">
                    <h2>Types of Works Eligible for Copyright Registration</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Literary Works:</strong> Books, articles, blogs, scripts, computer programs, and other written content</li>
                        <li><strong>Musical Works:</strong> Songs, compositions, lyrics, and musical arrangements</li>
                        <li><strong>Dramatic Works:</strong> Plays, scripts, choreographic works, and pantomimes</li>
                        <li><strong>Artistic Works:</strong> Paintings, drawings, photographs, sculptures, architectural works, and graphic designs</li>
                        <li><strong>Films and Audiovisual Works:</strong> Movies, documentaries, videos, animations, and multimedia presentations</li>
                        <li><strong>Software and Computer Programs:</strong> Application software, websites, mobile apps, and digital content</li>
                    </ul>
                </div>

                <!-- Copyright Registration Process -->
                <div class="content-section">
                    <h2>Copyright Registration Process</h2>
                    <p>Our streamlined process ensures quick and hassle-free copyright registration:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Application Preparation</h3>
                                <p class="text-gray-600">Prepare the copyright application with details of the work, author information, and supporting documents. Ensure all required information is accurate and complete.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Form Submission</h3>
                                <p class="text-gray-600">Submit the completed copyright application form along with copies of the work and required fees to the Copyright Office or through online portal.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Examination</h3>
                                <p class="text-gray-600">The Copyright Office examines the application for completeness, originality, and compliance with copyright law requirements.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Issuance of Certificate</h3>
                                <p class="text-gray-600">Upon successful examination, the Copyright Office issues a registration certificate confirming your copyright protection.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Eligibility Criteria for Copyright Registration -->
                <div class="content-section">
                    <h2>Eligibility Criteria for Copyright Registration</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Originality:</strong> The work must be original and not copied from existing works</li>
                        <li><strong>Fixation:</strong> The work must be fixed in a tangible medium of expression</li>
                        <li><strong>Authorship:</strong> Must be created by a human author (not AI-generated without human input)</li>
                    </ul>
                </div>

                <!-- Validity and Duration -->
                <div class="content-section">
                    <h2>Validity and Duration</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Copyright Protection Start:</strong> Protection begins from the moment of creation and fixation in tangible form</li>
                        <li><strong>Duration in India:</strong> Lifetime of the author plus 60 years from the year following the author's death</li>
                    </ul>
                </div>

                <!-- Differences Between Copyright and Trademark -->
                <div class="content-section">
                    <h2>Differences Between Copyright and Trademark</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>Feature</th>
                                <th>Copyright</th>
                                <th>Trademark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Definition</strong></td>
                                <td>Protects original creative works</td>
                                <td>Protects brand names, logos, and symbols</td>
                            </tr>
                            <tr>
                                <td><strong>Scope of Protection</strong></td>
                                <td>Literary, artistic, musical works</td>
                                <td>Brand identity and commercial symbols</td>
                            </tr>
                            <tr>
                                <td><strong>Registration</strong></td>
                                <td>Optional but recommended</td>
                                <td>Required for full protection</td>
                            </tr>
                            <tr>
                                <td><strong>Duration</strong></td>
                                <td>Lifetime + 60 years</td>
                                <td>10 years (renewable)</td>
                            </tr>
                            <tr>
                                <td><strong>Infringement Consequences</strong></td>
                                <td>Civil and criminal penalties</td>
                                <td>Civil remedies and damages</td>
                            </tr>
                            <tr>
                                <td><strong>Ownership</strong></td>
                                <td>Author or creator</td>
                                <td>Business or individual</td>
                            </tr>
                            <tr>
                                <td><strong>Transferability</strong></td>
                                <td>Can be assigned or licensed</td>
                                <td>Can be assigned or licensed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about copyright registration, eligibility, process, benefits, and protection requirements.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is copyright?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Copyright is a legal right that grants the creator of an original work exclusive rights to its use and distribution, usually for a limited time, with the intent of enabling the creator to receive compensation for their intellectual investment.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How long does copyright last?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>In India, copyright protection lasts for the lifetime of the author plus 60 years from the year following the author's death. For works of joint authorship, the term is calculated from the death of the last surviving author.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is copyright registration mandatory?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, copyright registration is not mandatory. Copyright protection exists automatically from the moment a work is created and fixed in a tangible medium. However, registration provides additional legal benefits and stronger protection.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What types of works can be registered?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Copyright can be registered for literary works, musical works, dramatic works, artistic works, cinematographic films, sound recordings, and computer programs. The work must be original and fixed in a tangible medium.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How much does copyright registration cost?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The cost of copyright registration varies depending on the type of work and the Copyright Office fees. Asktrix provides comprehensive copyright registration services starting from ₹11,899 INR with expert guidance throughout the process.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How long does the registration process take?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The copyright registration process typically takes 2-6 months from the date of application submission, depending on the complexity of the work and the workload at the Copyright Office.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What documents are required for registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Required documents include copies of the work, application form, author's identity proof, address proof, and power of attorney (if applying through an agent). Specific requirements may vary based on the type of work.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can I register copyright for software?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, computer programs and software can be registered under copyright law. The source code, object code, and related documentation are all eligible for copyright protection.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if someone infringes my copyright?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Copyright infringement can result in civil remedies including injunctions, damages, and account of profits. In severe cases, criminal penalties may also apply. Registration strengthens your legal position in infringement cases.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How can Asktrix help with copyright registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides comprehensive copyright registration services including application preparation, document verification, submission to Copyright Office, follow-up, and expert guidance throughout the entire process to ensure successful registration.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Copyright registration is essential for protecting your creative works and intellectual property. Asktrix provides expert guidance and comprehensive support to help you navigate the copyright registration process efficiently and secure the protection your creative works deserve.
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
                        <div class="price-highlight">₹11,899 INR</div>
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
                                   value="copyright-registration">
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
