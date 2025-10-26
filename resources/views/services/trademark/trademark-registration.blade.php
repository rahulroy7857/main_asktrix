@extends('layouts.app')

@section('title', 'Trademark Registration - Asktrix')

@section('styles')
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<style>
    .Asktrix-blue {
        color: #1a237e;
    }
    .Asktrix-light-blue {
        color: #42a5f5;
    }
    .Asktrix-green {
        color: #4caf50;
    }
    .bg-Asktrix-blue {
        background-color: #1a237e;
    }
    .bg-Asktrix-light-blue {
        background-color: #42a5f5;
    }
    .bg-Asktrix-green {
        background-color: #4caf50;
    }
    .border-Asktrix-green {
        border-color: #4caf50;
    }
    .form-sidebar {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border: 2px solid #4caf50;
        border-radius: 12px;
        position: sticky;
        top: 100px;
    }
    .faq-item {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 8px;
        overflow: hidden;
    }
    .faq-question {
        background: #f8f9fa;
        padding: 16px 20px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }
    .faq-question:hover {
        background: #e9ecef;
    }
    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        background: white;
    }
    .faq-answer.active {
        padding: 20px;
        max-height: 500px;
    }
    .faq-icon {
        transition: transform 0.3s ease;
    }
    .faq-icon.rotated {
        transform: rotate(180deg);
    }
    .content-section {
        margin-bottom: 24px;
    }
    
    @media (min-width: 768px) {
        .content-section {
            margin-bottom: 40px;
        }
    }
        margin-bottom: 24px;
    }
    .content-section h2 {
        color: #1a237e;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .content-section h3 {
        color: #1a237e;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 16px;
    }
    .content-section p {
        color: #374151;
        line-height: 1.7;
        margin-bottom: 16px;
    }
    .content-section ul {
        margin-bottom: 20px;
    }
    .content-section li {
        color: #374151;
        margin-bottom: 8px;
        line-height: 1.6;
    }
    .price-highlight {
        font-size: 32px;
        font-weight: 700;
        color: #4caf50;
    }
    .scroll-to-top-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: #42a5f5;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        z-index: 1000;
    }
    .scroll-to-top-btn:hover {
        background: #1a237e;
        transform: translateY(-2px);
    }

    /* Trademark classes table styling */
    .trademark-classes-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .trademark-classes-table th,
    .trademark-classes-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }
    .trademark-classes-table th {
        background: #1a237e;
        color: white;
        font-weight: 600;
    }
    .trademark-classes-table tr:hover {
        background: #f8f9fa;
    }


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
        border-color: #4caf50 !important;
        box-shadow: 0 0 0 1px #4caf50 !important;
        outline: none !important;
    }

    /* General form input focus styling */
    input:focus, textarea:focus {
        border-color: #6b7280 !important;
        box-shadow: 0 0 0 1px #6b7280 !important;
        outline: none !important;
    }

    /* Focus-visible styling with green color */
    input:focus-visible, textarea:focus-visible {
        border-color: #4caf50 !important;
        box-shadow: 0 0 0 1px #4caf50 !important;
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
        border-color: #4caf50 !important;
        box-shadow: 0 0 0 1px #4caf50 !important;
        outline: none !important;
    }
</style>
@endsection

@section('content')
<div class="min-h-screen bg-white">
    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-6 md:py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:p-6 md:gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Page Title -->
                <div class="mb-6 md:mb-8">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold Asktrix-blue mb-6 leading-tight">
                        Trademark Registration
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        A trademark is a distinctive sign, symbol, or expression that identifies and distinguishes the goods or services of one business from those of others. Trademark registration provides legal protection and exclusive rights to use your brand identity, helping you build trust and prevent others from using similar marks.
                    </p>
                </div>

                <!-- What is Trademark Registration -->
                <div class="content-section">
                    <h2>What is Trademark Registration?</h2>
                    <p>A trademark is a unique symbol, word, phrase, design, or combination thereof that identifies and distinguishes the source of goods or services. Trademark registration is the legal process of officially recording your trademark with the appropriate government authority, granting you exclusive rights to use the mark in connection with your goods or services.</p>
                </div>

                <!-- Why Register a Trademark -->
                <div class="content-section">
                    <h2>Why Register a Trademark?</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Legal Ownership:</strong> Establishes legal ownership and exclusive rights to use your trademark</li>
                        <li><strong>Brand Trust:</strong> Builds customer trust and brand recognition in the marketplace</li>
                        <li><strong>Nationwide Protection:</strong> Provides protection across the entire country where registered</li>
                        <li><strong>Legal Action:</strong> Enables you to take legal action against trademark infringement</li>
                        <li><strong>Asset Value:</strong> Increases the value of your business as an intangible asset</li>
                        <li><strong>Competitive Advantage:</strong> Prevents competitors from using similar marks</li>
                    </ul>
                </div>

                <!-- Types of Trademarks -->
                <div class="content-section">
                    <h2>Types of Trademarks</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Word Mark:</strong> Text-based trademarks consisting of words, letters, or numbers</li>
                        <li><strong>Device Mark:</strong> Logo, symbol, or design-based trademarks</li>
                        <li><strong>Sound Mark:</strong> Distinctive sounds or musical notes that identify a brand</li>
                        <li><strong>Shape Mark:</strong> Three-dimensional shapes of products or packaging</li>
                        <li><strong>Collective Mark:</strong> Trademarks used by members of an association or organization</li>
                        <li><strong>Service Mark:</strong> Trademarks specifically used for services rather than goods</li>
                    </ul>
                </div>

                <!-- Eligibility Criteria -->
                <div class="content-section">
                    <h2>Eligibility Criteria for Trademark Registrations</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Who Can Apply:</strong> Individuals, companies, partnerships, trusts, and other legal entities</li>
                        <li><strong>Distinctiveness:</strong> The mark must be distinctive and capable of distinguishing goods/services</li>
                        <li><strong>Non-infringing:</strong> Must not conflict with existing registered or pending trademarks</li>
                        <li><strong>Use in Commerce:</strong> Must be used or intended to be used in connection with goods/services</li>
                        <li><strong>Not Deceptive:</strong> Must not be misleading or deceptive to consumers</li>
                    </ul>
                </div>

                <!-- Documents Required -->
                <div class="content-section">
                    <h2>Documents Required for Trademark Registration</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Authorization Letter:</strong> Power of attorney or authorization letter for trademark filing</li>
                        <li><strong>Logo or Brand Image:</strong> Clear representation of the trademark (if applicable)</li>
                        <li><strong>Description of Goods/Services:</strong> Detailed description of goods or services</li>
                        <li><strong>Address Proof:</strong> Valid address proof of the applicant</li>
                        <li><strong>Identity Proof:</strong> Valid identity proof of the applicant</li>
                        <li><strong>Business Registration:</strong> Certificate of incorporation or business registration</li>
                        <li><strong>Usage Evidence:</strong> Proof of trademark usage (if already in use)</li>
                    </ul>
                </div>

                <!-- Step-by-Step Process for Trademark Registration -->
                <div class="content-section">
                    <h2>Step-by-Step Process for Trademark Registration</h2>
                    <p>Our streamlined process ensures quick and hassle-free trademark registration:</p>
                    
                    <div class="space-y-6 mt-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Conduct a Trademark Search</h3>
                                <p class="text-gray-600">Perform a comprehensive search to ensure your trademark is unique and doesn't conflict with existing registrations. This helps avoid objections and increases approval chances.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">File Application (Form TM-A)</h3>
                                <p class="text-gray-600">Submit the trademark application (Form TM-A) with all required documents and fees to the Trademark Registry. Choose the appropriate trademark class and provide detailed descriptions.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Review by Registrar</h3>
                                <p class="text-gray-600">The Trademark Registrar examines the application for compliance with legal requirements and potential conflicts. This process typically takes 3-6 months.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Publication in Trademark Journal</h3>
                                <p class="text-gray-600">If approved, the trademark is published in the Trademark Journal for public opposition. Third parties have 4 months to file objections.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-lg">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold Asktrix-blue mb-2">Registration Certificate Issuance</h3>
                                <p class="text-gray-600">If no objections are raised or successfully resolved, the Trademark Registry issues the registration certificate, granting exclusive rights for 10 years.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trademark Classes and Classification System -->
                <div class="content-section">
                    <h2>Trademark Classes and Classification System</h2>
                    <p>The Nice Classification system divides goods and services into 45 classes (1-34 for goods, 35-45 for services). Here's a comprehensive overview of all trademark classes:</p>
                    
                    <table class="trademark-classes-table">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Chemical Products</td></tr>
                            <tr><td>2</td><td>Paints</td></tr>
                            <tr><td>3</td><td>Cosmetics</td></tr>
                            <tr><td>4</td><td>Industrial Oils</td></tr>
                            <tr><td>5</td><td>Pharmaceuticals</td></tr>
                            <tr><td>6</td><td>Common Metals</td></tr>
                            <tr><td>7</td><td>Machines</td></tr>
                            <tr><td>8</td><td>Hand Tools</td></tr>
                            <tr><td>9</td><td>Scientific Apparatus</td></tr>
                            <tr><td>10</td><td>Medical Apparatus</td></tr>
                            <tr><td>11</td><td>Apparatus for Lighting</td></tr>
                            <tr><td>12</td><td>Vehicles</td></tr>
                            <tr><td>13</td><td>Firearms</td></tr>
                            <tr><td>14</td><td>Jewelry</td></tr>
                            <tr><td>15</td><td>Musical Instruments</td></tr>
                            <tr><td>16</td><td>Paper Goods</td></tr>
                            <tr><td>17</td><td>Rubber Goods</td></tr>
                            <tr><td>18</td><td>Leather Goods</td></tr>
                            <tr><td>19</td><td>Building Materials</td></tr>
                            <tr><td>20</td><td>Furniture</td></tr>
                            <tr><td>21</td><td>Household Utensils</td></tr>
                            <tr><td>22</td><td>Ropes</td></tr>
                            <tr><td>23</td><td>Yarns</td></tr>
                            <tr><td>24</td><td>Textiles</td></tr>
                            <tr><td>25</td><td>Clothing</td></tr>
                            <tr><td>26</td><td>Lace and Embroidery</td></tr>
                            <tr><td>27</td><td>Carpets</td></tr>
                            <tr><td>28</td><td>Games and Sports</td></tr>
                            <tr><td>29</td><td>Meat and Fish</td></tr>
                            <tr><td>30</td><td>Staple Foods</td></tr>
                            <tr><td>31</td><td>Agricultural Products</td></tr>
                            <tr><td>32</td><td>Beer and Beverages</td></tr>
                            <tr><td>33</td><td>Alcoholic Beverages</td></tr>
                            <tr><td>34</td><td>Tobacco Products</td></tr>
                            <tr><td>35</td><td>Advertising and Business</td></tr>
                            <tr><td>36</td><td>Financial Services</td></tr>
                            <tr><td>37</td><td>Building Construction</td></tr>
                            <tr><td>38</td><td>Telecommunications</td></tr>
                            <tr><td>39</td><td>Transportation</td></tr>
                            <tr><td>40</td><td>Treatment of Materials</td></tr>
                            <tr><td>41</td><td>Education and Entertainment</td></tr>
                            <tr><td>42</td><td>Computer and Scientific</td></tr>
                            <tr><td>43</td><td>Hotels and Restaurants</td></tr>
                            <tr><td>44</td><td>Medical and Veterinary</td></tr>
                            <tr><td>45</td><td>Legal and Security Services</td></tr>
                        </tbody>
                    </table>
                </div>

                <!-- Validity and Renewal -->
                <div class="content-section">
                    <h2>Validity and Renewal of Trademark</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Initial Validity:</strong> Trademark registration is valid for 10 years from the date of application</li>
                        <li><strong>Renewal Period:</strong> Can be renewed indefinitely for successive periods of 10 years</li>
                        <li><strong>Renewal Process:</strong> File renewal application (Form TM-R) before expiry or within 6 months after expiry</li>
                        <li><strong>Late Renewal:</strong> Additional fees apply for late renewal applications</li>
                        <li><strong>Continuous Use:</strong> Trademark must be actively used to maintain registration</li>
                    </ul>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="text-center mb-6 md:mb-8">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue mt-2">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600 text-center">
                        Find answers to common questions about trademark registration, process, benefits, requirements, and legal protection.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can individuals register a trademark?</span>
                                <i class="fas fa-chevron-down faq-icon rotated"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Yes, individuals, companies, partnerships, trusts, and other legal entities can register trademarks. The applicant must be the owner of the trademark and intend to use it in connection with goods or services.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What's the timeframe for trademark registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The trademark registration process typically takes 12-18 months from application to registration certificate issuance. This includes examination, publication, and opposition periods.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is trademark registration mandatory?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>While not mandatory, trademark registration provides legal protection and exclusive rights. Without registration, you have limited protection and cannot prevent others from using similar marks.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Are there more than various trademarks?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, there are several types of trademarks including word marks, device marks, sound marks, shape marks, collective marks, and service marks, each serving different purposes in brand protection.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What happens if a trademark is similar to another?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>If your trademark is similar to an existing one, it may face objections or opposition. The Trademark Registry will examine for conflicts and may reject applications that could cause confusion among consumers.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can trademark and logo exist together?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, trademarks and logos can coexist. A logo can be registered as a device mark, while the business name can be registered as a word mark, providing comprehensive brand protection.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Does trademark cover similar sounding names?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Trademark protection extends to phonetically similar names that could cause confusion. The Trademark Registry examines applications for phonetic similarity to prevent consumer confusion.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What's the difference between ™ and ® symbols?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>TM symbol indicates that a trademark application has been filed but not yet registered. ® symbol indicates that the trademark is officially registered and provides full legal protection.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can a trademark be for a keyword?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Generic keywords cannot be trademarked, but distinctive combinations or stylized versions of keywords can be registered if they meet distinctiveness requirements and are used in commerce.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the renewal deadline?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Trademark renewal can be filed before expiry or within 6 months after expiry. Late renewal attracts additional fees, and failure to renew results in trademark cancellation.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 11 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can I modify a trademark after registration?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Significant changes to a trademark require a new application. Minor changes may be allowed through trademark rectification procedures, but substantial modifications need fresh registration.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 12 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the role of trademark classes?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Trademark classes categorize goods and services into 45 classes. You must specify which classes your trademark applies to, and protection is limited to those specific classes.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 13 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the opposition period for a trademark?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>The opposition period is 4 months from the date of publication in the Trademark Journal. During this time, third parties can file objections to prevent registration.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 14 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Does trademark registration give me copyright?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No, trademark and copyright are separate forms of intellectual property. Trademark protects brand identity, while copyright protects original creative works. You need separate registrations for each.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 15 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can an unregistered trademark be used by others?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Unregistered trademarks have limited protection. Others may use similar marks unless you can prove prior use and reputation. Registration provides stronger legal protection and exclusive rights.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 16 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How often is a trademark updated?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Trademarks don't require regular updates, but you must renew them every 10 years. You should also update contact information and address changes with the Trademark Registry.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 17 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Are there any fees for assigning a trademark?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, trademark assignment requires filing fees with the Trademark Registry. The fees vary based on the type of assignment and must be paid when recording the transfer.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 18 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is there a trademark directory search?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, the Trademark Registry maintains a searchable database where you can check existing trademarks before filing your application to avoid conflicts.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 19 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can two companies have similar names in different classes?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, similar names can coexist in different trademark classes if they don't cause confusion. However, famous trademarks may have protection across multiple classes.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 20 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What if my trademark is challenged?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>If your trademark is challenged through opposition or cancellation proceedings, you can defend it by providing evidence of distinctiveness, prior use, or other legal arguments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 text-center">
                        <p class="text-gray-500 text-sm">
                            For personalized assistance, our trademark experts can guide you through the entire process and answer all your queries.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Form -->
            <div class="lg:col-span-1">
                <div class="form-sidebar p-4 md:p-6">
                    <h3 class="text-xl font-bold Asktrix-blue mb-3 md:mb-4">Clear your doubts</h3>
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm text-gray-600">Price Starts Onwards</span>
                        <div class="price-highlight">₹7,899 INR</div>
                    </div>
                    
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
                    
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-3 md:space-y-4">
                        @csrf
                        <div>
                            <input type="hidden" 
                                   id="service_type" 
                                   name="service_type" 
                                   value="trademark-registration">
                        </div>
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required
                                   value="{{ old('name') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('name') border-red-500 @enderror"
                                   placeholder="Enter your name">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   value="{{ old('email') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('email') border-red-500 @enderror"
                                   placeholder="Enter your email">
                        </div>
                        
                        <div>
                            <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Mobile</label>
                            <input type="tel" 
                                   id="mobile" 
                                   name="mobile" 
                                   required
                                   value="{{ old('mobile') }}"
                                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('mobile') border-red-500 @enderror"
                                   placeholder="Enter your mobile number">
                        </div>
                        
                        <div>
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">Tell us more about your Query</label>
                            <textarea id="query" 
                                      name="query" 
                                      rows="3" 
                                      required
                                      class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-Asktrix-green focus:border-transparent mobile-form-input @error('query') border-red-500 @enderror"
                                      placeholder="Describe your requirements...">{{ old('query') }}</textarea>
                        </div>
                        
                        <button type="submit" 
                                id="submitBtn"
                                class="w-full bg-Asktrix-green hover:bg-green-600 text-white font-semibold py-2 md:py-3 px-4 md:px-6 rounded-lg transition-colors">
                            <span id="submitText">Pay Now</span>
                            <span id="loadingText" class="hidden">
                                <i class="fas fa-spinner fa-spin mr-2"></i>Submitting...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll to Top Button -->
<button class="scroll-to-top-btn" onclick="scrollToTop()" style="display: none;">
    <i class="fas fa-chevron-up"></i>
</button>
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

    function toggleFAQ(element) {
        const answer = element.nextElementSibling;
        const icon = element.querySelector('.faq-icon');
        
        // Close all other FAQ items
        document.querySelectorAll('.faq-answer').forEach(item => {
            if (item !== answer) {
                item.classList.remove('active');
            }
        });
        
        document.querySelectorAll('.faq-icon').forEach(item => {
            if (item !== icon) {
                item.classList.remove('rotated');
            }
        });
        
        // Toggle current FAQ item
        answer.classList.toggle('active');
        icon.classList.toggle('rotated');
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Show/hide scroll to top button
    window.addEventListener('scroll', function() {
        const scrollBtn = document.querySelector('.scroll-to-top-btn');
        if (window.pageYOffset > 300) {
            scrollBtn.style.display = 'flex';
        } else {
            scrollBtn.style.display = 'none';
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endsection