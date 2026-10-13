@extends('layouts.app')

@section('title', $pageTitle)
@section('meta_description', $metaDescription)

@section('styles')
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<style>
    .Asktrix-blue { color: #1a237e; }
    .bg-Asktrix-blue { background-color: #1a237e; }
    .Asktrix-green { color: #4caf50; }
    .bg-Asktrix-green { background-color: #4caf50; }
    .border-Asktrix-green { border-color: #4caf50; }

    .form-sidebar {
        background: #ffffff;
        border: 2px solid #e0e7ff;
        border-radius: 16px;
        position: sticky;
        top: 96px;
        box-shadow: 0 10px 25px -5px rgba(26, 35, 126, 0.08);
    }
    .faq-item {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        margin-bottom: 12px;
        overflow: hidden;
        transition: all 0.2s ease;
    }
    .faq-item:hover {
        border-color: #cbd5e1;
    }
    .faq-question {
        background: #f8fafc;
        padding: 18px 24px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background-color 0.2s ease;
    }
    .faq-question:hover {
        background: #f1f5f9;
    }
    .faq-answer {
        padding: 0 24px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0, 1, 0, 1);
        background: white;
    }
    .faq-answer.active {
        padding: 20px 24px;
        max-height: 800px;
        transition: all 0.3s cubic-bezier(1, 0, 1, 0);
    }
    .faq-icon {
        transition: transform 0.3s ease;
    }
    .faq-icon.rotated {
        transform: rotate(180deg);
    }
    .flow-step-box {
        position: relative;
        transition: all 0.2s ease;
    }
    .flow-step-box:hover {
        transform: translateY(-2px);
    }
    .currency-btn.active {
        background-color: #1a237e;
        color: #ffffff;
    }
</style>
@endsection

@section('content')
<!-- Breadcrumbs -->
<div class="bg-slate-100 border-b border-slate-200 py-3 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto flex items-center space-x-2 text-xs sm:text-sm text-gray-600">
        <a href="{{ route('home') }}" class="hover:text-blue-900 transition-colors">Home</a>
        <i class="fas fa-chevron-right text-[10px] text-gray-400"></i>
        <a href="{{ route('digital.services') }}" class="hover:text-blue-900 transition-colors">Services</a>
        <i class="fas fa-chevron-right text-[10px] text-gray-400"></i>
        <span class="text-blue-900 font-semibold">{{ $service['name'] }}</span>
    </div>
</div>

<!-- Service Hero Section -->
<section class="bg-gradient-to-b from-blue-900 via-indigo-950 to-slate-900 text-white py-12 md:py-20 px-4 sm:px-6 relative overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <!-- Left Info -->
            <div class="lg:col-span-7">
                <div class="inline-flex items-center space-x-2 bg-blue-500/20 border border-blue-400/30 text-blue-200 px-3.5 py-1 rounded-full text-xs font-semibold mb-4">
                    <span class="w-2 h-2 rounded-full bg-green-400"></span>
                    <span>{{ $service['category'] }}</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 leading-tight">
                    {{ $service['name'] }}
                </h1>
                <p class="text-lg md:text-xl text-blue-200 font-medium mb-6">
                    {{ $service['tagline'] }}
                </p>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed mb-8 max-w-2xl font-light">
                    {{ $service['full_description'] }}
                </p>

                <!-- Quick Highlights -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 mb-8">
                    <div class="bg-white/10 backdrop-blur-md border border-white/10 p-3 rounded-xl">
                        <div class="text-green-400 font-bold text-lg">Fast Delivery</div>
                        <div class="text-xs text-blue-200">Agile Milestones</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/10 p-3 rounded-xl">
                        <div class="text-green-400 font-bold text-lg">100% Owned</div>
                        <div class="text-xs text-blue-200">Full IP & Source Code</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/10 p-3 rounded-xl col-span-2 sm:col-span-1">
                        <div class="text-green-400 font-bold text-lg">24/7 SLA</div>
                        <div class="text-xs text-blue-200">Dedicated Support</div>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-4">
                    <a href="#inquirySidebar" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-xl text-sm transition-all shadow-lg hover:shadow-green-500/30 flex items-center space-x-2">
                        <span>Get Instant Custom Quote</span>
                        <i class="fas fa-arrow-down text-xs"></i>
                    </a>
                    <a href="https://wa.me/917823954297?text=Hi%20Asktrix,%20I'm%20interested%20in%20{{ urlencode($service['name']) }}" target="_blank" class="bg-white/10 hover:bg-white/20 text-white font-semibold px-6 py-3 rounded-xl text-sm border border-white/20 transition-all flex items-center space-x-2">
                        <i class="fab fa-whatsapp text-green-400 text-base"></i>
                        <span>Talk on WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Right Hero Image with Glass Card Overlay -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10 group">
                    <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}" class="w-full h-80 sm:h-96 object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    
                    <div class="absolute bottom-4 left-4 right-4 bg-slate-900/90 backdrop-blur-md p-4 rounded-xl border border-white/10 text-white">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-xs font-semibold text-blue-300">Certified Deliverable</span>
                            <span class="text-xs bg-green-500 text-white px-2 py-0.5 rounded font-bold">{{ $service['badge'] }}</span>
                        </div>
                        <div class="text-sm font-bold">{{ $service['name'] }} Implementation</div>
                        <div class="text-xs text-slate-300 mt-1">Production-ready engineering with documentation & warranty.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Grid with Sticky Form Sidebar -->
<section class="py-12 md:py-16 px-4 sm:px-6 bg-slate-50">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
            
            <!-- Left Main Content Column (7 cols) -->
            <div class="lg:col-span-7 space-y-12">
                
                <!-- Interactive Pricing & Market Selection Card -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-blue-600 block mb-1">Approved Price Book</span>
                            <h2 class="text-2xl font-bold text-gray-900">Starting Price & Plans</h2>
                        </div>

                        <!-- Currency Switcher (From Image 2 Spec) -->
                        <div class="inline-flex bg-slate-100 p-1 rounded-xl border border-slate-200">
                            <button type="button" onclick="switchDetailCurrency('INR')" id="detailInrBtn" class="currency-btn active px-4 py-1.5 rounded-lg text-xs font-bold transition-all flex items-center space-x-1">
                                <span>🇮🇳 INR (₹)</span>
                            </button>
                            <button type="button" onclick="switchDetailCurrency('USD')" id="detailUsdBtn" class="currency-btn px-4 py-1.5 rounded-lg text-xs font-bold text-gray-600 hover:text-gray-900 transition-all flex items-center space-x-1">
                                <span>🌐 USD ($)</span>
                            </button>
                        </div>
                    </div>

                    <div class="py-6 flex flex-col sm:flex-row sm:items-baseline justify-between gap-4">
                        <div>
                            <div class="flex items-baseline space-x-2">
                                <span id="detailPriceInr" class="text-3xl sm:text-4xl font-black text-blue-900">{{ $service['inr_price'] }}</span>
                                <span id="detailPriceUsd" class="hidden text-3xl sm:text-4xl font-black text-blue-900">{{ $service['usd_price'] }}</span>
                                <span class="text-sm text-gray-500 font-medium">/ {{ $service['price_period'] }}</span>
                            </div>
                            @if(isset($service['proposed_price_range']))
                                <p class="text-xs text-indigo-600 font-semibold mt-1">Proposed Range: {{ $service['proposed_price_range'] }}</p>
                            @endif
                        </div>
                        <span class="inline-flex items-center text-xs font-semibold px-3 py-1 bg-green-50 text-green-700 border border-green-200 rounded-full">
                            <i class="fas fa-check-circle mr-1.5"></i> Custom Scope Available
                        </span>
                    </div>

                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200/80 text-xs text-gray-600 leading-relaxed mb-6">
                        <strong class="text-gray-800">Pricing Note:</strong> {{ $service['pricing_notes'] }}
                        <div class="mt-1 text-gray-500">India prices are in INR; international prices are USD reference prices. Final billing is confirmed after scope assessment.</div>
                    </div>

                    <!-- Target Customers & Value Proposition (Images 3 & 4) -->
                    @if(isset($service['target_customers']))
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-slate-100">
                            <div>
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide block">Target Customers</span>
                                <p class="text-sm text-gray-800 mt-1 font-medium">{{ $service['target_customers'] }}</p>
                            </div>
                            @if(isset($service['value_proposition']))
                                <div>
                                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide block">Value Proposition</span>
                                    <p class="text-sm text-gray-800 mt-1 font-medium">{{ $service['value_proposition'] }}</p>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Custom Flowchart / Architecture Section (Images 3 & 4) -->
                @if(isset($service['mvp_diagram_steps']))
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-900 flex items-center justify-center font-bold text-lg">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">Architectural Flowchart</span>
                                <h3 class="text-xl font-bold text-gray-900">{{ $service['mvp_diagram_title'] }}</h3>
                            </div>
                        </div>

                        <!-- Vertical Stepper Flow -->
                        <div class="space-y-3 relative before:absolute before:left-5 before:top-4 before:bottom-4 before:w-0.5 before:bg-blue-100">
                            @foreach($service['mvp_diagram_steps'] as $flow)
                                <div class="flow-step-box flex items-start space-x-4 bg-slate-50 hover:bg-blue-50/50 p-4 rounded-xl border border-slate-200 transition-all relative z-10">
                                    <div class="w-10 h-10 rounded-full {{ $loop->last ? 'bg-green-500 text-white' : ($loop->first ? 'bg-blue-900 text-white' : 'bg-white text-blue-900 border border-blue-200') }} flex items-center justify-center font-black text-sm flex-shrink-0 shadow-sm">
                                        {{ $flow['step'] }}
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-sm font-bold text-gray-900 mb-0.5">{{ $flow['title'] }}</h4>
                                        <p class="text-xs text-gray-600 leading-relaxed">{{ $flow['desc'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Safeguards (if customer support) -->
                        @if(isset($service['safeguards']))
                            <div class="mt-8 pt-6 border-t border-slate-100">
                                <h4 class="text-sm font-bold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-shield-alt text-green-600 mr-2"></i>
                                    AI Safeguards, Knowledge & Control Policies
                                </h4>
                                <ul class="space-y-2">
                                    @foreach($service['safeguards'] as $sg)
                                        <li class="text-xs text-gray-700 flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                            <span>{{ $sg }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                @else
                    <!-- Standard 4-Step Engineering Workflow -->
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                        <div class="mb-6">
                            <span class="text-xs font-bold uppercase tracking-wider text-blue-600">Structured Delivery</span>
                            <h3 class="text-xl font-bold text-gray-900">How We Execute & Deliver</h3>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($service['workflow'] as $w)
                                <div class="bg-slate-50 p-5 rounded-xl border border-slate-200 flex flex-col justify-between">
                                    <div>
                                        <span class="text-2xl font-black text-blue-900/30 mb-2 block">{{ $w['step'] }}</span>
                                        <h4 class="text-base font-bold text-gray-900 mb-1">{{ $w['title'] }}</h4>
                                        <p class="text-xs text-gray-600 leading-relaxed">{{ $w['desc'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Core Features Grid -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                    <div class="mb-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-600">Feature Specifications</span>
                        <h3 class="text-xl font-bold text-gray-900">Key Capabilities & Included Features</h3>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($service['features'] as $feat)
                            <div class="flex items-start space-x-3 p-3.5 bg-slate-50 rounded-xl border border-slate-100">
                                <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="text-xs sm:text-sm font-medium text-gray-800 leading-snug">{{ $feat }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Deliverables Checklist -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                    <div class="mb-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-600">What You Receive</span>
                        <h3 class="text-xl font-bold text-gray-900">Project Deliverables</h3>
                    </div>

                    <div class="space-y-3">
                        @foreach($service['deliverables'] as $del)
                            <div class="flex items-center space-x-3 text-sm text-gray-800 p-3 bg-blue-50/40 rounded-xl border border-blue-100/60">
                                <i class="fas fa-box-open text-blue-600 text-base"></i>
                                <span class="font-medium">{{ $del }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tech Stack Badges -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Technologies & Tooling</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($service['tech_stack'] as $tech)
                            <span class="px-3.5 py-1.5 bg-slate-100 text-slate-800 text-xs font-semibold rounded-lg border border-slate-200 flex items-center space-x-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                                <span>{{ $tech }}</span>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Secondary Gallery Image Demo -->
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
                    <img src="{{ $service['secondary_image'] }}" alt="{{ $service['name'] }} Implementation Demo" class="w-full h-64 object-cover">
                </div>

                <!-- FAQs Section -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                    <div class="mb-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-600">Got Questions?</span>
                        <h3 class="text-xl font-bold text-gray-900">Frequently Asked Questions</h3>
                    </div>

                    <div class="space-y-3">
                        @foreach($service['faqs'] as $index => $faq)
                            <div class="faq-item">
                                <div class="faq-question" onclick="toggleFaq('faq-{{ $index }}')">
                                    <span class="font-semibold text-sm sm:text-base text-gray-800 pr-4">{{ $faq['q'] }}</span>
                                    <i class="fas fa-chevron-down faq-icon text-xs text-gray-500" id="icon-faq-{{ $index }}"></i>
                                </div>
                                <div class="faq-answer text-xs sm:text-sm text-gray-600 leading-relaxed" id="content-faq-{{ $index }}">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- Right Column: Sticky Inquiry Sidebar Form (5 cols) -->
            <div class="lg:col-span-5" id="inquirySidebar">
                <div class="form-sidebar p-6 sm:p-8">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-blue-50 text-blue-900 mb-3 text-xl">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Get a Free Scope & Quote</h3>
                        <p class="text-xs text-gray-500 mt-1">Inquire for {{ $service['name'] }}. We respond in 24 hours.</p>
                    </div>

                    <!-- Alerts -->
                    <div id="formSuccessAlert" class="hidden mb-4 p-4 rounded-xl bg-green-50 border border-green-200 text-green-800 text-xs">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-check-circle text-green-600 text-sm"></i>
                            <span id="formSuccessMsg" class="font-semibold">Thank you for your inquiry!</span>
                        </div>
                    </div>
                    <div id="formErrorAlert" class="hidden mb-4 p-4 rounded-xl bg-red-50 border border-red-200 text-red-800 text-xs">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-exclamation-circle text-red-600 text-sm"></i>
                            <span id="formErrorMsg" class="font-semibold">Please check the form fields.</span>
                        </div>
                    </div>

                    <form id="digitalContactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="service_type" value="{{ $service['slug'] }}">
                        <input type="hidden" name="country_code" id="country_code_input" value="+91">

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Full Name *</label>
                            <input type="text" name="name" required class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="e.g. Rahul Sharma">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Business Email *</label>
                            <input type="email" name="email" required class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="name@company.com">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Phone / WhatsApp Number *</label>
                            <input type="tel" id="mobileInput" name="mobile" required class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="9876543210">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Project Details & Requirements *</label>
                            <textarea name="query" rows="3" required class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Describe your timeline, current stack, or specific features..."></textarea>
                        </div>

                        <button type="submit" id="digitalSubmitBtn" class="w-full bg-blue-900 hover:bg-blue-800 text-white font-semibold py-3 px-4 rounded-xl text-sm transition-all shadow-md hover:shadow-lg flex items-center justify-center space-x-2">
                            <span id="btnText">Request Consultation</span>
                            <i id="btnSpinner" class="fas fa-spinner fa-spin hidden"></i>
                        </button>
                    </form>

                    <div class="mt-6 pt-6 border-t border-slate-100 space-y-2 text-xs text-gray-500 text-center">
                        <div class="flex items-center justify-center space-x-1.5 text-gray-600">
                            <i class="fas fa-lock text-green-600"></i>
                            <span>100% Confidential. NDA available upon request.</span>
                        </div>
                        <div>
                            Or reach us directly at <a href="tel:+917004670611" class="text-blue-900 font-bold hover:underline">+91 7004670611</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Related Services Section -->
        <div class="mt-16 pt-12 border-t border-slate-200">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Explore Complementary Services</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedServices as $rel)
                    <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div>
                            <span class="text-[11px] font-bold text-blue-600 uppercase tracking-wide block mb-1">{{ $rel['category'] }}</span>
                            <h4 class="text-base font-bold text-gray-900 mb-2">{{ $rel['name'] }}</h4>
                            <p class="text-xs text-gray-600 line-clamp-2 mb-4">{{ $rel['short_description'] }}</p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs font-bold text-blue-900">{{ $rel['inr_price'] }}</span>
                            <a href="{{ url($rel['slug']) }}" class="text-xs font-semibold text-blue-600 hover:text-blue-800 flex items-center space-x-1">
                                <span>Learn More</span>
                                <i class="fas fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endsection

@section('scripts')
<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    // FAQ Toggle
    function toggleFaq(id) {
        const content = document.getElementById('content-' + id);
        const icon = document.getElementById('icon-' + id);
        if (content.classList.contains('active')) {
            content.classList.remove('active');
            icon.classList.remove('rotated');
        } else {
            content.classList.add('active');
            icon.classList.add('rotated');
        }
    }

    // Currency Switcher for Details Page
    function switchDetailCurrency(curr) {
        localStorage.setItem('asktrix_currency', curr);
        const inrPrice = document.getElementById('detailPriceInr');
        const usdPrice = document.getElementById('detailPriceUsd');
        const inrBtn = document.getElementById('detailInrBtn');
        const usdBtn = document.getElementById('detailUsdBtn');

        if (curr === 'USD') {
            inrPrice.classList.add('hidden');
            usdPrice.classList.remove('hidden');
            inrBtn.classList.remove('active');
            inrBtn.classList.add('text-gray-600');
            usdBtn.classList.add('active');
            usdBtn.classList.remove('text-gray-600');
        } else {
            usdPrice.classList.add('hidden');
            inrPrice.classList.remove('hidden');
            usdBtn.classList.remove('active');
            usdBtn.classList.add('text-gray-600');
            inrBtn.classList.add('active');
            inrBtn.classList.remove('text-gray-600');
        }
    }

    // Initialize intl-tel-input
    document.addEventListener('DOMContentLoaded', function() {
        const mobileInput = document.querySelector("#mobileInput");
        if (mobileInput) {
            const iti = window.intlTelInput(mobileInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/utils.js",
            });

            mobileInput.addEventListener('countrychange', function() {
                const countryData = iti.getSelectedCountryData();
                document.getElementById('country_code_input').value = '+' + countryData.dialCode;
            });
        }

        // Check stored currency preference
        const stored = localStorage.getItem('asktrix_currency') || 'INR';
        switchDetailCurrency(stored);

        // AJAX Form Submission
        const form = document.getElementById('digitalContactForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = document.getElementById('digitalSubmitBtn');
                const btnText = document.getElementById('btnText');
                const btnSpinner = document.getElementById('btnSpinner');
                const successAlert = document.getElementById('formSuccessAlert');
                const errorAlert = document.getElementById('formErrorAlert');

                successAlert.classList.add('hidden');
                errorAlert.classList.add('hidden');

                submitBtn.disabled = true;
                btnText.textContent = 'Submitting...';
                btnSpinner.classList.remove('hidden');

                const formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: formData
                })
                .then(response => response.json().then(data => ({ status: response.status, body: data })))
                .then(res => {
                    submitBtn.disabled = false;
                    btnText.textContent = 'Request Consultation';
                    btnSpinner.classList.add('hidden');

                    if (res.body.success) {
                        successAlert.classList.remove('hidden');
                        document.getElementById('formSuccessMsg').textContent = res.body.message || 'Inquiry submitted successfully!';
                        form.reset();
                    } else {
                        errorAlert.classList.remove('hidden');
                        let errText = res.body.message || 'Error submitting inquiry. Please check the fields.';
                        if (res.body.errors) {
                            errText = Object.values(res.body.errors).flat().join(' ');
                        }
                        document.getElementById('formErrorMsg').textContent = errText;
                    }
                })
                .catch(err => {
                    submitBtn.disabled = false;
                    btnText.textContent = 'Request Consultation';
                    btnSpinner.classList.add('hidden');
                    errorAlert.classList.remove('hidden');
                    document.getElementById('formErrorMsg').textContent = 'An unexpected error occurred. Please try again.';
                });
            });
        }
    });
</script>
@endsection
