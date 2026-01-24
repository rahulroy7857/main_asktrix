@extends('layouts.app')

@section('title', 'Asktrix - Business Consulting Services')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-8 md:py-16 px-4 md:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center md:text-left">
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-blue-900 mb-4 md:mb-6 leading-tight">
                    Your Trusted Business Partner
                </h1>
                <p class="text-base md:text-lg text-gray-600 mb-6 md:mb-8 leading-relaxed">
                    Partner with <strong>Asktrix</strong> to grow your business while staying compliant. <strong>Asktrix</strong> offers high-quality services, from incorporation to payroll, all through a seamless online platform. When you search for Asktrix, you'll find the most trusted business consulting services in India.
                </p>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 md:px-8 py-3 rounded-md font-medium transition-colors w-full sm:w-auto">
                   
                    <a href="https://www.leads.asktrix.com" target="_blank" class="text-white px-6 py-2 rounded-md font-medium transition-colors flex items-center text-sm">
                        Get Started
                    </a>
                </button>
            </div>
            
            <!-- Right Content - Business Images -->
            <div class="relative">
                <div class="grid grid-cols-2 gap-2 sm:gap-4">
                    <!-- Top Left - Business Consultation -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Business Consultation" 
                             class="w-full h-24 sm:h-32 object-cover">
                        <div class="p-2 sm:p-4">
                            <h4 class="font-semibold text-gray-800 mb-1 sm:mb-2 text-sm sm:text-base">Business Consultation</h4>
                            <p class="text-xs sm:text-sm text-gray-600">Expert guidance for your business growth</p>
                        </div>
                    </div>
                    
                    <!-- Top Right - Financial Services -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Financial Services" 
                             class="w-full h-24 sm:h-32 object-cover">
                        <div class="p-2 sm:p-4">
                            <h4 class="font-semibold text-gray-800 mb-1 sm:mb-2 text-sm sm:text-base">Financial Services</h4>
                            <p class="text-xs sm:text-sm text-gray-600">Complete accounting and tax solutions</p>
                        </div>
                    </div>
                    
                    <!-- Bottom Left - Legal Services -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Legal Services" 
                             class="w-full h-24 sm:h-32 object-cover">
                        <div class="p-2 sm:p-4">
                            <h4 class="font-semibold text-gray-800 mb-1 sm:mb-2 text-sm sm:text-base">Legal Services</h4>
                            <p class="text-xs sm:text-sm text-gray-600">Trademark and compliance solutions</p>
                        </div>
                    </div>
                    
                    <!-- Bottom Right - Business Registration -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Business Registration" 
                             class="w-full h-24 sm:h-32 object-cover">
                        <div class="p-2 sm:p-4">
                            <h4 class="font-semibold text-gray-800 mb-1 sm:mb-2 text-sm sm:text-base">Business Registration</h4>
                            <p class="text-xs sm:text-sm text-gray-600">Complete registration and licensing</p>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Full Width - Success Story -->
                <div class="mt-2 sm:mt-4 bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                         alt="Business Success" 
                         class="w-full h-20 sm:h-24 object-cover">
                    <div class="p-2 sm:p-4">
                        <h4 class="font-semibold text-gray-800 mb-1 sm:mb-2 text-sm sm:text-base">Success Stories</h4>
                        <p class="text-xs sm:text-sm text-gray-600">Join 1000+ satisfied clients who trust Asktrix for their business needs. Asktrix delivers excellence in every service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Carousel Section -->
<section class="gradient-bg py-8 md:py-16 px-4 md:px-6">
    <div class="max-w-7xl mx-auto text-center">
        <div class="relative">
            <!-- Carousel Container -->
            <div class="relative overflow-hidden rounded-lg h-64 sm:h-80 md:h-96 bg-gray-200">
                <!-- Slide 1 - GST Services -->
                <div class="carousel-slide active absolute inset-0">
                    <div class="relative h-full">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" 
                             alt="Tax and GST Services" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center text-white px-4">
                                <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4">GST CONSULTANT</div>
                                <div class="text-lg sm:text-xl md:text-2xl font-semibold">Tax Compliance Services by Asktrix</div>
                                <div class="text-sm sm:text-base md:text-lg mt-2 opacity-90">Expert GST registration and filing with Asktrix</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 - Accounting Services -->
                <div class="carousel-slide absolute inset-0">
                    <div class="relative h-full">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Accounting and Bookkeeping" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center text-white px-4">
                                <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4">ACCOUNTING</div>
                                <div class="text-lg sm:text-xl md:text-2xl font-semibold">Professional Bookkeeping by Asktrix</div>
                                <div class="text-sm sm:text-base md:text-lg mt-2 opacity-90">Complete financial management solutions from Asktrix</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 - Trademark Services -->
                <div class="carousel-slide absolute inset-0">
                    <div class="relative h-full">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Trademark and Legal Services" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center text-white px-4">
                                <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4">TRADEMARK</div>
                                <div class="text-lg sm:text-xl md:text-2xl font-semibold">Intellectual Property Protection by Asktrix</div>
                                <div class="text-sm sm:text-base md:text-lg mt-2 opacity-90">Secure your brand and innovations with Asktrix</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4 - Business Registration -->
                <div class="carousel-slide absolute inset-0">
                    <div class="relative h-full">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Business Registration Services" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center text-white px-4">
                                <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4">REGISTRATION</div>
                                <div class="text-lg sm:text-xl md:text-2xl font-semibold">Business License Services</div>
                                <div class="text-sm sm:text-base md:text-lg mt-2 opacity-90">Complete registration and compliance</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 5 - Auditing Services -->
                <div class="carousel-slide absolute inset-0">
                    <div class="relative h-full">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Auditing and Compliance" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center text-white px-4">
                                <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4">AUDITING</div>
                                <div class="text-lg sm:text-xl md:text-2xl font-semibold">Compliance & Verification</div>
                                <div class="text-sm sm:text-base md:text-lg mt-2 opacity-90">Professional audit and compliance services</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Navigation -->
                <button class="absolute left-2 sm:left-4 top-1/2 transform -translate-y-1/2 text-white text-lg sm:text-2xl hover:text-blue-200 bg-black bg-opacity-30 rounded-full w-8 h-8 sm:w-12 sm:h-12 flex items-center justify-center" onclick="previousSlide()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="absolute right-2 sm:right-4 top-1/2 transform -translate-y-1/2 text-white text-lg sm:text-2xl hover:text-blue-200 bg-black bg-opacity-30 rounded-full w-8 h-8 sm:w-12 sm:h-12 flex items-center justify-center" onclick="nextSlide()">
                    <i class="fas fa-chevron-right"></i>
                </button>
                
                <!-- Carousel Dots -->
                <div class="absolute bottom-2 sm:bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-1 sm:space-x-2">
                    <button class="carousel-dot active w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white bg-opacity-80 hover:bg-opacity-100 transition-all"></button>
                    <button class="carousel-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all"></button>
                    <button class="carousel-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all"></button>
                    <button class="carousel-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all"></button>
                    <button class="carousel-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all"></button>
                </div>
            </div>
            
            <!-- Carousel Text -->
            <div class="mt-4 sm:mt-6">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-white mb-2">Asktrix Core Business Services</h2>
                <p class="text-lg sm:text-xl text-blue-200">Comprehensive Business Solutions by Asktrix</p>
                <p class="text-sm sm:text-base md:text-lg text-blue-300 mt-2">Expert consulting services from Asktrix for all your business needs in India</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="bg-white py-8 md:py-16 px-4 md:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-8 md:mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-4">Asktrix Major Consulting Services</h2>
            <p class="text-sm sm:text-base md:text-lg text-gray-600 max-w-4xl mx-auto">
                <strong>Asktrix</strong> provides comprehensive end-to-end services for your business, covering incorporation, accounting, auditing, and essential business licenses. When you choose Asktrix, our expert guidance ensures success in every step of your business journey. Trust Asktrix for all your business consulting needs in India.
            </p>
        </div>
        
        <!-- Services Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
            <!-- Service Card 1 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-receipt text-lg md:text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">GST Consultant</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">Expert GST registration and compliance services for your business.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 2 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-briefcase text-lg md:text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">Incorporation Consultant</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">Complete company incorporation services with expert guidance.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 3 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-balance-scale text-lg md:text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">MSME Consultant</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">MSME registration and certification services for small businesses.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 4 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-building text-lg md:text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">Startup India Consultant</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">Startup India registration and benefits optimization services.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 5 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-shield-alt text-lg md:text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">Trademark Consultant</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">Trademark registration and intellectual property protection.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 6 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-calculator text-lg md:text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">Accounting</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">Professional accounting and bookkeeping services.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 7 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-search text-lg md:text-2xl text-teal-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">Auditing</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">Comprehensive auditing services for business compliance.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 8 -->
            <div class="service-card bg-white p-4 md:p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <i class="fas fa-file-invoice text-lg md:text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-900 mb-2 md:mb-3">Income Tax Return</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">Professional income tax return filing services.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm md:text-base">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DSC Partners Section -->
<section class="bg-white py-8 md:py-16 px-4 md:px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-900 mb-6 md:mb-8">Digital Signature Certificate (DSC) Partners</h2>
        <div class="flex flex-wrap justify-center items-center gap-4 md:gap-8">
            <div class="bg-gray-100 px-4 md:px-8 py-3 md:py-4 rounded-lg">
                <span class="text-lg md:text-xl font-bold text-gray-700">V SIGN</span>
            </div>
            <div class="bg-gray-100 px-4 md:px-8 py-3 md:py-4 rounded-lg">
                <span class="text-sm md:text-xl font-bold text-gray-700">Pantasian A Certifying Authority</span>
            </div>
            <div class="bg-gray-100 px-4 md:px-8 py-3 md:py-4 rounded-lg">
                <span class="text-sm md:text-xl font-bold text-gray-700">XtraTrust TRUST UPDATED</span>
            </div>
        </div>
    </div>
</section>

<!-- Banking Partners Section -->
<section class="bg-white py-8 md:py-16 px-4 md:px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-900 mb-6 md:mb-8">Our Banking Partners</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
            <!-- HDFC Bank -->
            <div class="bg-white border border-gray-200 px-2 md:px-4 py-4 md:py-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('media/bank/hdfc_bank.jpg') }}" 
                         alt="HDFC Bank Logo" 
                         class="h-8 md:h-12 w-auto mb-2 md:mb-3 object-contain"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <!-- <div class="w-16 h-12 bg-red-100 rounded flex items-center justify-center mb-3" style="display:none;">
                        <span class="text-red-600 font-bold text-sm">HDFC</span>
                    </div> -->
                    <span class="text-xs md:text-sm font-semibold text-gray-700">HDFC</span>
                </div>
            </div>
            
            <!-- ICICI Bank -->
            <div class="bg-white border border-gray-200 px-2 md:px-4 py-4 md:py-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('media/bank/ICICI_Bank_Logo.png') }}" 
                         alt="ICICI Bank Logo" 
                         class="h-8 md:h-12 w-auto mb-2 md:mb-3 object-contain"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <!-- <div class="w-16 h-12 bg-orange-100 rounded flex items-center justify-center mb-3" style="display:none;">
                        <span class="text-orange-600 font-bold text-sm">ICICI</span>
                    </div> -->
                    <span class="text-xs md:text-sm font-semibold text-gray-700">ICICI</span>
                </div>
            </div>
            
            <!-- Axis Bank -->
            <div class="bg-white border border-gray-200 px-2 md:px-4 py-4 md:py-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('media/bank/Axis_Bank_logo.png') }}" 
                         alt="Axis Bank Logo" 
                         class="h-8 md:h-12 w-auto mb-2 md:mb-3 object-contain"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <!-- <div class="w-16 h-12 bg-pink-100 rounded flex items-center justify-center mb-3" style="display:none;">
                        <span class="text-pink-600 font-bold text-sm">AXIS</span>
                    </div> -->
                    <span class="text-xs md:text-sm font-semibold text-gray-700">AXIS</span>
                </div>
            </div>
            
            <!-- Yes Bank -->
            <div class="bg-white border border-gray-200 px-2 md:px-4 py-4 md:py-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('media/bank/yesbank_logo.png') }}" 
                         alt="Yes Bank Logo" 
                         class="h-8 md:h-12 w-auto mb-2 md:mb-3 object-contain"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <!-- <div class="w-16 h-12 bg-green-100 rounded flex items-center justify-center mb-3" style="display:none;">
                        <span class="text-green-600 font-bold text-sm">YES</span>
                    </div> -->
                    <span class="text-xs md:text-sm font-semibold text-gray-700">YES BANK</span>
                </div>
            </div>
            
            <!-- RBL Bank -->
            <div class="bg-white border border-gray-200 px-2 md:px-4 py-4 md:py-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('media/bank/rbl_bank.png') }}" 
                         alt="RBL Bank Logo" 
                         class="h-8 md:h-12 w-auto mb-2 md:mb-3 object-contain"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <!-- <div class="w-16 h-12 bg-purple-100 rounded flex items-center justify-center mb-3" style="display:none;">
                        <span class="text-purple-600 font-bold text-sm">RBL</span>
                    </div> -->
                    <span class="text-xs md:text-sm font-semibold text-gray-700">RBL BANK</span>
                </div>
            </div>
            
            <!-- IDFC First Bank -->
            <div class="bg-white border border-gray-200 px-2 md:px-4 py-4 md:py-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('media/bank/IDFC_First_Bank.png') }}" 
                         alt="IDFC First Bank Logo" 
                         class="h-8 md:h-12 w-auto mb-2 md:mb-3 object-contain"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <!-- <div class="w-16 h-12 bg-indigo-100 rounded flex items-center justify-center mb-3" style="display:none;">
                        <span class="text-indigo-600 font-bold text-sm">IDFC</span>
                    </div> -->
                    <span class="text-xs md:text-sm font-semibold text-gray-700">IDFC</span>
                </div>
            </div>
        </div> 
    </div>
</section>
@endsection
