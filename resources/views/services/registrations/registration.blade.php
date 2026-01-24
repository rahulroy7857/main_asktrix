@extends('layouts.app')

@section('title', 'Hassle-Free Registration Services for Your Business - Asktrix')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-10 px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-6">
            Hassle-Free Registration Services for Your Business
        </h1>
        <p class="text-sm sm:text-base md:text-lg text-gray-600 mb-6 md:mb-8 leading-relaxed max-w-4xl mx-auto">
            Start your business journey with confidence. Our team handles every step of the registration process, making it simple and stress-free.
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
                    
                    <!-- GST Registration -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-cogs text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">GST Registration</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Goods and Services Tax (GST) is a comprehensive tax levied on the supply of goods and services across India. It replaces multiple indirect taxes
                                </p>
                                <a href="{{ route('gst-registration') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- Professional Tax Registration -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file-alt text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">Professional Tax Registration</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Professional Tax is a state-level tax levied on individuals earning an income from employment, trades, or professions.
                                </p>
                                <a href="{{ route('professional-tax-registration') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- MSME Registration -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-building text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">MSME Registration</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Micro, Small, and Medium Enterprises (MSMEs) are crucial for the economic development of India. They contribute significantly to the country's
                                </p>
                                <a href="{{ route('msme-registration') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- ESI Registration -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file-invoice text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">ESI Registration</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    The Employee State Insurance (ESI) scheme is a significant social security program in India aimed at providing financial protection to employees
                                </p>
                                <a href="{{ route('esic-registration') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- EPF Registration -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file-contract text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">EPF Registration</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Provident Fund (PF) Registration is a crucial process for employers in India, aimed at providing financial security and retirement benefits to employees.
                                </p>
                                <a href="{{ route('epf-registration') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- RCMC Registration -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">RCMC Registration</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    Registration-Cum-Membership Certificate (RCMC) is a mandatory requirement for exporters in India who wish to avail themselves of various benefits and incentives
                                </p>
                                <a href="{{ route('rcmc-registration') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- STARTUP India Registration -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-chart-line text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">STARTUP India Registration</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    The Government of India launched the Startup India initiative to promote innovation, create job opportunities, and drive sustainable economic
                                </p>
                                <a href="{{ route('startup-india-registration') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                    <!-- Digital Signature Certificate -->
                    <div class="service-card bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-certificate text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">Digital Signature Certificate</h3>
                                <p class="text-gray-600 text-sm mb-3 md:mb-4 leading-relaxed">
                                    A Digital Signature Certificate (DSC) serves as an electronic form of signature to validate and verify the identity of individuals and entities conducting business
                                </p>
                                <a href="{{ route('digital-signature-online') }}" class="text-blue-600 font-medium text-sm hover:text-blue-800">View More...</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-lg p-4 md:p-6 shadow-sm border border-gray-100 sticky top-24">
                    <h3 class="text-lg font-bold text-blue-900 mb-6">Clear your doubts</h3>
                    
                    <!-- JSON Message Display -->
                    <div id="ajaxMessage" class="hidden mb-3 md:mb-4"></div>
                    
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <div>                                
                                <input type="hidden" 
                                       id="service_type" 
                                       name="service_type" 
                                       value="registrations">
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
                                          placeholder="Describe your registration requirements...">{{ old('query') }}</textarea>
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