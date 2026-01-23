<!-- Footer -->
<footer class="bg-blue-900 text-white py-20 px-6 mt-16">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Contact Info -->
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <a href="{{route('home')}}">
                        <div class="h-8 bg-white rounded-sm flex items-center justify-center">
                            <img src="{{ asset('media/asktric_logo.png') }}" alt="Asktrix" class="w-full h-full object-cover object-center   ">
                            <!-- <div class="w-4 h-4 bg-blue-600 transform rotate-45"></div> -->
                        </div>
                    </a>
                    <!-- <span class="text-2xl font-bold">Asktrix</span> -->
                </div>
                <div class="space-y-3">
                    <!-- <p class="text-white">Brigade Senate 2, Hebbal Kempapura, Bengaluru, Karnataka 560094, INDIA</p> -->
                    <p class="text-white">No. 19/35, Anna Salai,near Nandanam, Little Mount, Saidapet, Chennai, Tamil Nadu 600015</p>
                    
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-phone text-white"></i>
                        <span class="text-white">+91 7823954297, +91 7823954298</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-envelope text-white"></i>
                        <span class="text-white">contact@asktrix.com</span>
                    </div>

                    <div class="flex space-x-4 mt-4">
                        <!-- Social Media Links -->
                        <a href="https://www.facebook.com/share.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Share on Facebook">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Share on Twitter">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Share on LinkedIn">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Share on WhatsApp">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/asktrix" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors" title="Follow on Instagram">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Company Links -->
            <div>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-white hover:text-blue-200 transition-colors">Home</a></li>
                    <li><a href="{{ url('/about-us') }}" class="text-white hover:text-blue-200 transition-colors">About Us</a></li>
                    <li><a href="{{ route('contact-us') }}" class="text-white hover:text-blue-200 transition-colors">Contact us</a></li>
                    <li><a href="{{ route('terms-conditions') }}" class="text-white hover:text-blue-200 transition-colors">Terms & Conditions</a></li>
                    <li><a href="{{ route('cancellation-refund') }}" class="text-white hover:text-blue-200 transition-colors">Refund Policy</a></li>
                    <li><a href="{{ route('privacy-policy') }}" class="text-white hover:text-blue-200 transition-colors">Privacy Policy</a></li>
                    <li><a href="{{ route('disclaimer') }}" class="text-white hover:text-blue-200 transition-colors">Disclaimer</a></li>
                    <!-- <li><a href="#" class="text-white hover:text-blue-200 transition-colors">Blog</a></li> -->
                </ul>
            </div>
            
            <!-- Services Links -->
            <div>
                <h3 class="text-white font-semibold mb-6">Services</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('incorporation') }}" class="text-white hover:text-blue-200 transition-colors">Incorporation</a></li>
                    <li><a href="{{ url('accounting-registration') }}" class="text-white hover:text-blue-200 transition-colors">Accounting</a></li>
                    <li><a href="{{ url('registrations') }}" class="text-white hover:text-blue-200 transition-colors">Registration</a></li>
                    <li><a href="{{ url('trademark') }}" class="text-white hover:text-blue-200 transition-colors">Trademark</a></li>
                    <li><a href="{{ url('license-registration') }}" class="text-white hover:text-blue-200 transition-colors">License Registration</a></li>
                    <li><a href="{{ url('roc-registrar-of-companies') }}" class="text-white hover:text-blue-200 transition-colors">ROC</a></li>
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
