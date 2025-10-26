@extends('layouts.app')

@section('title', 'Incorporation Services - Asktrix')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-10 px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6">
            {{ $pageTitle }}
        </h1>
        <p class="text-sm sm:text-base md:text-lg text-gray-600 mb-6 md:mb-8 max-w-4xl mx-auto">
            {{ $pageSubtitle }}
        </p>
    </div>
</section>

<!-- Main Content Section -->
<section class="bg-white py-10 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-4 md:p-6 md:gap-8">
            <!-- Services Grid -->
            <div class="lg:col-span-2">
                <div class="grid md:grid-cols-2 gap-4 md:p-6">
                    @foreach($services as $service)
                    <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="{{ $service['icon'] }} text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-blue-900 mb-3">{{ $service['title'] }}</h3>
                                <p class="text-gray-600 mb-3 md:mb-4 leading-relaxed text-sm">
                                    {{ $service['description'] }}
                                </p>
                                <a href="{{ $service['link'] }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors text-sm">
                                    View More...
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Contact Form Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-lg p-8 sticky top-8">
                    <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-blue-900 mb-6">Clear your doubts</h2>
                    
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

                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <div>                                
                                <input type="hidden" 
                                       id="service_type" 
                                       name="service_type" 
                                       value="incorporation">
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
                                <span id="submitText">Get Started</span>
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

<!-- Why Choose Us Section -->
<section class="bg-gray-50 py-16 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-bold text-blue-900 mb-3 md:mb-4">Why Choose {{ $companyName }}?</h3>
                <ul class="space-y-3">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span class="text-gray-700">Expert guidance from experienced professionals</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span class="text-gray-700">Fast and efficient service delivery</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span class="text-gray-700">Competitive pricing with transparent costs</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span class="text-gray-700">24/7 customer support</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span class="text-gray-700">100% compliance guarantee</span>
                    </li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-bold text-blue-900 mb-3 md:mb-4">Our Process</h3>
                <div class="space-y-3 md:space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 font-bold text-sm">1</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Initial Consultation</h4>
                            <p class="text-gray-600 text-sm">We understand your business requirements and provide tailored solutions</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 font-bold text-sm">2</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Document Preparation</h4>
                            <p class="text-gray-600 text-sm">Our experts prepare all necessary documents and forms</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 font-bold text-sm">3</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Registration & Filing</h4>
                            <p class="text-gray-600 text-sm">We handle all government filings and registrations</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 font-bold text-sm">4</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Completion & Support</h4>
                            <p class="text-gray-600 text-sm">Receive your certificates and ongoing compliance support</p>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>
@endsection

@section('styles')
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<style>
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
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 1px #3b82f6 !important;
    outline: none !important;
}

/* General form input focus styling - single line */
input:focus, textarea:focus {
    border-color: #6b7280 !important;
    box-shadow: 0 0 0 1px #6b7280 !important;
    outline: none !important;
}

/* Focus-visible styling with blue color */
input:focus-visible, textarea:focus-visible {
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 1px #3b82f6 !important;
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
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 1px #3b82f6 !important;
    outline: none !important;
}
</style>
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
</script>
@endsection
