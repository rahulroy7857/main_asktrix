<!-- Footer -->
<footer class="bg-blue-900 text-white py-20 px-6 mt-16">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-8 lg:gap-12">
            <!-- Contact Info -->
            <div class="md:col-span-1">
                <div class="flex items-center space-x-2 mb-6">
                    <a href="{{route('home')}}">
                        <div class="h-8 bg-white rounded-sm flex items-center justify-center">
                            <img src="{{ asset('media/asktric_logo.png') }}" alt="Asktrix" class="w-full h-full object-cover object-center">
                        </div>
                    </a>
                </div>
                <div class="space-y-3 text-xs sm:text-sm">
                    <p class="text-white">No. 19/35, Anna Salai, near Nandanam, Little Mount, Saidapet, Chennai, Tamil Nadu 600015</p>
                    
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-phone text-white"></i>
                        <span class="text-white">+91 7823954297, +91 7823954298</span>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <span class="text-white"><i class="fas fa-envelope text-white mr-1.5"></i>contact@asktrix.com</span>
                        <span class="text-white"><i class="fas fa-envelope text-white mr-1.5"></i>support@asktrix.com</span>
                    </div>

                    <div class="flex space-x-4 pt-2">
                        <!-- Social Media Links -->
                        <a href="https://www.facebook.com/asktrix" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Follow on Facebook">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="https://x.com/Asktrixlegal" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Follow on Twitter">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="https://wa.me/917823954297" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Chat on WhatsApp">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/asktrix" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Follow on Instagram">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Share on LinkedIn">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold mb-5 text-sm sm:text-base">Company</h3>
                <ul class="space-y-2.5 text-xs sm:text-sm">
                    <li><a href="{{ url('/') }}" class="text-white hover:text-blue-200 transition-colors">Home</a></li>
                    <li><a href="{{ url('/about-us') }}" class="text-white hover:text-blue-200 transition-colors">About Us</a></li>
                    <li><a href="{{ route('contact-us') }}" class="text-white hover:text-blue-200 transition-colors">Contact us</a></li>
                    <li><a href="{{ route('terms-conditions') }}" class="text-white hover:text-blue-200 transition-colors">Terms & Conditions</a></li>
                    <li><a href="{{ route('cancellation-refund') }}" class="text-white hover:text-blue-200 transition-colors">Refund Policy</a></li>
                    <li><a href="{{ route('privacy-policy') }}" class="text-white hover:text-blue-200 transition-colors">Privacy Policy</a></li>
                    <li><a href="{{ route('disclaimer') }}" class="text-white hover:text-blue-200 transition-colors">Disclaimer</a></li>
                </ul>
            </div>
            
            <!-- Software & AI Services -->
            <div>
                <h3 class="text-white font-semibold mb-5 text-sm sm:text-base">Software & AI</h3>
                <ul class="space-y-2.5 text-xs sm:text-sm">
                    <li><a href="{{ route('digital.services') }}" class="text-green-300 font-bold hover:underline">All 11 Services Hub</a></li>
                    <li><a href="{{ route('website-development') }}" class="text-white hover:text-blue-200 transition-colors">Website Development</a></li>
                    <li><a href="{{ route('crm-development') }}" class="text-white hover:text-blue-200 transition-colors">CRM Development</a></li>
                    <li><a href="{{ route('saas-development') }}" class="text-white hover:text-blue-200 transition-colors">SaaS Product Dev</a></li>
                    <li><a href="{{ route('ai-workflow-automation') }}" class="text-white hover:text-blue-200 transition-colors">AI Workflow Automation</a></li>
                    <li><a href="{{ route('ai-customer-support-automation') }}" class="text-white hover:text-blue-200 transition-colors">AI Support Automation</a></li>
                    <li><a href="{{ route('ai-voicebot-development') }}" class="text-white hover:text-blue-200 transition-colors">AI Voicebots & Telephony</a></li>
                    <li><a href="{{ route('app-development') }}" class="text-white hover:text-blue-200 transition-colors">Mobile App Development</a></li>
                </ul>
            </div>

            <!-- Corporate & Compliance Links -->
            <div>
                <h3 class="text-white font-semibold mb-5 text-sm sm:text-base">Corporate & Legal</h3>
                <ul class="space-y-2.5 text-xs sm:text-sm">
                    <li><a href="{{ url('incorporation') }}" class="text-white hover:text-blue-200 transition-colors">Incorporation</a></li>
                    <li><a href="{{ url('accounting-registration') }}" class="text-white hover:text-blue-200 transition-colors">Accounting & Tax</a></li>
                    <li><a href="{{ url('registrations') }}" class="text-white hover:text-blue-200 transition-colors">GST & Registrations</a></li>
                    <li><a href="{{ url('trademark') }}" class="text-white hover:text-blue-200 transition-colors">Trademark & IP</a></li>
                    <li><a href="{{ url('license-registration') }}" class="text-white hover:text-blue-200 transition-colors">Licenses & Permits</a></li>
                    <li><a href="{{ url('roc-registrar-of-companies') }}" class="text-white hover:text-blue-200 transition-colors">ROC Filings</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-blue-700 mt-20 pt-8 text-center relative">
            <p class="text-white text-sm">© {{ date('Y') }} Asktrix Business Consulting. All Rights Reserved.</p>
            <p class="text-white text-xs mt-2">Asktrix - Your Trusted Business Consulting Partner | GST, Company Registration, Trademark Services India</p>
        </div>
    </div>
</footer>
