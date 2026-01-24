<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Services\IncorporationController;
use App\Http\Controllers\accounting\AccountingController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\LicenseRegistrationController;
use App\Http\Controllers\RocController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PaymentController;


// Fallback route for invalid URLs - redirect to home page
Route::fallback(function () {return redirect('/');});

// Home Route
Route::get('/', function () {return view('home');})->name('home');

// About Us Route
Route::get('about-us/', function () {return view('about-us');})->name('about-us');

// Contact Us Route
Route::get('contact-us/', function () {return view('contact-us');})->name('contact-us');

// Terms and Conditions Route
Route::get('terms-conditions/', function () {return view('terms-conditions');})->name('terms-conditions');

// Cancellation & Refund Policy Route
Route::get('cancellation-refund/', function () {return view('cancellation-refund');})->name('cancellation-refund');

// Privacy Policy Route
Route::get('privacy-policy/', function () {return view('privacy-policy');})->name('privacy-policy');

// Disclaimer Route
Route::get('disclaimer/', function () {return view('disclaimer');})->name('disclaimer');

// Sitemap Route
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Global Contact Route
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Accounting Routes
Route::get('accounting-registration/', [AccountingController::class, 'index'])->name('accounting');
Route::get('company-annual-filing-roc/', [AccountingController::class, 'companyAnnualFilingRoc'])->name('company-annual-filing-roc');
Route::get('llp-annual-filing/', [AccountingController::class, 'llpAnnualFiling'])->name('llp-annual-filing');
Route::get('proprietorship-compliance/', [AccountingController::class, 'proprietorshipCompliance'])->name('proprietorship-compliance');
Route::get('gst-return-filing/', [AccountingController::class, 'gstReturnFiling'])->name('gst-return-filing');
Route::get('income-tax-return-filing/', [AccountingController::class, 'incomeTaxReturnFiling'])->name('income-tax-return-filing');
Route::get('tds-return-filing/', [AccountingController::class, 'tdsReturnFiling'])->name('tds-return-filing');
Route::get('esi-return-filing/', [AccountingController::class, 'esiReturnFiling'])->name('esi-return-filing');
Route::get('pf-return-filing/', [AccountingController::class, 'pfReturnFiling'])->name('pf-return-filing');
Route::get('professional-tax-return-filing/', [AccountingController::class, 'professionalTaxReturnFiling'])->name('professional-tax-return-filing');


// Registration Routes
Route::get('registrations/', [RegistrationController::class, 'index'])->name('registration');
Route::get('gst-registration/', [RegistrationController::class, 'gstRegistration'])->name('gst-registration');
Route::get('professional-tax-registration/', [RegistrationController::class, 'professionalTaxRegistration'])->name('professional-tax-registration');
Route::get('msme-registration/', [RegistrationController::class, 'msmeRegistration'])->name('msme-registration');
Route::get('esic-registration/', [RegistrationController::class, 'esicRegistration'])->name('esic-registration');
Route::get('epf-registration/', [RegistrationController::class, 'epfRegistration'])->name('epf-registration');
Route::get('rcmc-registration/', [RegistrationController::class, 'rcmcRegistration'])->name('rcmc-registration');
Route::get('startup-india-registration/', [RegistrationController::class, 'startupIndiaRegistration'])->name('startup-india-registration');
Route::get('digital-signature-online/', [RegistrationController::class, 'digitalSignatureOnline'])->name('digital-signature-online');


// Trademark Routes
Route::get('trademark', [TrademarkController::class, 'index'])->name('trademark');
Route::get('trademark-registration/', [TrademarkController::class, 'trademarkRegistration'])->name('trademark-registration');
Route::get('copyright-registration/', [TrademarkController::class, 'copyrightRegistration'])->name('copyright-registration');
Route::get('copyright-objection/', [TrademarkController::class, 'copyrightObjection'])->name('copyright-objection');
Route::get('copyright-hearing/', [TrademarkController::class, 'copyrightHearing'])->name('copyright-hearing');
Route::get('patent-registration/', [TrademarkController::class, 'patentRegistration'])->name('patent-registration');
Route::get('trademark-objection/', [TrademarkController::class, 'trademarkObjection'])->name('trademark-objection');
Route::get('trademark-hearing/', [TrademarkController::class, 'trademarkHearing'])->name('trademark-hearing');
Route::get('trademark-opposition/', [TrademarkController::class, 'trademarkOpposition'])->name('trademark-opposition');
Route::get('trademark-rectification/', [TrademarkController::class, 'trademarkRectification'])->name('trademark-rectification');
Route::get('trademark-registration-certificate/', [TrademarkController::class, 'trademarkRegistrationCertificate'])->name('trademark-registration-certificate');
Route::get('trademark-renewal/', [TrademarkController::class, 'trademarkRenewal'])->name('trademark-renewal');
Route::get('copyright-registration-certificate/', [TrademarkController::class, 'copyrightRegistrationCertificate'])->name('copyright-registration-certificate');


// License Registration Routes
Route::get('license-registration', [LicenseRegistrationController::class, 'index'])->name('license-registration');
Route::get('import-export-code-registration/', [LicenseRegistrationController::class, 'ieCodeRegistration'])->name('ie-code-registration');
Route::get('trade-license-registration/', [LicenseRegistrationController::class, 'tradeLicenseRegistration'])->name('trade-license-registration');
Route::get('fire-license-registration/', [LicenseRegistrationController::class, 'fireLicenseRegistration'])->name('fire-license-registration');
Route::get('shop-establishment-license-registration/', [LicenseRegistrationController::class, 'shopEstablishmentLicenseRegistration'])->name('shop-establishment-license-registration');
Route::get('iso-certification/', [LicenseRegistrationController::class, 'isoCertification'])->name('iso-certification');
Route::get('letter-of-undertaking-gst-lut/', [LicenseRegistrationController::class, 'lutRegistration'])->name('lut-registration');
Route::get('fssai-registration/', [LicenseRegistrationController::class, 'fssaiRegistration'])->name('fssai-registration');
Route::get('fcra/', [LicenseRegistrationController::class, 'fcraRegistration'])->name('fcra-registration');
Route::get('12a-registration/', [LicenseRegistrationController::class, 'twelveARegistration'])->name('12a-registration');
Route::get('80g-registration/', [LicenseRegistrationController::class, 'eightyGRegistration'])->name('80g-registration');
Route::get('darpan-registration/', [LicenseRegistrationController::class, 'darpanRegistration'])->name('darpan-registration');


// Incorporation Routes
Route::get('incorporation', [IncorporationController::class, 'index'])->name('incorporation');
Route::get('private-limited-company-registration', [RegistrationController::class, 'privateLimitedCompany'])->name('private-limited-company-registration');
Route::get('public-limited-company-registration', [RegistrationController::class, 'publicLimitedCompany'])->name('public-limited-company-registration');
Route::get('one-person-company-registration', [RegistrationController::class, 'onePersonCompany'])->name('one-person-company-registration');
Route::get('llp-registration', [IncorporationController::class, 'llpRegistration'])->name('llp-registration');
Route::get('partnership-firm-registration', [IncorporationController::class, 'partnershipFirmRegistration'])->name('partnership-firm-registration');
Route::get('sole-proprietorship-registration', [IncorporationController::class, 'soleProprietorshipRegistration'])->name('sole-proprietorship-registration');
Route::get('trust-registration', [RegistrationController::class, 'trustRegistration'])->name('trust-registration');
Route::get('section-8-company', [RegistrationController::class, 'section8Company'])->name('section-8-company');


// ROC Routes

Route::get('roc-registrar-of-companies', [RocController::class, 'index'])->name('roc-registrar-of-companies');
Route::get('appointment-of-director', [RocController::class, 'appointmentOfDirector'])->name('appointment-of-director');
Route::get('removal-of-director', [RocController::class, 'removalOfDirector'])->name('removal-of-director');
Route::get('company-share-transfer', [RocController::class, 'companyShareTransfer'])->name('company-share-transfer'); 
Route::get('strike-off-company', [RocController::class, 'strikeOffCompany'])->name('strike-off-company');
Route::get('director-disqualification', [RocController::class, 'directorDisqualification'])->name('director-disqualification');
Route::get('company-name-change', [RocController::class, 'companyNameChange'])->name('company-name-change');
Route::get('authorized-capital', [RocController::class, 'authorizedCapital'])->name('authorized-capital');
Route::get('change-of-registered-office', [RocController::class, 'changeOfRegisteredOffice'])->name('change-of-registered-office');





