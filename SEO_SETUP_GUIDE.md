# SEO & Digital Marketing Setup Guide for Asktrix Website

## 📋 Table of Contents

1. [SEO Implementation Status](#seo-implementation-status)
2. [What Has Been Implemented](#what-has-been-implemented)
3. [Actions Required](#actions-required)
4. [How to Check Your Website](#how-to-check-your-website)
5. [Digital Marketing Setup](#digital-marketing-setup)
6. [Social Media Advertising Setup](#social-media-advertising-setup)

---

## ✅ SEO Implementation Status

### What Has Been Implemented

#### 1. **Meta Tags**

-   ✅ Primary meta tags (title, description, keywords)
-   ✅ Open Graph tags for Facebook
-   ✅ Twitter Card tags
-   ✅ Mobile viewport settings
-   ✅ Geo-location tags (Bengaluru, Karnataka, India)
-   ✅ Robots directive

#### 2. **Structured Data (Schema.org)**

-   ✅ Organization schema
-   ✅ Contact information
-   ✅ Social media profiles
-   ✅ Address markup

#### 3. **SEO-Friendly Features**

-   ✅ Semantic HTML5
-   ✅ Responsive design (mobile-first)
-   ✅ Sitemap.xml generation
-   ✅ Social sharing buttons
-   ✅ Proper heading hierarchy

#### 4. **Social Media Integration**

-   ✅ Facebook sharing
-   ✅ Twitter sharing
-   ✅ LinkedIn sharing
-   ✅ WhatsApp sharing
-   ✅ Instagram link

---

## 🔧 Actions Required

### 1. **Google Analytics Setup** (CRITICAL)

**Step 1:** Go to [Google Analytics](https://analytics.google.com/)

**Step 2:** Create a property for your website

**Step 3:** Get your Measurement ID (looks like: G-XXXXXXXXXX)

**Step 4:** Update the file:

```
File: resources/views/layouts/app.blade.php
Line: 345 and 350
```

Replace `GA_MEASUREMENT_ID` with your actual Google Analytics ID

### 2. **Google Search Console Setup** (CRITICAL)

**Step 1:** Go to [Google Search Console](https://search.google.com/search-console/)

**Step 2:** Add your website property

**Step 3:** Verify ownership using one of these methods:

-   HTML meta tag
-   Upload HTML file
-   DNS verification

**Step 4:** After verification, update:

```
File: resources/views/layouts/app.blade.php
Line: 68
```

Replace `YOUR_GOOGLE_VERIFICATION_CODE_HERE` with your verification code

### 3. **Facebook Pixel Setup** (Optional but Recommended)

**Step 1:** Go to [Facebook Business Manager](https://business.facebook.com/)

**Step 2:** Create a Pixel

**Step 3:** Get your Pixel ID

**Step 4:** Uncomment and update the Facebook Pixel code in:

```
File: resources/views/layouts/app.blade.php
Lines: 353-370
```

Replace `YOUR_PIXEL_ID` with your actual Pixel ID

### 4. **Update Social Media Links**

Update the social media URLs in:

```
File: resources/views/layouts/app.blade.php
Lines: 58-63
```

Add your actual social media profile URLs:

-   Facebook: https://www.facebook.com/asktrix
-   Instagram: https://www.instagram.com/asktrix
-   LinkedIn: https://www.linkedin.com/company/asktrix
-   Twitter: https://twitter.com/asktrix

### 5. **Add Images for Social Sharing**

Create optimized images (1200x630px) for social sharing:

-   Homepage image
-   Service-specific images
-   Blog post images

Store them in: `public/images/social/`

Then update the OG image tags in individual pages using:

```php
@section('og_image', asset('images/social/homepage-social.jpg'))
```

---

## 🔍 How to Check Your Website

### 1. **Google Search Console**

**Check if your site is indexed:**

1. Go to Google Search Console
2. Click on "Coverage" in the left menu
3. Check if your pages are indexed

**Submit your sitemap:**

1. Click on "Sitemaps"
2. Enter: `https://yourdomain.com/sitemap.xml`
3. Click "Submit"

### 2. **Test Open Graph Tags**

**Facebook Debugger:**

-   Visit: https://developers.facebook.com/tools/debug/
-   Enter your website URL
-   Click "Debug" to see how it will appear on Facebook

**Twitter Card Validator:**

-   Visit: https://cards-dev.twitter.com/validator
-   Enter your website URL
-   Preview how your tweets will appear

**LinkedIn Post Inspector:**

-   Visit: https://www.linkedin.com/post-inspector/
-   Enter your website URL
-   See how it appears on LinkedIn

### 3. **Check Mobile-Friendliness**

**Google Mobile-Friendly Test:**

-   Visit: https://search.google.com/test/mobile-friendly
-   Enter your URL
-   Get a report

### 4. **Check Page Speed**

**PageSpeed Insights:**

-   Visit: https://pagespeed.web.dev/
-   Enter your URL
-   Get optimization suggestions

### 5. **Check SEO Score**

**Online Tools:**

-   SEOMetrix: https://www.seometrix.com/
-   Website Grader: https://website.grader.com/
-   SEO Site Checkup: https://seositecheckup.com/

---

## 📱 Digital Marketing Setup

### 1. **Google Ads Setup**

**Step 1:** Create Google Ads account

-   Visit: https://ads.google.com/

**Step 2:** Install Google Tag Manager (Recommended)

-   Create a GTM container
-   Add container code to your website
-   Implement conversion tracking

**Step 3:** Create Campaigns

-   Search campaigns for keywords like:
    -   "GST registration"
    -   "Company incorporation"
    -   "Trademark registration"
    -   "Business consulting India"

**Step 4:** Set Conversion Goals

-   Form submissions
-   Phone calls
-   Service page visits
-   Free consultations

### 2. **Facebook Ads Setup**

**Step 1:** Create Facebook Business Page

-   Visit: https://www.facebook.com/business/pages

**Step 2:** Set Up Ads Manager\*\*

-   Visit: https://business.facebook.com/ads

**Step 3:** Create Ad Campaigns

-   Use Facebook Pixel for tracking
-   Target audience:
    -   Location: India (specific cities)
    -   Age: 25-55
    -   Interests: Business, Entrepreneurship, Finance
    -   Demographics: Business owners, entrepreneurs

**Step 4:** Ad Formats to Use\*\*

-   Image ads
-   Video ads
-   Carousel ads (for multiple services)
-   Lead generation ads

### 3. **Instagram Ads Setup**

**Step 1:** Create Instagram Business Account

-   Link with Facebook Business Page

**Step 2:** Create Ads in Facebook Ads Manager

-   Select Instagram placement
-   Use visual content

### 4. **LinkedIn Ads Setup**

**Step 1:** Create LinkedIn Company Page

-   Visit: https://www.linkedin.com/company/

**Step 2:** Set Up LinkedIn Campaign Manager

-   Visit: https://www.linkedin.com/campaignmanager/

**Step 3:** Target B2B Audience

-   Company size
-   Job titles (CEO, CFO, Business Owner)
-   Industries
-   Location

---

## 🎯 Social Media Advertising Strategy

### 1. **Content Strategy**

**Create content for:**

-   Educational posts about services
-   Success stories/case studies
-   Industry news and updates
-   Tips and best practices
-   Behind-the-scenes content

### 2. **Ad Types to Use**

**Google Ads:**

-   Search Ads (keyword targeting)
-   Display Ads (remarketing)
-   Shopping Ads (if applicable)
-   YouTube Ads (video marketing)

**Facebook/Instagram Ads:**

-   Awareness campaigns
-   Traffic campaigns
-   Lead generation campaigns
-   Conversion campaigns

### 3. **Targeting Strategy**

**Geographic Targeting:**

-   Primary: Bangalore, Karnataka
-   Secondary: Major cities in India
-   Tertiary: India-wide

**Demographic Targeting:**

-   Age: 25-55
-   Gender: All
-   Education: Business-related backgrounds

**Interest Targeting:**

-   Business consulting
-   Financial services
-   Entrepreneurship
-   Compliance and regulations
-   Tax and accounting

### 4. **Budget Allocation**

**Recommended Monthly Budgets:**

-   Google Ads: ₹20,000 - ₹50,000
-   Facebook Ads: ₹15,000 - ₹40,000
-   LinkedIn Ads: ₹10,000 - ₹30,000

**Start Small:**

-   Begin with ₹10,000/month per platform
-   Test which platform performs best
-   Scale up successful campaigns

---

## 📊 Monitoring & Optimization

### 1. **Key Metrics to Track**

**Website Metrics:**

-   Organic traffic (Google Analytics)
-   Bounce rate
-   Average session duration
-   Pages per session
-   Conversion rate

**Ad Metrics:**

-   Click-through rate (CTR)
-   Cost per click (CPC)
-   Cost per conversion
-   Return on ad spend (ROAS)
-   Quality score

### 2. **Monthly SEO Tasks**

-   Review Google Analytics reports
-   Check Search Console for errors
-   Update content on key pages
-   Submit updated sitemap
-   Monitor keyword rankings
-   Check and fix broken links
-   Review and improve page load speed

### 3. **Ad Campaign Optimization**

**Weekly Tasks:**

-   Review ad performance
-   Pause underperforming ads
-   Increase budget for successful ads
-   Test new ad variations
-   Update ad copy and creative

**Monthly Tasks:**

-   Analyze overall campaign performance
-   Adjust targeting parameters
-   Optimize landing pages
-   A/B test different strategies

---

## 🛠️ Quick Reference

### Important Links

**Free SEO Tools:**

-   Google Search Console: https://search.google.com/search-console/
-   Google Analytics: https://analytics.google.com/
-   Google PageSpeed Insights: https://pagespeed.web.dev/
-   Google Mobile-Friendly Test: https://search.google.com/test/mobile-friendly

**Ad Platform Links:**

-   Google Ads: https://ads.google.com/
-   Facebook Ads: https://business.facebook.com/ads
-   LinkedIn Ads: https://www.linkedin.com/campaignmanager/

**Social Media Debuggers:**

-   Facebook Debugger: https://developers.facebook.com/tools/debug/
-   Twitter Card Validator: https://cards-dev.twitter.com/validator
-   LinkedIn Post Inspector: https://www.linkedin.com/post-inspector/

### Important Files Modified

1. `resources/views/layouts/app.blade.php` - Added SEO meta tags
2. `resources/views/layouts/footer.blade.php` - Added social sharing buttons
3. `app/Http/Controllers/SitemapController.php` - Created sitemap controller
4. `routes/web.php` - Added sitemap route
5. `SEO_SETUP_GUIDE.md` - This documentation

---

## 📞 Need Help?

If you need assistance with:

-   Setting up Google Analytics
-   Creating ad campaigns
-   Understanding analytics reports
-   Optimizing your website

Contact: Asktrix - +91 7004670611

---

## ✅ Checklist

Before running ads:

-   [ ] Google Analytics installed and working
-   [ ] Google Search Console verified
-   [ ] Sitemap submitted to Search Console
-   [ ] Google Analytics configured (if using)
-   [ ] Facebook Pixel installed and working
-   [ ] Social media profiles updated
-   [ ] Social sharing images created
-   [ ] Website mobile-friendly
-   [ ] Page speed optimized
-   [ ] All meta tags filled out
-   [ ] Tested all forms
-   [ ] Contact information verified

---

## 🎉 You're Ready!

Your website is now optimized for SEO and ready for digital marketing campaigns. Follow the steps in this guide to complete the setup and start driving traffic to your website!
