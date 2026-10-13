@extends('layouts.app')

@section('title', 'Digital, Web & AI Automation Services | Asktrix')
@section('meta_description', 'Explore Asktrix business technology services: Custom Website Development, CRM, SaaS Products, AI Voicebots & Chatbots, AI Workflow Automation, Cloud Hosting and Business Email with transparent pricing.')

@section('styles')
<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .glass-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 35px -10px rgba(26, 35, 126, 0.15);
    }
    .gradient-hero {
        background: radial-gradient(circle at 10% 20%, rgba(26, 35, 126, 0.95) 0%, rgba(13, 71, 161, 0.9) 90%), url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1920&q=80') center/cover;
    }
    .currency-pill.active {
        background-color: #1a237e;
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(26, 35, 126, 0.3);
    }
    .filter-tab.active {
        background-color: #1a237e;
        color: #ffffff;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="gradient-hero text-white py-16 md:py-24 px-4 sm:px-6 relative overflow-hidden">
    <div class="max-w-7xl mx-auto relative z-10 text-center">
        <div class="inline-flex items-center space-x-2 bg-blue-500/20 border border-blue-400/30 text-blue-200 px-4 py-1.5 rounded-full text-xs sm:text-sm font-medium mb-6">
            <span class="w-2 h-2 rounded-full bg-green-400 animate-ping"></span>
            <span>Technology, AI & Cloud Infrastructure Solutions</span>
        </div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
            Scale Faster with Modern <br class="hidden sm:inline">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 via-green-300 to-teal-200">Software & AI Automation</span>
        </h1>
        <p class="text-base sm:text-lg md:text-xl text-blue-100 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            From high-converting web applications and tailored CRMs to autonomous AI voicebots and workflow pipelines. Built by engineers, priced transparently for growing businesses.
        </p>

        <!-- Currency Selector Bar (Document Spec: Pricing selection & display flow) -->
        <div class="inline-flex items-center bg-white/10 backdrop-blur-md p-1.5 rounded-xl border border-white/20 shadow-xl mb-6">
            <span class="text-xs sm:text-sm font-medium text-blue-100 px-3">Select Pricing Market:</span>
            <div class="flex space-x-1 bg-white/20 p-1 rounded-lg">
                <button type="button" id="currBtnInr" onclick="setCurrency('INR')" class="currency-pill active px-4 py-1.5 rounded-md text-xs sm:text-sm font-semibold transition-all flex items-center space-x-1.5">
                    <span>🇮🇳</span>
                    <span>India (INR ₹)</span>
                </button>
                <button type="button" id="currBtnUsd" onclick="setCurrency('USD')" class="currency-pill px-4 py-1.5 rounded-md text-xs sm:text-sm font-semibold text-blue-100 hover:text-white transition-all flex items-center space-x-1.5">
                    <span>🌐</span>
                    <span>Global (USD $)</span>
                </button>
            </div>
        </div>
        <p class="text-xs text-blue-200/80">India prices in INR; international reference prices in USD. All plans subject to approved scoping.</p>
    </div>
</section>

<!-- Services Catalog Section -->
<section class="py-12 md:py-20 px-4 sm:px-6 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <!-- Filter Tabs & Quick Search -->
        <div class="flex flex-col lg:flex-row items-center justify-between gap-4 mb-12">
            <div class="flex flex-wrap items-center justify-center gap-2">
                @foreach($categories as $key => $name)
                    <button type="button" onclick="filterCategory('{{ $key }}')" class="filter-tab {{ $key === 'all' ? 'active' : 'bg-white text-gray-700 hover:bg-gray-100' }} px-5 py-2.5 rounded-lg text-sm font-medium border border-gray-200 shadow-sm transition-all" data-category="{{ $key }}">
                        {{ $name }}
                    </button>
                @endforeach
            </div>

            <!-- Instant Search Input -->
            <div class="relative w-full lg:w-72">
                <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                <input type="text" id="serviceSearch" onkeyup="searchServices()" placeholder="Search services..." class="w-full pl-10 pr-4 py-2.5 text-sm bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent shadow-sm">
            </div>
        </div>

        <!-- Services Grid (11 Services) -->
        <div id="servicesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $slug => $service)
                <div class="service-item glass-card rounded-2xl border border-gray-200/80 overflow-hidden flex flex-col justify-between" data-cat="{{ $service['category_id'] }}" data-title="{{ strtolower($service['name']) }} {{ strtolower($service['short_description']) }}">
                    <!-- Card Top / Image -->
                    <div>
                        <div class="relative h-52 overflow-hidden group">
                            <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            
                            <!-- Badges -->
                            <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
                                <span class="bg-blue-900/90 backdrop-blur-md text-white text-xs font-semibold px-2.5 py-1 rounded-md">
                                    {{ $service['category'] }}
                                </span>
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-green-500/90 backdrop-blur-md text-white text-xs font-bold px-2.5 py-1 rounded-md shadow-sm">
                                    {{ $service['badge'] }}
                                </span>
                            </div>

                            <div class="absolute bottom-3 left-4 right-4">
                                <h3 class="text-xl font-bold text-white drop-shadow-md">
                                    {{ $service['name'] }}
                                </h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6">
                            <p class="text-gray-600 text-sm line-clamp-2 mb-4 leading-relaxed">
                                {{ $service['short_description'] }}
                            </p>

                            <!-- Key Highlights (3 items) -->
                            <div class="space-y-2 mb-6">
                                @foreach(array_slice($service['features'], 0, 3) as $feat)
                                    <div class="flex items-start text-xs text-gray-700">
                                        <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>{{ $feat }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer / Pricing & CTA -->
                    <div class="p-6 pt-0 border-t border-gray-100 mt-auto">
                        <div class="flex items-end justify-between my-4">
                            <div>
                                <span class="text-xs uppercase tracking-wider text-gray-400 font-semibold block">Starting at</span>
                                <div class="price-display flex items-baseline space-x-1">
                                    <span class="price-inr text-2xl font-black text-blue-900">{{ $service['inr_price'] }}</span>
                                    <span class="price-usd hidden text-2xl font-black text-blue-900">{{ $service['usd_price'] }}</span>
                                </div>
                            </div>
                            <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">{{ $service['price_period'] }}</span>
                        </div>

                        <p class="text-[11px] text-gray-500 mb-4 italic">{{ $service['pricing_notes'] }}</p>

                        <a href="{{ url($service['slug']) }}" class="w-full bg-gradient-to-r from-blue-900 to-indigo-800 hover:from-blue-800 hover:to-indigo-700 text-white py-2.5 px-4 rounded-xl font-medium text-sm transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span>Explore Details & Pricing</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- No results message -->
        <div id="noResults" class="hidden text-center py-16">
            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-500 text-xl">
                <i class="fas fa-search"></i>
            </div>
            <h3 class="text-lg font-bold text-gray-800 mb-1">No services matched your query</h3>
            <p class="text-sm text-gray-500">Try searching for keywords like "AI", "Website", "CRM", "Hosting", or "Email".</p>
        </div>
    </div>
</section>

<!-- Trust & Technology Stack Banner -->
<section class="py-16 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-900 mb-3">Enterprise Stack & Seamless Integrations</h2>
        <p class="text-sm sm:text-base text-gray-600 max-w-2xl mx-auto mb-10">We engineer solutions on battle-tested frameworks and modern AI engines built for high availability and top tier security.</p>
        
        <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 text-gray-500">
            <span class="inline-flex items-center space-x-2 text-base font-semibold px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg"><i class="fab fa-laravel text-red-600 text-xl"></i><span>Laravel</span></span>
            <span class="inline-flex items-center space-x-2 text-base font-semibold px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg"><i class="fab fa-react text-cyan-500 text-xl"></i><span>React & Next.js</span></span>
            <span class="inline-flex items-center space-x-2 text-base font-semibold px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg"><i class="fas fa-robot text-purple-600 text-xl"></i><span>OpenAI & Claude</span></span>
            <span class="inline-flex items-center space-x-2 text-base font-semibold px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg"><i class="fab fa-aws text-orange-500 text-xl"></i><span>AWS Cloud</span></span>
            <span class="inline-flex items-center space-x-2 text-base font-semibold px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg"><i class="fab fa-docker text-blue-500 text-xl"></i><span>Docker</span></span>
            <span class="inline-flex items-center space-x-2 text-base font-semibold px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg"><i class="fab fa-google text-blue-600 text-xl"></i><span>Google Workspace</span></span>
            <span class="inline-flex items-center space-x-2 text-base font-semibold px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg"><i class="fab fa-stripe text-indigo-600 text-xl"></i><span>Stripe & Razorpay</span></span>
        </div>
    </div>
</section>

<!-- Global Consultation CTA -->
<section class="py-16 px-4 sm:px-6 bg-gradient-to-r from-blue-900 to-indigo-950 text-white text-center">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Have a Custom Project in Mind?</h2>
        <p class="text-base sm:text-lg text-blue-200 mb-8 max-w-2xl mx-auto">
            Talk directly with our technical consultants. We analyze your requirements, provide detailed scopes, and build solutions tailored to your growth goals.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('contact-us') }}" class="w-full sm:w-auto bg-green-500 hover:bg-green-600 text-white font-semibold px-8 py-3.5 rounded-xl transition-all shadow-lg hover:shadow-green-500/25">
                Schedule a Free Technical Call
            </a>
            <a href="https://wa.me/917823954297" target="_blank" class="w-full sm:w-auto bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-3.5 rounded-xl border border-white/20 transition-all flex items-center justify-center space-x-2">
                <i class="fab fa-whatsapp text-green-400 text-lg"></i>
                <span>Instant WhatsApp Chat</span>
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Currency Switcher Logic (Document Spec: Image 2)
    function setCurrency(curr) {
        localStorage.setItem('asktrix_currency', curr);
        const inrSpans = document.querySelectorAll('.price-inr');
        const usdSpans = document.querySelectorAll('.price-usd');
        const inrBtn = document.getElementById('currBtnInr');
        const usdBtn = document.getElementById('currBtnUsd');

        if (curr === 'USD') {
            inrSpans.forEach(el => el.classList.add('hidden'));
            usdSpans.forEach(el => el.classList.remove('hidden'));
            inrBtn.classList.remove('active');
            inrBtn.classList.add('text-blue-100');
            usdBtn.classList.add('active');
            usdBtn.classList.remove('text-blue-100');
        } else {
            inrSpans.forEach(el => el.classList.remove('hidden'));
            usdSpans.forEach(el => el.classList.add('hidden'));
            usdBtn.classList.remove('active');
            usdBtn.classList.add('text-blue-100');
            inrBtn.classList.add('active');
            inrBtn.classList.remove('text-blue-100');
        }
    }

    // Category Filter Logic
    function filterCategory(catId) {
        document.querySelectorAll('.filter-tab').forEach(btn => {
            if (btn.getAttribute('data-category') === catId) {
                btn.classList.add('active');
                btn.classList.remove('bg-white', 'text-gray-700');
            } else {
                btn.classList.remove('active');
                btn.classList.add('bg-white', 'text-gray-700');
            }
        });

        const items = document.querySelectorAll('.service-item');
        let visibleCount = 0;

        items.forEach(item => {
            const itemCat = item.getAttribute('data-cat');
            if (catId === 'all' || itemCat === catId) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });

        document.getElementById('noResults').classList.toggle('hidden', visibleCount > 0);
    }

    // Instant Search Filter Logic
    function searchServices() {
        const query = document.getElementById('serviceSearch').value.toLowerCase().trim();
        const items = document.querySelectorAll('.service-item');
        let visibleCount = 0;

        items.forEach(item => {
            const content = item.getAttribute('data-title');
            if (!query || content.includes(query)) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });

        document.getElementById('noResults').classList.toggle('hidden', visibleCount > 0);
    }

    // On Load: detect stored preference or best-effort
    document.addEventListener('DOMContentLoaded', function() {
        const stored = localStorage.getItem('asktrix_currency') || 'INR';
        setCurrency(stored);
    });
</script>
@endsection
