<!-- Header -->
<header id="main-header" class="bg-white text-gray-800 py-4 px-6 sticky top-0 z-50 shadow-lg transition-all duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{route('home')}}">
            <div class="flex items-center space-x-2">
            
                    <div class="h-8  rounded-sm flex items-center justify-center">
                        <img src="{{ asset('media/asktric_logo.png') }}" alt="Asktrix" class="w-full h-full object-cover">
                        <!-- <div class="w-4 h-4 bg-white transform rotate-45"></div> -->
                    </div>
                    <!-- <span class="text-lg font-bold text-gray-800">Asktrix</span> -->
                
            </div>
        </a>
        
        <!-- Navigation -->
        <nav class="hidden md:flex items-center space-x-8">
            <!-- Incorporation Dropdown -->
            <div class="relative group">
                <a href="{{ route('incorporation') }}" class="hover:text-blue-600 transition-colors flex items-center text-gray-800 text-sm">
                    Incorporation<i class="fas fa-chevron-down ml-1 text-xs"></i>
                </a>
                <div class="absolute top-full left-0 mt-4 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                    <div class="p-6">
                        <a href="{{ route('private-limited-company-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Private Limited Company</a>
                        <a href="{{ route('public-limited-company-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Public Limited Company</a>
                        <a href="{{ route('one-person-company-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">One Person Company (OPC)</a>
                        <a href="{{ route('partnership-firm-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Partnership Firm Registration</a>
                        <a href="{{ route('llp-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">LLP Registration</a>
                        <a href="{{ route('sole-proprietorship-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Sole Proprietorship Registration</a>
                        <a href="{{ route('trust-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Trust Registration</a>
                        <a href="{{ route('section-8-company') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Section 8 Company</a>
                    </div>
                </div>
            </div>

            <!-- Accounting Dropdown -->
            <div class="relative group">
                <a href="{{ route('accounting') }}" class="hover:text-blue-600 transition-colors flex items-center text-gray-800 text-sm">
                    Accounting <i class="fas fa-chevron-down ml-1 text-xs"></i>
                </a>
                <div class="absolute top-full left-0 mt-4 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                    <div class="p-6">                        
                        <a href="{{ route('company-annual-filing-roc') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">PVT LTD Compliance</a>
                        <a href="{{ route('llp-annual-filing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">LLP Compliance</a>
                        <a href="{{ route('proprietorship-compliance') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Proprietorship Compliance</a>
                        <a href="{{ route('gst-return-filing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">GST Return Filing</a>
                        <a href="{{ route('income-tax-return-filing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Income Tax Return Filing</a>
                        <a href="{{ route('tds-return-filing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TDS Return Filing</a>
                        <a href="{{ route('esi-return-filing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">ESI Filing</a>
                        <a href="{{ route('pf-return-filing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">EPF Filing</a>
                        <a href="{{ route('professional-tax-return-filing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Professional Tax Filing</a>
                    </div>
                </div>
            </div>

            <!-- Registration Dropdown -->
            <div class="relative group">
                <a href="{{ route('registration') }}" class="hover:text-blue-600 transition-colors flex items-center text-gray-800 text-sm">
                    Registration <i class="fas fa-chevron-down ml-1 text-xs"></i>
                </a>
                <div class="absolute top-full left-0 mt-4 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                    <div class="p-6">
                        <a href="{{ route('gst-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">GST Registration</a>
                        <a href="{{ route('professional-tax-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Professional Tax Registration</a>
                        <a href="{{ route('msme-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">MSME Registration</a>
                        <a href="{{ route('esic-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">ESI Registration</a>
                        <a href="{{ route('epf-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">EPF Registration</a>
                        <a href="{{ route('rcmc-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">RCMC Registration</a>
                        <a href="{{ route('startup-india-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">STARTUP India Registration</a>
                        <a href="{{ route('digital-signature-online') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Digital Signature Certificate</a>
                    </div>
                </div>
            </div>

            <!-- Trademark Dropdown -->
            <div class="relative group">
                <a href="{{ route('trademark') }}" class="hover:text-blue-600 transition-colors flex items-center text-gray-800 text-sm">
                    Trademark <i class="fas fa-chevron-down ml-1 text-xs"></i>
                </a>
                <div class="absolute top-full left-0 mt-4 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                    <div class="p-6">
                        <a href="{{ route('trademark-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Trademark Registration</a>
                        <a href="{{ route('copyright-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Copyright Registration</a>
                        <a href="{{ route('copyright-objection') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Copyright Objection</a>
                        <a href="{{ route('copyright-hearing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Copyright Hearing</a>
                        <a href="{{ route('patent-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Patent Registration</a>
                        <a href="{{ route('trademark-objection') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TradeMark Objection</a>
                        <a href="{{ route('trademark-hearing') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TradeMark Hearing</a>
                        <a href="{{ route('trademark-opposition') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TradeMark Opposition</a>
                        <a href="{{ route('trademark-rectification') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TradeMark Rectification</a>
                        <a href="{{ route('trademark-registration-certificate') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TradeMark Certificate</a>
                        <a href="{{ route('trademark-renewal') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TradeMark Renewal</a>
                        <a href="{{ route('copyright-registration-certificate') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Copyright Certificate</a>
                    </div>
                </div>
            </div>

            <!-- License Registration Dropdown -->
            <div class="relative group">
                <a href="{{ route('license-registration') }}" class="hover:text-blue-600 transition-colors flex items-center text-gray-800 text-sm">
                    License Registration <i class="fas fa-chevron-down ml-1 text-xs"></i>
                </a>
                <div class="absolute top-full left-0 mt-4 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                    <div class="p-6">
                        <a href="{{ route('ie-code-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">IE Code</a>
                        <a href="{{ route('trade-license-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">TRADE License</a>
                        <a href="{{ route('fire-license-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">FIRE License</a>
                        <a href="{{ route('shop-establishment-license-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Shop and Establishment</a>
                        <a href="{{ route('iso-certification') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">ISO Registration</a>
                        <a href="{{ route('lut-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">LUT Registration</a>
                        <a href="{{ route('fssai-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">FSSAI Registration</a>
                        <a href="{{ route('fcra-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Foreign Contribution Regulation Act (FCRA)</a>
                        <a href="{{ route('12a-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">12A Registration</a>
                        <a href="{{ route('80g-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">80G Registration</a>
                        <a href="{{ route('darpan-registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">DARPAN ID Registration</a>
                    </div>
                </div>
            </div>

            <!-- ROC Dropdown -->
            <div class="relative group">
                <a href="{{ route('roc-registrar-of-companies') }}" class="hover:text-blue-600 transition-colors flex items-center text-gray-800 text-sm">
                    ROC <i class="fas fa-chevron-down ml-1 text-xs"></i>
                </a>
                <div class="absolute top-full left-0 mt-4 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                    <div class="p-6">
                        <a href="{{ route('appointment-of-director') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Addition Of Director</a>
                        <a href="{{ route('removal-of-director') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Removal Of Director</a>
                        <a href="{{ route('company-share-transfer') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Share Transfer</a>
                        <a href="{{ route('strike-off-company') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Company Strike Off Clearance</a>
                        <a href="{{ route('director-disqualification') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Din Reactivation</a>
                        <a href="{{ route('company-name-change') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Company Name Change</a>
                        <a href="{{ route('authorized-capital') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Increased Authorized Capital</a>
                        <a href="{{ route('change-of-registered-office') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors text-sm">Register Office Address Change</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Payments Button - Hidden on Mobile -->
        <div class="relative group hidden md:block">
            <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md font-medium transition-colors flex items-center text-sm">
                Payments <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </button>
            <div class="absolute top-full right-0 mt-4 w-64 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                <div class="p-6">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-green-600 transition-colors text-sm">Pay with Razorpay</a>
                    <!-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-green-600 transition-colors text-sm">Pay with PhonePe</a> -->
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-800" id="mobile-menu-btn">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>
    
    <!-- Mobile Menu -->
    <div class="md:hidden mt-4 hidden" id="mobile-menu">
        <nav class="flex flex-col space-y-2">
            <!-- Incorporation Dropdown -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileNav('incorporation')">
                    <span class="font-medium text-gray-800">Incorporation</span>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200" id="incorporation-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="incorporation-content">
                    <div class="ml-4 mt-2 space-y-1 pb-2">
                        <a href="{{ route('private-limited-company-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Private Limited Company</a>
                        <a href="{{ route('public-limited-company-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Public Limited Company</a>
                        <a href="{{ route('one-person-company-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">One Person Company (OPC)</a>
                        <a href="{{ route('partnership-firm-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Partnership Firm Registration</a>
                        <a href="{{ route('llp-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">LLP Registration</a>
                        <a href="{{ route('sole-proprietorship-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Sole Proprietorship Registration</a>
                        <a href="{{ route('trust-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Trust Registration</a>
                        <a href="{{ route('section-8-company') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Section 8 Company</a>
                    </div>
                </div>
            </div>
            
            <!-- Accounting Dropdown -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileNav('accounting')">
                    <span class="font-medium text-gray-800">Accounting</span>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200" id="accounting-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="accounting-content">
                    <div class="ml-4 mt-2 space-y-1 pb-2">
                        <a href="{{ route('company-annual-filing-roc') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">PVT LTD Compliance</a>
                        <a href="{{ route('llp-annual-filing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">LLP Compliance</a>
                        <a href="{{ route('proprietorship-compliance') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Proprietorship Compliance</a>
                        <a href="{{ route('gst-return-filing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">GST Return Filing</a>
                        <a href="{{ route('income-tax-return-filing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Income Tax Return Filing</a>
                        <a href="{{ route('tds-return-filing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TDS Return Filing</a>
                        <a href="{{ route('esi-return-filing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">ESI Filing</a>
                        <a href="{{ route('pf-return-filing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">EPF Filing</a>
                        <a href="{{ route('professional-tax-return-filing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Professional Tax Filing</a>
                    </div>
                </div>
            </div>
            
            <!-- Registration Dropdown -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileNav('registration')">
                    <span class="font-medium text-gray-800">Registration</span>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200" id="registration-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="registration-content">
                    <div class="ml-4 mt-2 space-y-1 pb-2">
                        <a href="{{ route('gst-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">GST Registration</a>
                        <a href="{{ route('professional-tax-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Professional Tax Registration</a>
                        <a href="{{ route('msme-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">MSME Registration</a>
                        <a href="{{ route('esic-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">ESI Registration</a>
                        <a href="{{ route('epf-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">EPF Registration</a>
                        <a href="{{ route('rcmc-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">RCMC Registration</a>
                        <a href="{{ route('startup-india-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">STARTUP India Registration</a>
                        <a href="{{ route('digital-signature-online') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Digital Signature Certificate</a>
                    </div>
                </div>
            </div>
            
            <!-- Trademark Dropdown -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileNav('trademark')">
                    <span class="font-medium text-gray-800">Trademark</span>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200" id="trademark-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="trademark-content">
                    <div class="ml-4 mt-2 space-y-1 pb-2">
                        <a href="{{ route('trademark-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Trademark Registration</a>
                        <a href="{{ route('copyright-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Copyright Registration</a>
                        <a href="{{ route('copyright-objection') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Copyright Objection</a>
                        <a href="{{ route('copyright-hearing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Copyright Hearing</a>
                        <a href="{{ route('patent-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Patent Registration</a>
                        <a href="{{ route('trademark-objection') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TradeMark Objection</a>
                        <a href="{{ route('trademark-hearing') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TradeMark Hearing</a>
                        <a href="{{ route('trademark-opposition') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TradeMark Opposition</a>
                        <a href="{{ route('trademark-rectification') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TradeMark Rectification</a>
                        <a href="{{ route('trademark-registration-certificate') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TradeMark Certificate</a>
                        <a href="{{ route('trademark-renewal') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TradeMark Renewal</a>
                        <a href="{{ route('copyright-registration-certificate') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Copyright Certificate</a>
                    </div>
                </div>
            </div>
            
            <!-- License Registration Dropdown -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileNav('license')">
                    <span class="font-medium text-gray-800">License Registration</span>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200" id="license-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="license-content">
                    <div class="ml-4 mt-2 space-y-1 pb-2">
                        <a href="{{ route('ie-code-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">IE Code</a>
                        <a href="{{ route('trade-license-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">TRADE License</a>
                        <a href="{{ route('fire-license-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">FIRE License</a>
                        <a href="{{ route('shop-establishment-license-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Shop and Establishment</a>
                        <a href="{{ route('iso-certification') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">ISO Registration</a>
                        <a href="{{ route('lut-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">LUT Registration</a>
                        <a href="{{ route('fssai-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">FSSAI Registration</a>
                        <a href="{{ route('fcra-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">FCRA Registration</a>
                        <a href="{{ route('12a-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">12A Registration</a>
                        <a href="{{ route('80g-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">80G Registration</a>
                        <a href="{{ route('darpan-registration') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">DARPAN ID Registration</a>
                    </div>
                </div>
            </div>
            
            <!-- ROC Dropdown -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileNav('roc')">
                    <span class="font-medium text-gray-800">ROC</span>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200" id="roc-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="roc-content">
                    <div class="ml-4 mt-2 space-y-1 pb-2">
                        <a href="{{ route('appointment-of-director') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Addition Of Director</a>
                        <a href="{{ route('removal-of-director') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Removal Of Director</a>
                        <a href="{{ route('company-share-transfer') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Share Transfer</a>
                        <a href="{{ route('strike-off-company') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Company Strike Off Clearance</a>
                        <a href="{{ route('director-disqualification') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Din Reactivation</a>
                        <a href="{{ route('company-name-change') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Company Name Change</a>
                        <a href="{{ route('authorized-capital') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Increased Authorized Capital</a>
                        <a href="{{ route('change-of-registered-office') }}" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Register Office Address Change</a>
                    </div>
                </div>
            </div>
            
            <!-- Payments Dropdown -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-green-50 border border-green-200 rounded-lg hover:bg-green-100 transition-colors" onclick="toggleMobileNav('payments')">
                    <span class="font-medium text-green-800 flex items-center">
                        <i class="fas fa-credit-card mr-2"></i>
                        Payments
                    </span>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200 text-green-600" id="payments-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="payments-content">
                    <div class="ml-4 mt-2 space-y-1 pb-2">
                        <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors py-2 px-3 rounded-lg hover:bg-green-50">Pay with Razorpay</a>
                        <!-- <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors py-2 px-3 rounded-lg hover:bg-green-50">Pay with PhonePe</a> -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
