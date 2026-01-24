@extends('layouts.app')

@section('title', 'Contact Us | Asktrix')
@section('meta_description', 'Get in touch with Asktrix. Our team is available Monday to Saturday from 10am to 5pm. Contact us via chat, email, or phone.')
@section('meta_keywords', 'contact Asktrix, business consulting contact, asktrix contact us, business services support')
@section('canonical_url', url('/contact-us'))

@section('content')
<div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <section class="relative py-16 md:py-24 bg-blue-900 text-white overflow-hidden">
        <!-- Pattern Background -->
        <div class="absolute inset-0 opacity-20">
            <div style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(255,255,255,0.1) 2px, rgba(255,255,255,0.1) 4px);"></div>
        </div>
        
        <!-- Abstract Shapes -->
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-900 rounded-full blur-3xl opacity-30 transform translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-900 rounded-full blur-3xl opacity-20 transform -translate-x-1/3 -translate-y-1/3"></div>
        
        <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-4">Contact Us</h1>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-6 md:py-8">
        <!-- Form Section -->
        <section class="mb-16">
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left: Form -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Connect With Our Team</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Collaboratively promote client-focused convergence vis-a-vis customer directed alignments via standardized infrastructures.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Our availability Monday To Saturday 10am to 6pm
                    </p>

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4" id="contactForm">
                        @csrf
                        <input type="hidden" name="service_type" value="contact-us">
                        
                        <!-- Success/Error Message -->
                        <div id="ajaxMessage" class="hidden"></div>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Fullname *</label>
                                <input type="text" id="name" name="name" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                                    placeholder="Enter your full name">
                            </div>
                            <div>
                                <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Phone *</label>
                                <input type="tel" 
                                       id="mobile" 
                                       name="mobile" 
                                       required
                                       value="{{ old('mobile') }}"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent mobile-form-input @error('mobile') border-red-500 @enderror"
                                       placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                                placeholder="Enter your email address">
                        </div>
                        <div>
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="query" name="query" rows="6" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none resize-y"
                                placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" id="submitBtn"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md transition-colors duration-300">
                            <span id="submitText">Get in Touch</span>
                            <span id="loadingText" class="hidden">
                                <i class="fas fa-spinner fa-spin mr-2"></i> Submitting...
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Right: Illustration -->
                <div class="hidden md:block">
                    <div class="bg-white rounded-2xl shadow-xl p-8 relative">
                        <!-- Illustration SVG -->
                        <svg width="100%" height="400" viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Large envelope -->
                            <rect x="180" y="120" width="180" height="130" rx="8" fill="#FED44A" stroke="#D4A746" stroke-width="3"/>
                            <line x1="180" y1="170" x2="360" y2="170" stroke="#D4A746" stroke-width="3"/>
                            <rect x="200" y="90" width="140" height="100" rx="6" fill="#FED44A"/>
                            <rect x="200" y="90" width="140" height="80" rx="6" fill="#E8C945"/>
                            <line x1="200" y1="140" x2="340" y2="140" stroke="#D4A746" stroke-width="2"/>
                            
                            <!-- Purple arrow -->
                            <path d="M80 250 Q160 220 180 250" stroke="#9333EA" stroke-width="8" stroke-linecap="round" fill="none"/>
                            <path d="M170 240 L180 250 L175 245" stroke="#9333EA" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                            
                            <!-- Person 1 (blue pants) -->
                            <circle cx="120" cy="280" r="25" fill="#FDB852"/>
                            <rect x="105" y="305" width="30" height="40" rx="4" fill="#3B82F6"/>
                            <path d="M80 320 Q80 300 105 305" stroke="#1E40AF" stroke-width="6" fill="none"/>
                            
                            <!-- Person 2 (green top with megaphone) -->
                            <circle cx="380" cy="180" r="22" fill="#FDB852"/>
                            <rect x="368" y="202" width="24" height="35" rx="3" fill="#22C55E"/>
                            <circle cx="390" cy="210" r="8" fill="#16A34A"/>
                            <path d="M398 210 Q405 200 415 205" stroke="#16A34A" stroke-width="6" fill="none" stroke-linecap="round"/>
                            
                            <!-- Small plants -->
                            <circle cx="80" cy="320" r="15" fill="#22C55E"/>
                            <circle cx="85" cy="310" r="12" fill="#16A34A"/>
                            <circle cx="420" cy="300" r="18" fill="#22C55E"/>
                            <circle cx="425" cy="290" r="14" fill="#16A34A"/>
                            
                            <!-- Geometric shapes -->
                            <rect x="70" y="160" width="40" height="40" rx="8" fill="#9333EA" opacity="0.6"/>
                            <circle cx="420" cy="220" r="30" fill="#3B82F6" opacity="0.4"/>
                            <polygon points="440,100 460,130 420,130" fill="#9333EA" opacity="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Methods -->
        <section>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1: Chat with us -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fab fa-whatsapp text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Chat with us</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        We've got live Social Experts waiting to help you <strong>Monday to Saturday</strong> from <strong>10am to 6pm</strong>
                    </p>
                    <a href="https://wa.me/917823954297" target="_blank" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md transition-colors duration-300 text-center">
                        Chat with us
                    </a>
                </div>

                <!-- Card 2: Email Us -->
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=contact@asktrix.com&su=Contact%20Inquiry&body=Asktrix%20Contact%20Team%2C%0A%0A" target="_blank" rel="noopener noreferrer" class="block bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-envelope text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Email Us</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Simple drop us an email at <strong>contact@asktrix.com</strong> and you'll receive a reply within 24 hours
                    </p>
                    <div class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md transition-colors duration-300 text-center">
                        Email Us
                    </div>
                </a>

                <!-- Card 3: Give us a call -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-phone text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Give us a call</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Give us a ring. Our Experts are standing by <strong>Monday to Saturday</strong> from <strong>10am to 6pm</strong>
                    </p>
                    <a href="#" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md transition-colors duration-300 text-center">
                        +91 7823954297
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Contact Form Success Modal -->
<div id="contactModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg p-8 max-w-md mx-4">
        <div class="text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-600 text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Thank You!</h3>
            <p class="text-gray-600 mb-6">We've received your message and will get back to you soon.</p>
            <button onclick="closeModal()" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition-colors">
                Close
            </button>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
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

    function closeModal() {
        document.getElementById('contactModal').classList.add('hidden');
        document.getElementById('contactModal').classList.remove('flex');
    }
</script>
@endsection

