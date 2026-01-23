@extends('layouts.app')

@section('title', 'Proprietorship Compliance Guide (Accounting, Auditing & Tax Requirements) - Asktrix')

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
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 16px;
    }
    
    @media (min-width: 768px) {
        .content-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
    }
    .content-section h3 {
        color: #1a237e;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 12px;
    }
    
    @media (min-width: 768px) {
        .content-section h3 {
            font-size: 22px;
            margin-bottom: 16px;
        }
    }
    .content-section h4 {
        color: #1a237e;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 12px;
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
        font-size: 24px;
        font-weight: 700;
        color: #4caf50;
    }
    
    @media (min-width: 768px) {
        .price-highlight {
            font-size: 32px;
        }
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
                        Proprietorship Compliance Guide (Accounting, Auditing & Tax Requirements)
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed">
                        Proprietorship is one of the most popular business structures in India due to its simplicity and ease of operation. However, proprietors must comply with various accounting, auditing, and tax requirements to maintain legal standing and avoid penalties. This comprehensive guide covers all compliance obligations for proprietorship businesses.
                    </p>
                </div>

                <!-- Governing Acts and Rules -->
                <div class="content-section">
                    <h2>Governing Acts and Rules</h2>
                    <p>Proprietorship businesses must comply with various acts and regulations:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Income Tax Act, 1961:</strong> Tax compliance and filing requirements for proprietorship income</li>
                        <li><strong>Goods and Services Tax Act, 2017:</strong> GST compliance for businesses with turnover above ₹20 lakhs</li>
                        <li><strong>Shop and Establishment Act:</strong> State-specific labor law compliance</li>
                        <li><strong>Professional Tax Act:</strong> Professional tax compliance in applicable states</li>
                    </ul>
                </div>

                <!-- Key Compliance Requirements -->
                <div class="content-section">
                    <h2>Key Compliance Requirements for Proprietorships</h2>
                    
                    <!-- Income Tax Compliance -->
                    <div class="mb-6 md:mb-8">
                        <h3>Income Tax Compliance</h3>
                        
                        <!-- Income Tax Return Filing -->
                        <div class="mb-6">
                            <h4>Income Tax Return Filing</h4>
                            <p>Proprietors must file income tax returns using appropriate forms:</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li><strong>ITR-3:</strong> For proprietors with business income and presumptive taxation</li>
                                <li><strong>ITR-4:</strong> For proprietors opting for presumptive taxation under Section 44AD</li>
                                <li><strong>Due Dates:</strong> July 31st (normal cases) or October 31st (tax audit cases)</li>
                                <li><strong>Advance Tax:</strong> Quarterly advance tax payments based on estimated income</li>
                            </ul>
                        </div>

                        <!-- TDS Deduction and Filing -->
                        <div class="mb-6">
                            <h4>TDS Deduction and Filing</h4>
                            <p>Proprietors must deduct TDS on applicable payments and file quarterly returns:</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li>Deduct TDS on payments exceeding specified thresholds</li>
                                <li>File quarterly TDS returns (Form 24Q/26Q)</li>
                                <li>Issue TDS certificates to deductees</li>
                                <li>Pay TDS amounts within prescribed timelines</li>
                            </ul>
                        </div>

                        <!-- Financial Records to Maintain -->
                        <div class="mb-6">
                            <h4>Financial Records to Maintain for Proprietorships</h4>
                            
                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">Books of Accounts</h5>
                                <ul class="list-disc list-inside space-y-1 ml-4">
                                    <li>Cash Book</li>
                                    <li>Ledger Accounts</li>
                                    <li>Journal Entries</li>
                                    <li>Purchase and Sales Registers</li>
                                    <li>Bank Reconciliation Statements</li>
                                </ul>
                            </div>

                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">Invoice Records</h5>
                                <ul class="list-disc list-inside space-y-1 ml-4">
                                    <li>GST-compliant invoices for sales</li>
                                    <li>Purchase invoices and bills</li>
                                    <li>Credit and debit notes</li>
                                    <li>E-way bills for goods transportation</li>
                                </ul>
                            </div>

                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">Expense Vouchers</h5>
                                <ul class="list-disc list-inside space-y-1 ml-4">
                                    <li>Travel and conveyance vouchers</li>
                                    <li>Office expenses receipts</li>
                                    <li>Professional fees receipts</li>
                                    <li>Other business expense documentation</li>
                                </ul>
                            </div>

                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">Employee Payroll Records (if applicable)</h5>
                                <ul class="list-disc list-inside space-y-1 ml-4">
                                    <li>Salary and wage records</li>
                                    <li>TDS certificates (Form 16/16A)</li>
                                    <li>Provident Fund records</li>
                                    <li>ESI records and contributions</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Auditing Requirements -->
                    <div class="mb-6 md:mb-8">
                        <h3>Auditing Requirements for Proprietorships</h3>
                        
                        <!-- Tax Audit -->
                        <div class="mb-6">
                            <h4>Tax Audit</h4>
                            <p>Tax audit is mandatory under Section 44AB of the Income Tax Act when:</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li><strong>Turnover Criteria:</strong> Business turnover exceeds ₹1 crore (₹2 crore for presumptive taxation)</li>
                                <li><strong>Professional Income:</strong> Professional receipts exceed ₹50 lakhs</li>
                                <li><strong>Audit Report:</strong> Form 3CD must be filed along with tax return</li>
                            </ul>
                        </div>

                        <!-- GST Audit -->
                        <div class="mb-6">
                            <h4>GST Audit</h4>
                            <p>GST audit is required when:</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li><strong>Turnover Threshold:</strong> Annual turnover exceeds ₹2 crore</li>
                                <li><strong>Audit Report:</strong> Form GSTR-9C must be filed</li>
                                <li><strong>Due Date:</strong> December 31st of the following financial year</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Timelines and Penalties -->
                    <div class="mb-6 md:mb-8">
                        <h3>Timelines and Penalties</h3>
                        <div class="bg-gray-50 p-4 md:p-6 rounded-lg">
                            <h4 class="font-semibold mb-3 md:mb-4">Key Deadlines and Penalties:</h4>
                            
                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">Income Tax Return Due By:</h5>
                                <ul class="space-y-1">
                                    <li><strong>July 31st:</strong> Normal cases (ITR-4)</li>
                                    <li><strong>October 31st:</strong> Tax audit cases (ITR-3)</li>
                                </ul>
                            </div>

                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">GST Compliance:</h5>
                                <ul class="space-y-1">
                                    <li><strong>Monthly Returns:</strong> GSTR-1 (11th of next month), GSTR-3B (20th of next month)</li>
                                    <li><strong>Quarterly Returns:</strong> For businesses with turnover up to ₹5 crore</li>
                                    <li><strong>Annual Return:</strong> GSTR-9 (December 31st)</li>
                                </ul>
                            </div>

                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">TDS/TCS Compliance:</h5>
                                <ul class="space-y-1">
                                    <li><strong>Monthly Payment:</strong> 7th of next month</li>
                                    <li><strong>Quarterly Return Filing:</strong> 31st of next month</li>
                                </ul>
                            </div>

                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">Professional Tax:</h5>
                                <ul class="space-y-1">
                                    <li><strong>Monthly Payment:</strong> 15th of next month</li>
                                    <li><strong>Quarterly Payment:</strong> For small businesses</li>
                                    <li><strong>Annual Return:</strong> As per state requirements</li>
                                </ul>
                            </div>

                            <div class="mb-3 md:mb-4">
                                <h5 class="font-semibold Asktrix-blue mb-2">Shop and Establishment License:</h5>
                                <ul class="space-y-1">
                                    <li><strong>Renewal:</strong> Annual renewal required</li>
                                    <li><strong>Compliance:</strong> Maintain registers and records</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Other Compliance Requirements -->
                    <div class="mb-6 md:mb-8">
                        <h3>Other Compliance Requirements</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>MSME Registration:</strong> Optional registration for benefits and schemes</li>
                            <li><strong>Import Export Code (IEC):</strong> Required for international trade activities</li>
                            <li><strong>FSSAI Registration:</strong> Mandatory for food-related businesses</li>
                            <li><strong>EPF/ESI Registration:</strong> Required when employing workers above threshold limits</li>
                        </ul>
                    </div>

                    <!-- Benefits of Compliance -->
                    <div class="mb-6 md:mb-8">
                        <h3>Benefits of Compliance for Proprietorships with Asktrix</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li><strong>Hassle-Free Compliance:</strong> Complete support for all compliance requirements</li>
                            <li><strong>Error-Free Operations:</strong> Expert guidance to avoid penalties and mistakes</li>
                            <li><strong>Efficient Bookkeeping:</strong> Systematic record-keeping and documentation</li>
                            <li><strong>Tax Optimization:</strong> Maximum deductions and tax savings</li>
                            <li><strong>Peace of Mind:</strong> Focus on business growth while we handle compliance</li>
                        </ul>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="content-section">
                    <div class="mb-3 md:mb-4">
                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">FAQ</span>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold Asktrix-blue">Frequently Asked Questions</h2>
                    </div>
                    <p class="mb-6 md:mb-8 text-gray-600">
                        Find answers to common questions about proprietorship compliance, tax filing, GST requirements, auditing, and timelines.
                    </p>

                    <div class="space-y-3 md:space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is it mandatory for all proprietorships to file tax returns?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer active">
                                <p>Yes, proprietorships with annual income above ₹2.5 lakhs must file income tax returns. Even if income is below this threshold, filing returns is recommended for various benefits like loan applications and visa processing.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What forms are used for Income tax filing in proprietorships?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Proprietorships typically use ITR-3 for business income or ITR-4 for presumptive taxation under Section 44AD. The choice depends on turnover and accounting method adopted.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How is GST applicable to a proprietorship?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GST registration is mandatory for proprietorships with annual turnover above ₹20 lakhs (₹10 lakhs for special category states). Below this threshold, registration is optional but recommended for business credibility.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What if I miss the Income tax filing deadline?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late filing attracts penalties up to ₹5,000 and interest on tax due. However, you can still file belated returns within one year of the due date with additional fees.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Do proprietorships need to file TDS returns?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, if the proprietorship deducts TDS on payments like rent, professional fees, or contractor payments above specified thresholds, quarterly TDS returns must be filed.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is it mandatory for proprietorships to register under the Shop and Establishment Act?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, most states require proprietorships to register under the Shop and Establishment Act within 30 days of starting business operations.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What records are required for a GST audit?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GST audit requires maintaining books of accounts, invoices, purchase records, bank statements, and reconciliation statements between books and GST returns.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the penalty for late GST return filing?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Late GST return filing attracts penalties of ₹200 per day (₹100 for CGST + ₹100 for SGST) with maximum penalty of ₹5,000 per return.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">When is a tax audit required for proprietorships?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Tax audit is mandatory when business turnover exceeds ₹1 crore (₹2 crore for presumptive taxation) or professional receipts exceed ₹50 lakhs.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How can Asktrix assist with my tax audit?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides complete tax audit support including preparation of books, reconciliation, audit report filing, and liaison with auditors to ensure smooth compliance.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 11 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is bookkeeping mandatory for proprietorships?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, maintaining proper books of accounts is mandatory for proprietorships with turnover above ₹1.2 lakhs or when opting out of presumptive taxation.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 12 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Do proprietors need an annual financial statement?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>While not mandatory like companies, proprietors should prepare annual financial statements for tax filing, loan applications, and business analysis purposes.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 13 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Can I file presumptive tax under Section 44AD?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, proprietorships with turnover up to ₹2 crore can opt for presumptive taxation under Section 44AD, declaring 8% of turnover as profit (6% for digital payments).</p>
                            </div>
                        </div>

                        <!-- FAQ Item 14 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is GST registration necessary if turnover is below ₹20 lakh?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>GST registration is optional below ₹20 lakh turnover, but recommended for business credibility, input tax credit benefits, and competitive advantage.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 15 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the penalty for failing to deduct TDS?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Failure to deduct TDS attracts penalty equal to the amount not deducted, plus interest at 1% per month from the due date of deduction.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 16 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What are the due dates for Income tax payments?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Income tax payments are due quarterly: 15% by June 15, 45% by September 15, 75% by December 15, and 100% by March 15 of the financial year.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 17 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">What is the advance tax payment schedule?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Advance tax must be paid in four installments: 15% by June 15, 45% by September 15, 75% by December 15, and 100% by March 15.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 18 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How often do I need to file GST returns?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Monthly GST returns (GSTR-1, GSTR-3B) are required for businesses with turnover above ₹5 crore. Smaller businesses can file quarterly returns.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 19 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">Is professional tax applicable to proprietorships?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Professional tax applies in certain states like Maharashtra, Karnataka, Tamil Nadu, etc. It's levied on professionals and business owners based on income slabs.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 20 -->
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span class="font-semibold">How can Asktrix help me with GST compliance?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Asktrix provides complete GST compliance services including registration, monthly/quarterly return filing, reconciliation, annual return preparation, and audit support.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 md:p-6 bg-blue-50 rounded-lg">
                        <p class="text-gray-700">
                            Ensuring smooth compliance for your proprietorship business with Asktrix provides not only legal adherence but also ongoing support for growth and success. Our comprehensive approach ensures your business meets all regulatory requirements efficiently and accurately.
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
                        <div class="price-highlight">₹9,899 INR</div>
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
                                   value="proprietorship-compliance">
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
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">Tell us how can we help you</label>
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
