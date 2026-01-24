@extends('layouts.app')

@section('title', 'Comprehensive Accounting Solutions for Your Business Success - Asktrix')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-10 px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-6">
            Comprehensive Accounting Solutions for Your Business Success
        </h1>
        <p class="text-sm sm:text-base md:text-lg text-gray-600 mb-6 md:mb-8 leading-relaxed max-w-4xl mx-auto">
            Comprehensive Compliance, Accurate Accounting. Auditing, Financial Clarity, and Legal Assurance for Every Business Entity
        </p>
    </div>
</section>

<!-- Main Content Section -->
<section class="bg-white py-4 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Services Grid -->
            <div class="lg:col-span-2">
                <div class="grid md:grid-cols-2 gap-4 md:p-6 md:gap-8">
                    <!-- PVT LTD Compliance -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-book-open text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">PVT LTD Compliance</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    For a private limited company in India, adhering to compliance standards is essential to maintain credibility, avoid legal penalties, and foster business growth.
                                </p>
                                <a href="{{ route('company-annual-filing-roc') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- LLP Compliance -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-handshake text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">LLP Compliance</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Limited Liability Partnerships (LLPs) offer a blend of company and partnership benefits, and like any registered business, LLPs must comply with various statutory requirements.
                                </p>
                                <a href="{{ route('llp-annual-filing') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- Proprietorship Compliance -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">Proprietorship Compliance</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Proprietorship is one of the simplest forms of business, making it popular among small businesses and freelancers. However, proprietorships must still comply with various tax and regulatory requirements.
                                </p>
                                <a href="{{ route('proprietorship-compliance') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- GST Return Filing -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-receipt text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">GST Return Filing</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    GST return filing is a mandatory requirement for businesses registered under the Goods and Services Tax (GST) regime in India.
                                </p>
                                <a href="{{ route('gst-return-filing') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- Income Tax Return Filing -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-rupee-sign text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">Income Tax Return Filing</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Income Tax Return (ITR) filing is an essential compliance requirement for individuals, businesses, and other entities with income sources.
                                </p>
                                <a href="{{ route('income-tax-return-filing') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- TDS Return Filing -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file-invoice text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">TDS Return Filing</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">     
                                    Tax Deducted at Source (TDS) return filing is a mandatory compliance for entities deducting TDS, ensuring tax credit is accurately passed on to the payee.
                                </p>
                                <a href="{{ route('tds-return-filing') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- ESI Filing -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">ESI Filing</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Employee State Insurance (ESI) is a social security scheme provided by the Government of India under the Employee State Insurance Act, 1948.
                                </p>
                                <a href="{{ route('esi-return-filing') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- EPF Filing -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-piggy-bank text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">EPF Filing</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Provident Fund (PF) is a government-mandated retirement savings scheme for employees in India, governed by the Employees' Provident Fund.
                                </p>
                                <a href="{{ route('pf-return-filing') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- Professional Tax Filing -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-briefcase text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">Professional Tax Filing</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Professional Tax (PT) is a state-imposed tax on employees, professionals, and trades in India. This tax varies by state and is governed by state-specific laws and regulations.
                                </p>
                                <a href="{{ route('professional-tax-return-filing') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100 sticky top-24">
                    <h3 class="text-lg font-bold text-blue-900 mb-6">Clear your doubts</h3>
                    
                    <!-- AJAX Message Display -->
                    <div id="ajaxMessage" class="hidden mb-3 md:mb-4"></div>
                    
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <div>                                
                                <input type="hidden" 
                                       id="service_type" 
                                       name="service_type" 
                                       value="accounting-registration">
                            </div>
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       value="{{ old('name') }}"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent mobile-form-input @error('name') border-red-500 @enderror"
                                       placeholder="Enter your name">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       value="{{ old('email') }}"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent mobile-form-input @error('email') border-red-500 @enderror"
                                       placeholder="Enter your email">
                            </div>

                            <div>
                                <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Mobile</label>
                                <input type="tel" 
                                       id="mobile" 
                                       name="mobile" 
                                       required
                                       value="{{ old('mobile') }}"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent mobile-form-input @error('mobile') border-red-500 @enderror"
                                       placeholder="Enter your mobile number">
                            </div>

                            <div>
                                <label for="query" class="block text-sm font-medium text-gray-700 mb-2">Tell us more about your Query</label>
                                <textarea id="query" 
                                          name="query" 
                                          rows="3" 
                                          required
                                          class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent mobile-form-input @error('query') border-red-500 @enderror"
                                          placeholder="Describe your query in detail">{{ old('query') }}</textarea>
                            </div>

                            <button type="submit" 
                                    id="submitBtn"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 md:py-3 px-4 md:px-6 rounded-lg transition-colors">
                                <span id="submitText">contact us</span>
                                <span id="loadingText" class="hidden">
                                    <i class="fas fa-spinner fa-spin mr-2"></i>Submitting...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css">
<style>
    .service-card {
        transition: all 0.3s ease;
    }
    .service-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        border-color: #2563eb;
        border-width: 2px;
    }
    .contact-form {
        position: sticky;
        top: 100px;
    }
    .gradient-bg {
        background: linear-gradient(135deg, #1a237e 0%, #283593 100%);
    }
    
    /* International phone input styling */
    .iti {
        width: 100%;
    }
    
    .iti__country-list {
        z-index: 1000;
    }
    
    .iti__flag-container {
        padding: 0 8px;
    }
    
    .iti__selected-flag {
        padding: 0 8px;
    }
    
    .iti__country-name {
        font-size: 14px;
    }
    
    .iti__dial-code {
        font-size: 14px;
        color: #6b7280;
    }
    
    /* Error state for phone input */
    #mobile.error {
        border-color: #ef4444;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
    }
    
    /* Form styling improvements */
    .space-y-6 > div {
        margin-bottom: 1.5rem;
    }
    
    .space-y-6 > div:last-child {
        margin-bottom: 0;
    }
    
    /* Loading spinner animation */
    .fa-spinner {
        animation: spin 1s linear infinite;
    }
  
    
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>
@endsection

@section('scripts')
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
</script>
@endsection
