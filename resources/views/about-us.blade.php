@extends('layouts.app')

@section('title', 'About Us | Asktrix Business Consulting - Compliance Experts India')
@section('meta_description', 'Learn about Asktrix, your trusted partner for business compliance and legal requirements. We offer expert consulting services for startups, SMEs, and enterprises across India.')
@section('meta_keywords', 'About Asktrix, business consulting India, compliance experts, company registration, GST registration, trademark services, accounting services, Asktrix team, business consulting company')
@section('canonical_url', url('/about-us'))

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
    <!-- Hero Section -->
    <section class="relative py-16 md:py-24 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTTUgNWg1MHY1MEg1eiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utd2lkdGg9IjAuNSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in">About Asktrix</h1>
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                    Empowering businesses with expert compliance solutions across India
                </p>
                <div class="flex flex-wrap justify-center gap-4 text-sm md:text-base">
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">Trusted by 1000+ Clients</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">Expert Team</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">Nationwide Service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-16 md:py-20 px-4 md:px-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 transform hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-600 p-3 rounded-lg mr-4">
                        <i class="fas fa-building text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Welcome to Asktrix</h2>
                </div>
                <p class="text-gray-700 text-lg md:text-xl leading-relaxed">
                    Welcome to <strong class="text-blue-600">Asktrix</strong>! We are a dedicated team of consulting and compliance experts committed to simplifying the complex world of business compliance and legal requirements. As a one-stop solution for startups, SMEs, and established enterprises, Asktrix empowers businesses to focus on growth while we handle the legal and regulatory requirements.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-16 md:py-20 px-4 md:px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mission Card -->
                <div class="bg-white rounded-2xl shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mission</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Our mission at Asktrix is to make business compliance accessible, transparent, and hassle-free for businesses across India. We believe every business, whether new or established, deserves quality, cost-effective support in managing its statutory obligations.
                    </p>
                </div>

                <!-- Vision Card -->
                <div class="bg-white rounded-2xl shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Vision</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        We envision a future where every business in India can operate freely and compliantly without the constant worry of statutory obligations. By making compliance simpler and more accessible, Asktrix aims to be a catalyst for business success and regulatory ease across sectors.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-16 md:py-20 px-4 md:px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Asktrix offers a comprehensive range of services tailored to meet the unique needs of every business
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-building text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Company Registration</h3>
                    <p class="text-gray-600">From Private Limited Companies to LLPs, our team simplifies the process of starting a new venture.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-invoice-dollar text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Tax Compliance & Filings</h3>
                    <p class="text-gray-600">Covering GST, Income Tax, TDS, and more, we ensure timely and accurate tax filings.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-orange-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-id-card text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Business Licenses</h3>
                    <p class="text-gray-600">Guidance and support for obtaining licenses like FSSAI, Trade License, and Professional Tax Registration.</p>
                </div>

                <!-- Service Card 4 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-trademark text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Trademark Registration</h3>
                    <p class="text-gray-600">Protect your brand with our end-to-end trademark registration and advisory services.</p>
                </div>

                <!-- Service Card 5 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-indigo-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-calculator text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Accounting & Auditing</h3>
                    <p class="text-gray-600">Comprehensive bookkeeping, financial statements, and audit support for regulatory compliance.</p>
                </div>

                <!-- Service Card 6 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-red-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-clipboard-check text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Compliance</h3>
                    <p class="text-gray-600">Seamless support for MCA filings, ROC filings, and annual compliances to keep your business on track.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Asktrix Section -->
    <section class="py-16 md:py-20 px-4 md:px-6 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Why Choose Asktrix?</h2>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                    We provide trusted, reliable, and comprehensive compliance solutions for businesses across India
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <div class="bg-white/20 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Expert Team</h3>
                    <p class="text-blue-100">Our team comprises seasoned Chartered Accountants, legal advisors, and compliance specialists dedicated to quality and efficiency.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <div class="bg-white/20 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-tags text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Affordable Pricing</h3>
                    <p class="text-blue-100">We offer transparent, competitive pricing, making compliance services accessible to businesses of all sizes.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <div class="bg-white/20 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-user-friends text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Client-Centric Approach</h3>
                    <p class="text-blue-100">Every client is unique, and we provide tailored services to meet specific needs and goals.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <div class="bg-white/20 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Trust & Confidentiality</h3>
                    <p class="text-blue-100">We prioritize data security and confidentiality, ensuring your business information is always protected.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <div class="bg-white/20 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Nationwide Reach</h3>
                    <p class="text-blue-100">Our services cover businesses across India, allowing us to support clients in diverse locations and industries.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <div class="bg-white/20 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Proven Track Record</h3>
                    <p class="text-blue-100">Join 1000+ satisfied clients who trust Asktrix for their business compliance and consulting needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team Section -->
    <section class="py-16 md:py-20 px-4 md:px-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl shadow-2xl p-8 md:p-12 text-white transform hover:shadow-3xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="bg-white/20 backdrop-blur-sm p-4 rounded-xl mr-4">
                        <i class="fas fa-users-cog text-white text-3xl"></i>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold">Meet the Team</h2>
                </div>
                <p class="text-lg md:text-xl text-indigo-50 leading-relaxed max-w-4xl">
                    Our team at Asktrix is led by experienced professionals who bring their expertise and dedication to every client interaction. We're passionate about helping businesses thrive in a compliant and secure environment. Together, we're redefining what business support should look like.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 md:py-20 px-4 md:px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Get in Touch</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Whether you're a budding entrepreneur or an established business, Asktrix is here to support you every step of the way.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Location Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-pink-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Our Location</h3>
                    <p class="text-gray-600">No. 19/35, Anna Salai,near Nandanam, Little Mount, Saidapet, Chennai, Tamil Nadu 600015</p>
                </div>

                <!-- Phone Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Call Us</h3>
                    <a href="tel:+917823954297" class="text-blue-600 hover:text-blue-700 font-medium text-lg">+91 7823954297, +91 7823954298</a>
                </div>

                <!-- Email Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Email Us</h3>
                    <a href="mailto:info@asktrix.com" class="text-green-600 hover:text-green-700 font-medium">info@asktrix.com</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }

    @media (max-width: 768px) {
        .text-4xl {
            font-size: 2rem;
        }
        .text-5xl {
            font-size: 2.5rem;
        }
    }

    /* Smooth scrolling for sections */
    section {
        scroll-behavior: smooth;
    }
</style>
@endsection

