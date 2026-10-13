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
        <nav class="hidden md:flex items-center space-x-3.5 lg:space-x-5 xl:space-x-6">
           

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

             <!-- Services Dropdown (Digital, Web & AI Automation) -->
            <div class="relative group">
                <a href="{{ route('digital.services') }}" class="hover:text-blue-600 transition-colors flex items-center text-gray-800 text-sm font-semibold group/services py-1">
                    <span>Services</span>
                    <span class="ml-1.5 px-1.5 py-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 text-[9px] font-extrabold text-white rounded-full uppercase tracking-wider leading-none shadow-xs">New</span>
                    <i class="fas fa-chevron-down ml-1.5 text-[10px] text-gray-400 group-hover:text-blue-600 group-hover/services:rotate-180 transition-all duration-200"></i>
                </a>
                <div class="absolute top-full right-0 mt-3 w-[760px] lg:w-[820px] max-w-[calc(100vw-2rem)] bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden before:content-[''] before:absolute before:-top-3 before:left-0 before:right-0 before:h-3">
                    <div class="p-6 grid grid-cols-3 gap-5 bg-slate-50/60">
                        <!-- Col 1: Web & App Dev -->
                        <div>
                            <div class="flex items-center space-x-2 pb-2 mb-2 border-b border-gray-200/80">
                                <i class="fas fa-laptop-code text-blue-600 text-xs"></i>
                                <h4 class="text-[11px] font-bold uppercase tracking-wider text-gray-700">Web & App Dev</h4>
                            </div>
                            <div class="space-y-1">
                                <a href="{{ route('website-development') }}" class="group/item flex flex-col p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">Website Development</span>
                                        <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹15,000 / $499</span>
                                </a>
                                <a href="{{ route('crm-development') }}" class="group/item flex flex-col p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">CRM Development</span>
                                        <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹35,000 / $1,499</span>
                                </a>
                                <a href="{{ route('saas-development') }}" class="group/item flex flex-col p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">SaaS Product Dev</span>
                                        <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹75,000 / $2,999</span>
                                </a>
                                <a href="{{ route('app-development') }}" class="group/item flex flex-col p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">Mobile App Dev</span>
                                        <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹50,000 / $1,999</span>
                                </a>
                            </div>
                        </div>

                        <!-- Col 2: AI & Automation -->
                        <div>
                            <div class="flex items-center space-x-2 pb-2 mb-2 border-b border-gray-200/80">
                                <i class="fas fa-brain text-purple-600 text-xs"></i>
                                <h4 class="text-[11px] font-bold uppercase tracking-wider text-gray-700">AI & Automation</h4>
                            </div>
                            <div class="space-y-1">
                                <a href="{{ route('ai-workflow-automation') }}" class="group/item flex flex-col p-2 rounded-lg bg-purple-50/70 border border-purple-100 hover:bg-white hover:shadow-sm hover:border-purple-200 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-purple-900 group-hover/item:text-purple-600 transition-colors">AI Workflow Auto</span>
                                        <span class="text-[8px] bg-purple-200 text-purple-800 px-1 py-0.5 rounded font-extrabold uppercase leading-none">HOT</span>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹4,999/mo / $99/mo</span>
                                </a>
                                <a href="{{ route('ai-customer-support-automation') }}" class="group/item flex flex-col p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">AI Support Automation</span>
                                        <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹3,999/mo / $49/mo</span>
                                </a>
                                <a href="{{ route('ai-voicebot-development') }}" class="group/item flex flex-col p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">AI Voicebot Dev</span>
                                        <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹25,000 / $799</span>
                                </a>
                                <a href="{{ route('ai-chatbot-development') }}" class="group/item flex flex-col p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">AI Chatbot Dev</span>
                                        <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                    </div>
                                    <span class="text-[11px] text-gray-500 font-medium">₹15,000 / $499</span>
                                </a>
                            </div>
                        </div>

                        <!-- Col 3: Cloud & Infra -->
                        <div>
                            <div class="flex items-center space-x-2 pb-2 mb-2 border-b border-gray-200/80">
                                <i class="fas fa-cloud text-teal-600 text-xs"></i>
                                <h4 class="text-[11px] font-bold uppercase tracking-wider text-gray-700">Cloud & Infrastructure</h4>
                            </div>
                            <div class="space-y-1">
                                <a href="{{ route('business-email') }}" class="group/item flex items-center justify-between p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">Business Email</span>
                                    <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                </a>
                                <a href="{{ route('domain-registration') }}" class="group/item flex items-center justify-between p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">Domain Registration</span>
                                    <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                </a>
                                <a href="{{ route('web-hosting') }}" class="group/item flex items-center justify-between p-2 rounded-lg hover:bg-white hover:shadow-sm border border-transparent hover:border-blue-100 transition-all">
                                    <span class="text-xs font-bold text-gray-800 group-hover/item:text-blue-600 transition-colors">Web Hosting</span>
                                    <i class="fas fa-arrow-right text-[9px] text-transparent group-hover/item:text-blue-500 transform group-hover/item:translate-x-0.5 transition-all"></i>
                                </a>
                                <div class="p-2 rounded-lg bg-teal-50/60 border border-teal-100/70">
                                    <div class="flex items-center space-x-1.5 text-teal-800 text-[11px] font-bold">
                                        <i class="fas fa-shield-alt text-teal-600 text-xs"></i>
                                        <span>Custom Cloud Stack?</span>
                                    </div>
                                    <div class="text-[10px] text-gray-500 mt-0.5 leading-snug">Managed cloud setup, DNS & multi-tenant setups.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown Footer -->
                    <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-blue-950 px-6 py-2.5 flex items-center justify-between text-white text-xs">
                        <div class="flex items-center space-x-2 text-blue-200">
                            <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span>Custom software, AI agents & cloud setups</span>
                        </div>
                        <a href="{{ route('digital.services') }}" class="font-bold text-white hover:text-emerald-300 transition-colors flex items-center space-x-1.5 group/ft">
                            <span>Explore All 11 Services & Full Price Book</span>
                            <i class="fas fa-arrow-right text-[10px] transform group-hover/ft:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Language Switcher Dropdown (Desktop) -->
            <div class="relative group notranslate" translate="no" id="desktop-lang-switcher">
                <button type="button" class="hover:text-blue-600 transition-colors flex items-center space-x-1.5 px-2.5 py-1.5 rounded-full bg-slate-50 hover:bg-blue-50 border border-gray-200/80 hover:border-blue-300 text-gray-700 hover:text-blue-700 text-xs font-semibold shadow-xs focus:outline-none cursor-pointer">
                    <i class="fas fa-globe text-blue-600 text-xs"></i>
                    <span id="desktop-lang-flag" class="text-sm leading-none">🇺🇸</span>
                    <span id="desktop-lang-code" class="font-bold tracking-wide">EN</span>
                    <i class="fas fa-chevron-down text-[9px] text-gray-400 group-hover:text-blue-600 group-hover:rotate-180 transition-transform duration-200"></i>
                </button>
                <div class="absolute top-full right-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden before:content-[''] before:absolute before:-top-2.5 before:left-0 before:right-0 before:h-2.5">
                    <!-- Dropdown Header -->
                    <div class="px-4 py-2.5 bg-gradient-to-r from-blue-900 via-indigo-900 to-blue-950 text-white flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-language text-blue-300 text-sm"></i>
                            <span class="text-xs font-bold tracking-wide">Select Language</span>
                        </div>
                        <span class="text-[9px] bg-blue-800/80 text-blue-200 px-2 py-0.5 rounded-full font-medium" id="current-lang-sign">English</span>
                    </div>

                    <!-- Language Options List -->
                    <div class="p-2 max-h-80 overflow-y-auto space-y-1 divide-y divide-gray-50">
                        <!-- English -->
                        <button type="button" onclick="window.asktrixChangeLang('en')" data-lang="en" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇺🇸</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">English</div>
                                    <div class="text-[10px] text-gray-400">Default</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>

                        <!-- Arabic -->
                        <button type="button" onclick="window.asktrixChangeLang('ar')" data-lang="ar" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇸🇦</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">العربية</div>
                                    <div class="text-[10px] text-gray-400">Arabic (RTL)</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>

                        <!-- Russian -->
                        <button type="button" onclick="window.asktrixChangeLang('ru')" data-lang="ru" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇷🇺</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">Русский</div>
                                    <div class="text-[10px] text-gray-400">Russian</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>

                        <!-- German -->
                        <button type="button" onclick="window.asktrixChangeLang('de')" data-lang="de" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇩🇪</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">Deutsch</div>
                                    <div class="text-[10px] text-gray-400">German</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>

                        <!-- Spanish -->
                        <button type="button" onclick="window.asktrixChangeLang('es')" data-lang="es" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇪🇸</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">Español</div>
                                    <div class="text-[10px] text-gray-400">Spanish</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>

                        <!-- French -->
                        <button type="button" onclick="window.asktrixChangeLang('fr')" data-lang="fr" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇫🇷</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">Français</div>
                                    <div class="text-[10px] text-gray-400">French</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>

                        <!-- Malay Language (Bahasa Melayu) -->
                        <button type="button" onclick="window.asktrixChangeLang('ms')" data-lang="ms" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇲🇾</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">Bahasa Melayu</div>
                                    <div class="text-[10px] text-gray-400">Malay language</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>

                        <!-- Hindi -->
                        <button type="button" onclick="window.asktrixChangeLang('hi')" data-lang="hi" class="lang-option w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs hover:bg-blue-50 hover:text-blue-700 transition-colors group/item">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base leading-none">🇮🇳</span>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 group-hover/item:text-blue-700">हिन्दी</div>
                                    <div class="text-[10px] text-gray-400">Hindi</div>
                                </div>
                            </div>
                            <span class="lang-check text-blue-600 text-xs hidden"><i class="fas fa-check"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- CRM Button - Hidden on Mobile -->
        <div class="hidden md:block">
            {{-- <a href="https://crm.asktrix.com"  class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md font-medium transition-colors flex items-center text-sm">
                CRM
            </a> --}}
        </div>
        
        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-800" id="mobile-menu-btn">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>
    
    <!-- Mobile Menu -->
    <div class="md:hidden mt-4 hidden" id="mobile-menu">
        <nav class="flex flex-col space-y-2">
            <!-- Mobile Language Switcher -->
            <div class="mobile-nav-item notranslate" translate="no">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-gradient-to-r from-blue-50 via-indigo-50 to-slate-50 border border-blue-100 rounded-lg text-blue-950 hover:bg-blue-100 transition-colors" onclick="toggleMobileNav('language')">
                    <div class="flex items-center space-x-2.5">
                        <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs shadow-xs">
                            <i class="fas fa-globe text-[11px]"></i>
                        </span>
                        <div class="flex flex-col">
                            <span class="font-bold text-xs text-gray-900">Select Language / भाषा चुनें</span>
                            <span class="text-[10px] text-blue-700 font-medium" id="mobile-lang-display">Active: 🇺🇸 English (EN)</span>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down mobile-nav-icon text-xs text-blue-600 transition-transform duration-200" id="language-icon"></i>
                </button>
                <div class="mobile-nav-content hidden mt-2" id="language-content">
                    <div class="grid grid-cols-2 gap-2 p-2 bg-slate-50 rounded-lg border border-gray-200/80">
                        <button type="button" onclick="window.asktrixChangeLang('en')" data-lang="en" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇺🇸</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">English</div>
                        </button>
                        <button type="button" onclick="window.asktrixChangeLang('ar')" data-lang="ar" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇸🇦</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">العربية</div>
                        </button>
                        <button type="button" onclick="window.asktrixChangeLang('ru')" data-lang="ru" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇷🇺</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">Русский</div>
                        </button>
                        <button type="button" onclick="window.asktrixChangeLang('de')" data-lang="de" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇩🇪</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">Deutsch</div>
                        </button>
                        <button type="button" onclick="window.asktrixChangeLang('es')" data-lang="es" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇪🇸</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">Español</div>
                        </button>
                        <button type="button" onclick="window.asktrixChangeLang('fr')" data-lang="fr" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇫🇷</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">Français</div>
                        </button>
                        <button type="button" onclick="window.asktrixChangeLang('ms')" data-lang="ms" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇲🇾</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">Bahasa Melayu (Malay)</div>
                        </button>
                        <button type="button" onclick="window.asktrixChangeLang('hi')" data-lang="hi" class="lang-option flex items-center space-x-2 p-2 rounded-lg bg-white border border-gray-100 text-left hover:border-blue-300">
                            <span class="text-base">🇮🇳</span>
                            <div class="text-[11px] leading-tight font-semibold text-gray-800">हिन्दी (Hindi)</div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Services Dropdown (Digital, Web & AI Automation) -->
            <div class="mobile-nav-item">
                <button class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-blue-50/80 text-blue-900 rounded-lg hover:bg-blue-100 transition-colors" onclick="toggleMobileNav('services')">
                    <div class="flex items-center space-x-2">
                        <span class="font-bold text-sm">Services (Software & AI)</span>
                        <span class="px-1.5 py-0.5 bg-blue-600 text-[9px] font-bold text-white rounded-full leading-none">New</span>
                    </div>
                    <i class="fas fa-chevron-down mobile-nav-icon transition-transform duration-200" id="services-icon"></i>
                </button>
                <div class="mobile-nav-content hidden" id="services-content">
                    <div class="mx-1 mt-2 space-y-1 pb-2 text-xs">
                        <div class="text-[10px] font-bold uppercase tracking-wider text-gray-400 px-2 pt-2">Web & App Development</div>
                        <a href="{{ route('website-development') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">Website Development</span>
                            <span class="text-[11px] text-gray-500 font-medium">₹15,000 / $499</span>
                        </a>
                        <a href="{{ route('crm-development') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">CRM Development</span>
                            <span class="text-[11px] text-gray-500 font-medium">₹35,000 / $1,499</span>
                        </a>
                        <a href="{{ route('saas-development') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">SaaS Product Dev</span>
                            <span class="text-[11px] text-gray-500 font-medium">₹75,000 / $2,999</span>
                        </a>
                        <a href="{{ route('app-development') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">Mobile App Dev</span>
                            <span class="text-[11px] text-gray-500 font-medium">₹50,000 / $1,999</span>
                        </a>

                        <div class="text-[10px] font-bold uppercase tracking-wider text-gray-400 px-2 pt-2.5">AI & Automation Solutions</div>
                        <a href="{{ route('ai-workflow-automation') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg bg-purple-50/70 border border-purple-100 text-purple-900 hover:bg-purple-100 transition-colors">
                            <div class="flex items-center space-x-1.5">
                                <span class="font-bold text-purple-950">AI Workflow Auto</span>
                                <span class="text-[8px] bg-purple-200 text-purple-800 px-1 py-0.2 rounded font-extrabold">HOT</span>
                            </div>
                            <span class="text-[11px] text-purple-700 font-semibold">₹4,999/mo / $99/mo</span>
                        </a>
                        <a href="{{ route('ai-customer-support-automation') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">AI Support Automation</span>
                            <span class="text-[11px] text-gray-500 font-medium">₹3,999/mo / $49/mo</span>
                        </a>
                        <a href="{{ route('ai-voicebot-development') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">AI Voicebot Dev</span>
                            <span class="text-[11px] text-gray-500 font-medium">₹25,000 / $799</span>
                        </a>
                        <a href="{{ route('ai-chatbot-development') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">AI Chatbot Dev</span>
                            <span class="text-[11px] text-gray-500 font-medium">₹15,000 / $499</span>
                        </a>

                        <div class="text-[10px] font-bold uppercase tracking-wider text-gray-400 px-2 pt-2.5">Cloud & Infrastructure</div>
                        <a href="{{ route('business-email') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">Business Email</span>
                            <i class="fas fa-arrow-right text-[10px] text-gray-400"></i>
                        </a>
                        <a href="{{ route('domain-registration') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">Domain Registration</span>
                            <i class="fas fa-arrow-right text-[10px] text-gray-400"></i>
                        </a>
                        <a href="{{ route('web-hosting') }}" class="flex items-center justify-between px-2.5 py-1.5 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                            <span class="font-semibold text-gray-800">Web Hosting</span>
                            <i class="fas fa-arrow-right text-[10px] text-gray-400"></i>
                        </a>

                        <div class="pt-2 px-1">
                            <a href="{{ route('digital.services') }}" class="block bg-gradient-to-r from-blue-900 to-indigo-900 text-white text-center py-2.5 rounded-lg font-bold text-xs shadow-sm hover:from-blue-800 hover:to-indigo-800 transition-all">
                                Explore All 11 Services & Full Price Book &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

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
            
            <!-- CRM login -->
            <div class="mobile-nav-item">
                {{-- <a href="https://crm.asktrix.com" target="_blank" class="mobile-nav-header w-full text-left flex items-center justify-between p-3 bg-green-50 border border-green-200 rounded-lg hover:bg-green-100 transition-colors">
                    <span class="font-medium text-green-800 flex items-center">
                        <i class="fas fa-credit-card mr-2"></i>
                        CRM
                    </span>
                </a> --}}
            </div>
        </nav>
    </div>
</header>
