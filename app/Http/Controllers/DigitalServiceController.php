<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalServiceController extends Controller
{
    /**
     * Complete repository of all 11 digital, tech & AI services
     * as specified in Asktrix Website Development Change Request.
     */
    public static function getAllServices(): array
    {
        return [
            'website-development' => [
                'slug' => 'website-development',
                'name' => 'Website Development',
                'category' => 'Web & App Development',
                'category_id' => 'web-app',
                'tagline' => 'High-Performance, SEO-Ready Custom Websites That Convert',
                'badge' => 'Most Popular',
                'inr_price' => '₹15,000',
                'usd_price' => '$499',
                'price_period' => 'starting price',
                'pricing_notes' => 'Small business website; scope and page count defined in quote.',
                'short_description' => 'Custom responsive websites crafted for speed, modern aesthetics, and search engine visibility. Tailored for small businesses, corporate brands, and high-growth startups.',
                'full_description' => 'At Asktrix, our website development services combine cutting-edge front-end engineering with rock-solid back-end architecture. We design and build ultra-responsive, mobile-first websites tailored to your brand identity. From bespoke landing pages and CMS platforms to full-fledged corporate portals, every site is crafted with technical SEO best practices, Core Web Vitals optimization, and frictionless user journeys.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    '100% Mobile & Tablet Responsive Layouts',
                    'Built-in Technical SEO & Fast Load Speeds (Sub-2s)',
                    'Custom Interactive UI/UX with Modern Frameworks',
                    'Lead Capture Forms with Automated Email Alerts',
                    'Content Management System (WordPress, Laravel, or Headless)',
                    'SSL Security, Anti-Spam & Cross-Browser Compatibility'
                ],
                'target_customers' => 'Small businesses, professionals, retail brands, corporate firms, and modern service agencies.',
                'deliverables' => [
                    '5 to 10 Custom Designed Responsive Pages',
                    'Contact & Lead Inquiry Integration',
                    'Google Analytics & Search Console Setup',
                    'Speed & Core Web Vitals Optimization',
                    '30 Days Complimentary Post-Launch Support'
                ],
                'tech_stack' => ['Laravel', 'React / Vue.js', 'Tailwind CSS', 'WordPress', 'MySQL', 'Node.js'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Discovery & Wireframing', 'desc' => 'We analyze your business goals, target audience, and map out information architecture.'],
                    ['step' => '02', 'title' => 'UI/UX Visual Design', 'desc' => 'High-fidelity mockups with modern typography, palettes, and interactive prototypes.'],
                    ['step' => '03', 'title' => 'Full-Stack Development', 'desc' => 'Clean, semantic coding with responsive styling and database/CMS integrations.'],
                    ['step' => '04', 'title' => 'Testing & Live Launch', 'desc' => 'Rigorous cross-device QA, speed auditing, SEO verification, and live server deployment.']
                ],
                'faqs' => [
                    [
                        'q' => 'How long does it take to develop a small business website?',
                        'a' => 'A standard small business website typically takes 7 to 14 business days from kickoff to final launch, depending on the scope of pages and content readiness.'
                    ],
                    [
                        'q' => 'Will my website be mobile-friendly and optimized for Google?',
                        'a' => 'Yes, every website we build is 100% mobile-responsive and follows Google Core Web Vitals guidelines, with built-in schema markup, meta tags, and high-speed asset optimization.'
                    ],
                    [
                        'q' => 'Can I update content on the website myself after launch?',
                        'a' => 'Absolutely. We provide an intuitive Content Management System (CMS) or custom administrative dashboard allowing you to easily update text, images, blogs, and products without coding.'
                    ],
                    [
                        'q' => 'What is included in the starting price of ₹15,000 / $499?',
                        'a' => 'The starting price covers a foundational small business website including home, about, services, contact, and lead capture integration. Additional custom features or large page counts are scoped in a transparent quote.'
                    ]
                ]
            ],

            'crm-development' => [
                'slug' => 'crm-development',
                'name' => 'CRM Development & Implementation',
                'category' => 'Web & App Development',
                'category_id' => 'web-app',
                'tagline' => 'Tailored Customer Relationship Platforms to Accelerate Sales Pipelines',
                'badge' => 'High ROI',
                'inr_price' => '₹35,000',
                'usd_price' => '$1,499',
                'price_period' => 'starting price',
                'pricing_notes' => 'Basic setup/customisation; integrations priced by scope.',
                'short_description' => 'Custom CRM development and seamless implementation. Consolidate leads, track customer lifecycles, and automate team workflows in a unified control center.',
                'full_description' => 'Off-the-shelf CRMs often bring unnecessary bloat, steep subscription licenses, and rigid workflows. Asktrix crafts tailored CRM systems and implements bespoke customizations that adapt precisely to your sales funnel. Track incoming inquiries from all marketing channels, automate follow-up sequences, assign accounts to team members, and visualize revenue forecasting in real time.',
                'image' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Multi-Channel Lead Ingestion (Web, WhatsApp, Email, Ads)',
                    'Custom Deal Stages & Visual Kanban Pipelines',
                    'Automated Task Scheduling & Rep Follow-Up Reminders',
                    'Role-Based Access Control & Team Permissions',
                    'Customer History Timeline & Document Storage',
                    'Interactive Revenue Analytics & Conversion Reports'
                ],
                'target_customers' => 'Real estate, consulting agencies, financial brokers, B2B services, and expanding sales teams.',
                'deliverables' => [
                    'Tailored CRM Installation & Custom Field Setup',
                    'Sales Pipeline & Deal Stage Configuration',
                    'Website Lead Webhook & Form Integration',
                    'Team Onboarding & Administrative Walkthrough',
                    'Export & Data Backup Mechanism'
                ],
                'tech_stack' => ['Laravel', 'PostgreSQL / MySQL', 'Vue.js', 'Tailwind', 'REST APIs', 'Webhooks'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Sales Funnel Audit', 'desc' => 'We map your customer journey, deal stages, team roles, and lead qualification criteria.'],
                    ['step' => '02', 'title' => 'Architecture & Fields', 'desc' => 'Custom object modeling, permission hierarchies, and communication channels setup.'],
                    ['step' => '03', 'title' => 'Automation & Triggers', 'desc' => 'Configuring auto-assignments, notification webhooks, and email follow-up routines.'],
                    ['step' => '04', 'title' => 'Data Migration & Training', 'desc' => 'Importing existing contact lists, staff training, and deployment on your private cloud.']
                ],
                'faqs' => [
                    [
                        'q' => 'Can Asktrix integrate CRM with our existing website and WhatsApp?',
                        'a' => 'Yes. We build native webhooks and API connectors that automatically route website inquiries, Facebook/Google ad leads, and WhatsApp messages directly into your CRM deal board.'
                    ],
                    [
                        'q' => 'Do we have to pay recurring per-user monthly licenses?',
                        'a' => 'For custom CRM solutions hosted on your own server, there are no per-user licensing fees. You own your data and system outright.'
                    ],
                    [
                        'q' => 'How secure is our customer data?',
                        'a' => 'We implement enterprise-grade encryption at rest and in transit, multi-factor authentication, granular role permissions, and regular automated database backups.'
                    ]
                ]
            ],

            'saas-development' => [
                'slug' => 'saas-development',
                'name' => 'SaaS Product Development',
                'category' => 'Web & App Development',
                'category_id' => 'web-app',
                'tagline' => 'Turn Your Software Vision Into a Scalable, Subscription-Ready Cloud Platform',
                'badge' => 'Enterprise Ready',
                'inr_price' => '₹75,000',
                'usd_price' => '$2,999',
                'price_period' => 'starting price',
                'pricing_notes' => 'Discovery/prototype or tightly scoped MVP component; full products require quote.',
                'short_description' => 'Architect and engineer scalable Software-as-a-Service (SaaS) platforms. Multi-tenant database design, automated billing, API integrations, and intuitive UX.',
                'full_description' => 'Building a commercially successful SaaS product demands more than just code—it requires thoughtful multi-tenant architecture, resilient authentication, subscription lifecycle management, and scalable cloud infrastructure. Asktrix partners with founders and companies to take ideas from rapid MVP prototypes to enterprise-grade platforms capable of serving thousands of concurrent users.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Multi-Tenant Architecture & Data Isolation',
                    'Stripe & Razorpay Recurring Subscription Billing',
                    'User Authentication, Social Sign-In & Team Invites',
                    'Modular Microservices & REST / GraphQL APIs',
                    'Admin Dashboard with MRR, Churn & Usage Metrics',
                    'Containerized Cloud Deployment (Docker, AWS, DigitalOcean)'
                ],
                'target_customers' => 'Tech founders, venture-backed startups, domain experts, and businesses productizing internal tools.',
                'deliverables' => [
                    'Technical Specification & System Architecture Blueprint',
                    'Functional MVP with Core Feature Set',
                    'Subscription & Payment Gateway Integration',
                    'Automated Database Migrations & Seeds',
                    'Production Deployment with CI/CD Pipelines'
                ],
                'tech_stack' => ['Laravel', 'React / Next.js', 'PostgreSQL', 'Redis', 'Docker', 'AWS / DigitalOcean'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Product Discovery & Spec', 'desc' => 'Defining user personas, core MVP scope, data models, and monetisation mechanics.'],
                    ['step' => '02', 'title' => 'Architecture & UI Prototyping', 'desc' => 'High-fidelity design system paired with multi-tenant database schematics.'],
                    ['step' => '03', 'title' => 'Sprint-Based Development', 'desc' => 'Agile sprints building authentication, core engine, billing, and API endpoints.'],
                    ['step' => '04', 'title' => 'Cloud Orchestration & Launch', 'desc' => 'Stress testing, security auditing, production container launch, and monitoring.']
                ],
                'faqs' => [
                    [
                        'q' => 'What does the starting price cover for SaaS development?',
                        'a' => 'The starting price covers technical discovery, interactive prototype, database architecture, or a tightly scoped MVP micro-module. Comprehensive end-to-end platforms are scoped transparently based on functional complexity.'
                    ],
                    [
                        'q' => 'Do I own 100% of the Intellectual Property (IP) and source code?',
                        'a' => 'Yes. Upon completion and milestone settlement, full ownership of source code, design assets, and database schemas is transferred entirely to you.'
                    ],
                    [
                        'q' => 'How do you handle subscription billing in India and globally?',
                        'a' => 'We integrate Razorpay / Cashfree for Indian payment methods (UPI, Netbanking, Credit Cards with e-mandate) and Stripe / Lemon Squeezy for global multi-currency subscription processing.'
                    ]
                ]
            ],

            'ai-voicebot-development' => [
                'slug' => 'ai-voicebot-development',
                'name' => 'AI Voicebot Development',
                'category' => 'AI & Automation',
                'category_id' => 'ai-automation',
                'tagline' => 'Human-Like Conversational Voice AI for Call Centers & Customer Engagement',
                'badge' => 'Cutting Edge',
                'inr_price' => '₹25,000',
                'usd_price' => '$799',
                'price_period' => 'starting price',
                'pricing_notes' => 'Basic proof of concept; telephony and usage charges extra.',
                'short_description' => 'Build ultra-realistic, low-latency AI voice agents that speak and understand natural language. Automate inbound support, appointment booking, and customer qualification over the phone.',
                'full_description' => 'Empower your business with next-generation conversational voice bots that sound natural, understand context, and resolve customer queries in real time. Leveraging ultra-fast speech-to-text (STT), large language model reasoning, and natural neural text-to-speech (TTS), Asktrix creates intelligent voice assistants that integrate directly with your telephony systems (Twilio, Exotel, Asterisk) and internal databases.',
                'image' => 'https://images.unsplash.com/photo-1589254065878-42c9da997008?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Ultra-Low Latency Conversational Audio (<800ms response)',
                    'Multi-Language & Accent Recognition (English, Hindi, Regional)',
                    'Integration with Twilio, Exotel, Asterisk & SIP Trunks',
                    'Dynamic CRM Data Fetching & Real-Time Call Summarization',
                    'Intelligent Call Escalation to Live Human Agents',
                    'Sentiment Analysis & Structured Transcript Logging'
                ],
                'target_customers' => 'Clinics, financial institutions, logistics providers, real estate firms, and customer support centers.',
                'deliverables' => [
                    'Working Proof of Concept (PoC) Voice Agent',
                    'Conversational Prompt Engineering & Tone Tuning',
                    'Telephony SIP / Webhook Connection',
                    'Structured Data Extraction & Post-Call Webhook',
                    'Testing Sandbox & Quality Tuning'
                ],
                'tech_stack' => ['OpenAI / Deepgram', 'ElevenLabs / Cartesia', 'Twilio / Exotel', 'Python / Node.js', 'WebSockets'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Conversation Flow Mapping', 'desc' => 'Scripting user intents, edge cases, fallback branches, and escalation rules.'],
                    ['step' => '02', 'title' => 'Voice & Persona Selection', 'desc' => 'Selecting voice timbre, accent, speech cadence, and latency optimization.'],
                    ['step' => '03', 'title' => 'Telephony & API Bridging', 'desc' => 'Connecting phone numbers, bidirectional audio streaming, and database lookups.'],
                    ['step' => '04', 'title' => 'Call Testing & Fine Tuning', 'desc' => 'Rigorous call simulations, latency tuning, and production switchover.']
                ],
                'faqs' => [
                    [
                        'q' => 'Can the AI voicebot speak Indian regional languages or English accents?',
                        'a' => 'Yes. We support Indian English, Hindi, and regional accents through state-of-the-art multilingual speech models trained on diverse dialect datasets.'
                    ],
                    [
                        'q' => 'How does the voicebot transfer calls to our human agents?',
                        'a' => 'When the bot detects frustration, low confidence, or a specific user request for a human, it performs a warm or cold SIP transfer directly to your agent along with the live conversation summary.'
                    ],
                    [
                        'q' => 'Are carrier telephony costs included in the starting price?',
                        'a' => 'No. Telephony per-minute charges (e.g. Twilio or Exotel) and speech API tokens are billed directly by their respective providers based on your actual call volume.'
                    ]
                ]
            ],

            'app-development' => [
                'slug' => 'app-development',
                'name' => 'Mobile App Development',
                'category' => 'Web & App Development',
                'category_id' => 'web-app',
                'tagline' => 'Native & Cross-Platform iOS & Android Apps Crafted for Seamless Performance',
                'badge' => 'High Demand',
                'inr_price' => '₹50,000',
                'usd_price' => '$1,999',
                'price_period' => 'starting price',
                'pricing_notes' => 'Small scoped app/MVP; Android/iOS and backend scope affect price.',
                'short_description' => 'Build intuitive, high-performance mobile applications for Android and iOS. Native and Flutter/React Native builds engineered with sleek design and secure cloud backends.',
                'full_description' => 'Reach your customers right in their pocket with custom mobile applications built by Asktrix. Whether you need a customer-facing e-commerce app, a delivery tracking tool, or an enterprise internal operations application, we deliver clean architecture, fluid 60fps animations, offline data caching, and secure API integrations.',
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Cross-Platform Codebase (Single Build for iOS & Android)',
                    'Modern Fluid UI/UX Designed in Figma',
                    'Push Notifications (Firebase Cloud Messaging)',
                    'Secure Authentication & Biometric Login (FaceID / Fingerprint)',
                    'In-App Payments, Location Services & Camera Integration',
                    'App Store & Google Play Store Submission Guidance'
                ],
                'target_customers' => 'Startups, e-commerce retailers, on-demand service platforms, and field operations teams.',
                'deliverables' => [
                    'Figma UI/UX Interactive Clickable Prototype',
                    'Production App Build (APK / AAB for Android & IPA for iOS)',
                    'RESTful Cloud Backend & Database API',
                    'Firebase Push Notification Setup',
                    'App Store & Play Store Publishing Assistance'
                ],
                'tech_stack' => ['Flutter', 'React Native', 'Firebase', 'Laravel API', 'Node.js', 'PostgreSQL'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Mobile UX Wireframing', 'desc' => 'Designing user journeys, screen architectures, and touch-first ergonomics in Figma.'],
                    ['step' => '02', 'title' => 'Frontend & State Setup', 'desc' => 'Building responsive mobile UI screens with smooth navigation and reactive state.'],
                    ['step' => '03', 'title' => 'Backend API Sync', 'desc' => 'Integrating secure authentication, REST endpoints, database sync, and payments.'],
                    ['step' => '04', 'title' => 'Store Submission & Launch', 'desc' => 'Adhering to Apple & Google developer guidelines and deploying live to stores.']
                ],
                'faqs' => [
                    [
                        'q' => 'Do you build native or cross-platform apps?',
                        'a' => 'We specialize in cross-platform development using Flutter and React Native. This enables you to launch on both Android and iOS with a single codebase, drastically cutting development time and maintenance costs.'
                    ],
                    [
                        'q' => 'Will Asktrix help publish our app on the Google Play Store and Apple App Store?',
                        'a' => 'Yes! We guide you through developer account setup, build compliance checks, privacy policy generation, and official store submission until approved.'
                    ]
                ]
            ],

            'business-email' => [
                'slug' => 'business-email',
                'name' => 'Business Email Solutions',
                'category' => 'Cloud & Infrastructure',
                'category_id' => 'cloud-infra',
                'tagline' => 'Professional, Branded Inboxes That Build Instant Credibility',
                'badge' => 'Essential',
                'inr_price' => '₹250/user/month',
                'usd_price' => '$3/user/month',
                'price_period' => 'per user / month',
                'pricing_notes' => 'Mailbox/provider fees and taxes may be additional.',
                'short_description' => 'Equip your team with trustworthy business email addresses (you@yourcompany.com). Google Workspace, Microsoft 365, and enterprise mail with full DKIM/SPF protection.',
                'full_description' => 'Sending client quotes from generic @gmail or @yahoo addresses damages customer trust. Asktrix configures professional, domain-branded email infrastructure for your business. We set up Google Workspace, Microsoft 365, or specialized cloud mail servers with rock-solid security, spam prevention, SPF, DKIM, and DMARC records to ensure your emails land in the primary inbox, never in spam.',
                'image' => 'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Professional Domain Inboxes (name@yourbusiness.com)',
                    'Google Workspace or Microsoft 365 Cloud Setup',
                    'Complete SPF, DKIM & DMARC DNS Authentication',
                    'Zero Spam Delivery: Guaranteed Inbox Placement',
                    'Mobile & Desktop Sync (Outlook, Apple Mail, Gmail App)',
                    'Secure Cloud Calendar, Contacts & Drive Storage'
                ],
                'target_customers' => 'New business owners, consultants, sales teams, and corporate organizations.',
                'deliverables' => [
                    'Domain DNS MX & TXT Record Configuration',
                    'User Mailbox Creation & Password Setup',
                    'SPF, DKIM, and DMARC Security Authentication',
                    'Email Routing & Group Alias Configuration (e.g. contact@, info@)',
                    'Device Configuration Guide for Mobile and Desktop'
                ],
                'tech_stack' => ['Google Workspace', 'Microsoft 365', 'Zoho Mail', 'DNS Security (DKIM/DMARC)', 'Cloudflare'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Provider Selection', 'desc' => 'Choosing the optimal email suite based on team size, storage needs, and budget.'],
                    ['step' => '02', 'title' => 'DNS & Security Config', 'desc' => 'Adding cryptographically verified SPF, DKIM, and DMARC records to prevent spoofing.'],
                    ['step' => '03', 'title' => 'User Account Setup', 'desc' => 'Creating individual user addresses, department aliases, and forwarders.'],
                    ['step' => '04', 'title' => 'Device Onboarding', 'desc' => 'Assisting team members in connecting mailboxes to phones, Outlook, and web apps.']
                ],
                'faqs' => [
                    [
                        'q' => 'Why shouldn’t I use a free Gmail account for my business?',
                        'a' => 'A custom domain email (e.g., hello@asktrix.com) significantly elevates professional trust, improves client response rates, and ensures company-owned data remains secure if an employee departs.'
                    ],
                    [
                        'q' => 'Can you migrate our old emails from another provider without data loss?',
                        'a' => 'Yes. We offer zero-downtime email migration services to move all historical emails, folders, contacts, and calendar entries securely.'
                    ]
                ]
            ],

            'domain-registration' => [
                'slug' => 'domain-registration',
                'name' => 'Domain Registration',
                'category' => 'Cloud & Infrastructure',
                'category_id' => 'cloud-infra',
                'tagline' => 'Secure the Perfect Digital Address for Your Brand with Full DNS Control',
                'badge' => 'Quick Setup',
                'inr_price' => '₹799/year',
                'usd_price' => '$12/year',
                'price_period' => 'per year',
                'pricing_notes' => 'Domain extension, premium domains and renewal pricing vary.',
                'short_description' => 'Register and protect your brand identity with top-level domains (.com, .in, .co.in, .org, .ai, .tech). Includes WHOIS privacy, fast DNS management, and renewal protection.',
                'full_description' => 'Your domain name is the cornerstone of your brand presence online. Asktrix helps you search, acquire, and manage your domain portfolio safely. We safeguard your name against cybersquatting, ensure WHOIS privacy protection, and configure high-speed Anycast DNS routing so visitors can reach your site without delays.',
                'image' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Instant Search for .com, .in, .co.in, .org, .ai, .io, .net',
                    'Free WHOIS Privacy Protection (Mask Personal Data)',
                    'Lightning-Fast Anycast DNS Record Management',
                    'Domain Forwarding & Subdomain Routing',
                    'Domain Theft Protection & Auto-Renewal Safeguard',
                    'Seamless Connection to Hosting, Shopify, or Custom Apps'
                ],
                'target_customers' => 'Entrepreneurs, new companies, trademarks holders, and expanding brands.',
                'deliverables' => [
                    'Official Domain Name Ownership Registration',
                    'WHOIS Privacy Guard Activation',
                    'A, CNAME, MX, and TXT Record Setup',
                    'Domain Locking Against Unauthorized Transfers',
                    'Annual Renewal Calendar Reminders'
                ],
                'tech_stack' => ['ICANN Accredited Registrars', 'Cloudflare DNS', 'Route 53', 'DNSSEC'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Name Availability Check', 'desc' => 'Verifying brand availability across global and regional domain registries.'],
                    ['step' => '02', 'title' => 'Registration & Ownership', 'desc' => 'Securing domain rights in your company name with complete legal ownership.'],
                    ['step' => '03', 'title' => 'DNS & Privacy Setup', 'desc' => 'Activating privacy protection and routing DNS records to your servers.'],
                    ['step' => '04', 'title' => 'Security Lockdown', 'desc' => 'Enabling transfer lock and DNSSEC to prevent hijacking.']
                ],
                'faqs' => [
                    [
                        'q' => 'Do I own the domain, or does Asktrix own it?',
                        'a' => 'You retain 100% legal ownership of your domain. It is registered under your organization name and email address with full administrative access.'
                    ],
                    [
                        'q' => 'Can I transfer my existing domain to Asktrix?',
                        'a' => 'Yes. We manage seamless domain transfers between registrars without causing any website or email downtime.'
                    ]
                ]
            ],

            'web-hosting' => [
                'slug' => 'web-hosting',
                'name' => 'Web Hosting',
                'category' => 'Cloud & Infrastructure',
                'category_id' => 'cloud-infra',
                'tagline' => 'High-Speed, Reliable Cloud Hosting with 99.9% Guaranteed Uptime',
                'badge' => 'High Speed',
                'inr_price' => '₹199/month',
                'usd_price' => '$5/month',
                'price_period' => 'per month',
                'pricing_notes' => 'Entry hosting tier; resources, backups and support limits must be stated.',
                'short_description' => 'Fast NVMe SSD cloud hosting powered by modern web servers. Free SSL certificates, automated daily backups, DDoS protection, and 24/7 server monitoring.',
                'full_description' => 'Slow hosting kills conversion rates and search rankings. Asktrix offers enterprise-grade cloud web hosting tuned specifically for speed, uptime, and security. Powered by NVMe SSD drives, HTTP/3, and LiteSpeed/Nginx caching, our servers ensure your website loads in the blink of an eye for visitors in India and worldwide.',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Ultra-Fast Pure NVMe SSD Storage',
                    'Free Wildcard SSL Encryption for All Domains',
                    'Automated Daily Offsite Backups with 1-Click Restore',
                    '99.9% Uptime Guarantee with Enterprise SLA',
                    'Multi-Layer DDoS Protection & Web Application Firewall (WAF)',
                    'Support for PHP 8.x, Node.js, Python & MySQL Databases'
                ],
                'target_customers' => 'Corporate websites, e-commerce stores, agencies, and web applications.',
                'deliverables' => [
                    'Provisioned Cloud Hosting Environment',
                    'Free SSL Certificate Installation',
                    'Control Panel Access (cPanel / DirectAdmin / Cloud Panel)',
                    'Automated Backup Schedule Setup',
                    'Free Website Migration from Old Host'
                ],
                'tech_stack' => ['LiteSpeed / Nginx', 'NVMe SSD', 'Cloudflare CDN', 'MariaDB / MySQL', 'Linux Ubuntu / AlmaLinux'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Resource Sizing', 'desc' => 'Determining traffic, storage, and CPU/RAM requirements for optimal performance.'],
                    ['step' => '02', 'title' => 'Server Provisioning', 'desc' => 'Deploying modern server stack with PHP 8.x, database, and caching engines.'],
                    ['step' => '03', 'title' => 'Site Migration & SSL', 'desc' => 'Migrating files and databases with zero downtime, followed by SSL installation.'],
                    ['step' => '04', 'title' => 'Monitoring & Backup', 'desc' => 'Activating continuous health checks, firewall shields, and daily backup snapshots.']
                ],
                'faqs' => [
                    [
                        'q' => 'Is website migration from my previous hosting provider free?',
                        'a' => 'Yes! Our engineering team migrates your entire website, database, and emails with zero downtime free of charge.'
                    ],
                    [
                        'q' => 'What happens if my website traffic suddenly spikes?',
                        'a' => 'Our cloud hosting architecture scales dynamically. You can upgrade CPU, RAM, or bandwidth instantaneously without downtime.'
                    ]
                ]
            ],

            'ai-chatbot-development' => [
                'slug' => 'ai-chatbot-development',
                'name' => 'AI Chatbot Development',
                'category' => 'AI & Automation',
                'category_id' => 'ai-automation',
                'tagline' => '24/7 Smart Website Chat Agents Trained on Your Company Knowledge Base',
                'badge' => 'High Conversion',
                'inr_price' => '₹15,000',
                'usd_price' => '$499',
                'price_period' => 'starting price',
                'pricing_notes' => 'Basic website FAQ chatbot; AI/API usage may be additional.',
                'short_description' => 'Deploy intelligent AI chatbots on your website that interact with visitors, answer queries instantly from your knowledge base, and capture pre-qualified sales leads.',
                'full_description' => 'Never lose a lead while your team is offline. Asktrix builds custom AI chatbots that engage web visitors the instant they land on your page. Powered by Large Language Models (LLMs) with retrieval-augmented generation (RAG), the bot answers complex questions using your approved business documents, gathers contact info, and syncs directly into your inbox or CRM.',
                'image' => 'https://images.unsplash.com/photo-1531746790731-6c087fecd65a?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1577563908411-5077b6dc7624?auto=format&fit=crop&w=1000&q=80',
                'features' => [
                    'Custom Trained on Your FAQs, Brochures & Website Pages',
                    '24/7 Lead Capture with Verified Email & Phone Validation',
                    'Instant In-Chat Answers to Product & Pricing Inquiries',
                    'Strict Guardrails: No Hallucinations or Off-Topic Replies',
                    'Seamless Escalation to Human Agent via WhatsApp or Email',
                    'Customizable Chat Widget Matching Your Brand Colors'
                ],
                'target_customers' => 'Service businesses, law & consulting firms, e-commerce stores, and software companies.',
                'deliverables' => [
                    'Trained AI Chatbot Model on Your Business Knowledge',
                    'Branded Embeddable Chat Widget for Website',
                    'Automated Lead Notification Email & Webhook',
                    'Conversation Log Admin Viewer',
                    '30-Day Prompt Tuning & Guardrail Optimization'
                ],
                'tech_stack' => ['OpenAI GPT-4o / Claude', 'Vector Database (Pinecone / pgvector)', 'LangChain', 'JavaScript Widget', 'Webhooks'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Knowledge Base Ingestion', 'desc' => 'Collecting your FAQs, PDFs, price sheets, and service guides into vector storage.'],
                    ['step' => '02', 'title' => 'Prompt & Tone Tuning', 'desc' => 'Customizing bot tone, conversational persona, and strict business guardrails.'],
                    ['step' => '03', 'title' => 'Widget Embedding', 'desc' => 'Installing the sleek chat widget with your brand colors on your website.'],
                    ['step' => '04', 'title' => 'Lead Webhook Testing', 'desc' => 'Connecting captured lead details to your CRM, WhatsApp, or email notifications.']
                ],
                'faqs' => [
                    [
                        'q' => 'Can the chatbot make up incorrect information (hallucinate)?',
                        'a' => 'We implement strict Retrieval-Augmented Generation (RAG) and system constraints instructing the bot to answer ONLY from your verified business documentation, politely escalating unknown queries to human support.'
                    ],
                    [
                        'q' => 'How does the chatbot hand over qualified leads to my team?',
                        'a' => 'As soon as the visitor shares their name and contact details, the bot instantly emails your sales team and triggers a webhook into your CRM.'
                    ]
                ]
            ],

            'ai-workflow-automation' => [
                'slug' => 'ai-workflow-automation',
                'name' => 'AI Workflow Automation',
                'category' => 'AI & Automation',
                'category_id' => 'ai-automation',
                'tagline' => 'Connect Apps & Eliminate Repetitive Admin with AI-Powered Automated Pipelines',
                'badge' => 'Efficiency Booster',
                'inr_price' => '₹4,999/month',
                'usd_price' => '$99/month',
                'price_period' => 'per month',
                'pricing_notes' => 'Initial small-workflow package; specify runs, integrations and support.',
                'positioning' => 'Connect business apps and automate repetitive processes using AI and configurable rules.',
                'target_customers' => 'Agencies, recruiters, consultants, operations teams, and SMEs seeking to eliminate manual copy-paste and administrative bottlenecks.',
                'value_proposition' => 'Reduce manual copy-paste, repetitive admin, and avoidable data-entry errors.',
                'short_description' => 'Automate manual business tasks across your tools. From lead validation and CRM updates to automated document parsing and scheduled follow-ups.',
                'full_description' => 'Manual data entry, cross-copying leads, and missed follow-ups cost growing businesses hours of lost time and revenue every week. Asktrix designs and deploys custom AI workflow automation pipelines that seamlessly bridge your forms, CRM, messaging tools, and databases. We implement intelligent decision-making logic, deduplication rules, and auto-scheduling so your team can focus on closing deals.',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1000&q=80',
                'mvp_diagram_title' => 'MVP Workflow Example: Lead-to-CRM Automation Architecture',
                'mvp_diagram_steps' => [
                    ['step' => 1, 'title' => 'Lead Arrival', 'desc' => 'Lead arrives from website form or supported source'],
                    ['step' => 2, 'title' => 'Field Validation', 'desc' => 'Validate fields and check for duplicates'],
                    ['step' => 3, 'title' => 'AI Classification', 'desc' => 'Apply business rules / optional AI intent classification'],
                    ['step' => 4, 'title' => 'CRM Record Sync', 'desc' => 'Create or update CRM record automatically'],
                    ['step' => 5, 'title' => 'Owner Assignment', 'desc' => 'Assign account owner and dispatch instant notification'],
                    ['step' => 6, 'title' => 'Follow-Up Scheduling', 'desc' => 'Schedule approved multi-stage follow-up email'],
                    ['step' => 7, 'title' => 'Logging & Retries', 'desc' => 'Log status, audit errors and manage retry outcome']
                ],
                'features' => [
                    'Multi-App Connectivity via Webhooks & REST APIs',
                    'Automated Lead-to-CRM Pipelines with Deduplication',
                    'AI Document & Invoice Data Parsing (OCR to Database)',
                    'Automated Slack, WhatsApp & Email Alerts on Trigger Events',
                    'Conditional Routing Rules Based on Deal Size or Geography',
                    'Detailed Execution Audit Logs, Error Tracking & Auto-Retries'
                ],
                'deliverables' => [
                    'Scoped Lead-to-CRM or Custom Workflow Pipeline',
                    'Configured Webhooks & API Authentication Tokens',
                    'Duplicate Verification & Field Mapping Engine',
                    'Notification Alert Channels Setup (Email / Slack / WhatsApp)',
                    'Monthly Workflow Execution Monitoring & Error Log Auditing'
                ],
                'tech_stack' => ['Make.com / n8n', 'Zapier', 'OpenAI API', 'Custom Webhooks', 'Python Serverless', 'PostgreSQL'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Process Audit', 'desc' => 'Pinpointing repetitive administrative choke points and manual data-entry handoffs.'],
                    ['step' => '02', 'title' => 'Pipeline Architecture', 'desc' => 'Designing trigger events, conditional logic, AI filters, and target destination apps.'],
                    ['step' => '03', 'title' => 'Integration & Testing', 'desc' => 'Building live sandbox executions, error handling, duplicate checks, and notifications.'],
                    ['step' => '04', 'title' => 'Production Deployment', 'desc' => 'Publishing live automations with telemetry, status tracking, and error recovery.']
                ],
                'faqs' => [
                    [
                        'q' => 'What applications can be connected in an AI workflow?',
                        'a' => 'We connect any modern tool with API or webhook support, including CRMs (HubSpot, Salesforce, Zoho, Custom CRMs), Google Sheets, WhatsApp Business API, Slack, Stripe, Gmail, and SQL databases.'
                    ],
                    [
                        'q' => 'What is included in the ₹4,999/month ($99/month) package?',
                        'a' => 'The initial small-workflow package includes setup and ongoing maintenance of an essential automated pipeline (e.g. Lead-to-CRM automation), monthly run execution monitoring, error handling, and support.'
                    ],
                    [
                        'q' => 'How does the workflow prevent duplicate leads in our CRM?',
                        'a' => 'Every incoming lead is pre-checked against existing email and phone number indices. If a match exists, the record is updated with the new inquiry note rather than creating a duplicate entry.'
                    ]
                ]
            ],

            'ai-customer-support-automation' => [
                'slug' => 'ai-customer-support-automation',
                'name' => 'AI Customer Support Automation',
                'category' => 'AI & Automation',
                'category_id' => 'ai-automation',
                'tagline' => 'Automate Support Inquiries, Ticket Routing & Agent Escalations with AI Guardrails',
                'badge' => 'Cost Saver',
                'inr_price' => '₹3,999/month',
                'usd_price' => '$49/month',
                'price_period' => 'per month',
                'pricing_notes' => 'Entry subscription; define message, seat, source and usage limits. Proposed price range: US$49-US$500+/month.',
                'positioning' => 'Automate customer questions, ticket classification, FAQ responses and escalation to human agents.',
                'target_customers' => 'E-commerce brands, SaaS companies, educational portals, and modern customer support teams.',
                'proposed_price_range' => 'US$49 - US$500+/month (subject to plan design, message volume, and support scope)',
                'short_description' => 'Automate tier-1 customer inquiries, classify incoming tickets, and empower human agents with instant context and intelligent handoffs.',
                'full_description' => 'Delivering 24/7 customer support without an army of agents is now a reality. Asktrix implements intelligent Customer Support Automation that safely answers routine queries using approved knowledge bases, categorizes unresolved support tickets, and smoothly escalates complex issues to human agents with full conversation context.',
                'image' => 'https://images.unsplash.com/photo-1549923746-c502d488b3ea?auto=format&fit=crop&w=1200&q=80',
                'secondary_image' => 'https://images.unsplash.com/photo-1534536281715-e28d76689b4d?auto=format&fit=crop&w=1000&q=80',
                'mvp_diagram_title' => 'Example: Support Automation & Quality Assurance Flow',
                'mvp_diagram_steps' => [
                    ['step' => 1, 'title' => 'Inquiry Arrival', 'desc' => 'Customer asks a question in website chat, email, or inbox'],
                    ['step' => 2, 'title' => 'Intent & Knowledge Retrieval', 'desc' => 'Identify intent and retrieve approved company knowledge base content'],
                    ['step' => 3, 'title' => 'Verified Evidence Answer', 'desc' => 'Answer only when evidence is verified and confidence is sufficient'],
                    ['step' => 4, 'title' => 'Ticket Classification', 'desc' => 'If unresolved, automatically create and classify a structured support ticket'],
                    ['step' => 5, 'title' => 'Human Escalation', 'desc' => 'Escalate to human agent with full conversation context and sentiment notes'],
                    ['step' => 6, 'title' => 'Quality Metrics & Analytics', 'desc' => 'Record resolution outcome, user feedback, and quality performance metrics']
                ],
                'safeguards' => [
                    'Knowledge Base Ingestion: Ingest approved FAQ and business content; support refresh and removal.',
                    'Inbox/Ticketing Connector: Connect one agreed provider in the MVP; additional connectors are separately scoped.',
                    'Admin Governance: Review conversations, update sources, set fallback rules and manage escalation.',
                    'Actionable Analytics: Track conversations, answer success rates, feedback, and unresolved escalations.',
                    'Strict AI Safeguards: Never fabricate policy answers; auto-escalate when confidence is inadequate.'
                ],
                'features' => [
                    'Verified Knowledge Ingestion (Only Answers from Approved Sources)',
                    'Multi-Channel Support (Web Chat, Email, Helpdesk Integration)',
                    'Automated Priority & Department Ticket Tagging',
                    'Frictionless Warm Escalation to Human Agents',
                    'Comprehensive Resolution Analytics & CSAT Feedback',
                    'Zero Hallucination Guarantee: Strictly Governed Fallback Rules'
                ],
                'deliverables' => [
                    'Knowledge Base Ingestion & Verified Source Configuration',
                    'Web Chat / Helpdesk Inbox Connector Integration',
                    'Automated Ticket Classification Engine',
                    'Escalation Routing with Full Conversation Context',
                    'Monthly Conversation Quality & Metric Reporting'
                ],
                'tech_stack' => ['OpenAI RAG', 'Zendesk / Freshdesk / Crisp', 'Vector Embeddings', 'Node.js / Laravel', 'PostgreSQL'],
                'workflow' => [
                    ['step' => '01', 'title' => 'Knowledge Audit', 'desc' => 'Curating approved support documents, refund policies, and troubleshooting manuals.'],
                    ['step' => '02', 'title' => 'Helpdesk Connector', 'desc' => 'Connecting the AI engine to your primary inbox or chat support desk.'],
                    ['step' => '03', 'title' => 'Confidence Calibration', 'desc' => 'Setting confidence thresholds to guarantee accurate answers and clean escalations.'],
                    ['step' => '04', 'title' => 'Live Launch & Monitoring', 'desc' => 'Enabling live auto-resolutions with analytics tracking for conversation quality.']
                ],
                'faqs' => [
                    [
                        'q' => 'What happens if a customer asks a policy question not in the knowledge base?',
                        'a' => 'Our AI guardrails strictly prohibit fabricating policies. If confidence is below threshold, the AI politely notifies the customer and immediately escalates the ticket to a human agent with the transcript attached.'
                    ],
                    [
                        'q' => 'Can we review and update knowledge sources easily?',
                        'a' => 'Yes. Administrators can refresh, edit, or remove FAQ entries and company policies at any time, and the AI automatically syncs with the updated version.'
                    ],
                    [
                        'q' => 'How is pricing structured between ₹3,999/month and higher tiers?',
                        'a' => 'The entry tier covers foundational message volume and knowledge base integration. Scaling plans (up to US$500+/month) accommodate high ticket volumes, multiple support channels, and customized enterprise CRM connectors.'
                    ]
                ]
            ],
        ];
    }

    /**
     * Display all 11 services on the master /services hub page
     */
    public function index()
    {
        $services = self::getAllServices();
        $categories = [
            'all' => 'All Services',
            'web-app' => 'Web & App Development',
            'ai-automation' => 'AI & Automation',
            'cloud-infra' => 'Cloud & Infrastructure',
        ];

        return view('services.digital.index', [
            'services' => $services,
            'categories' => $categories,
            'pageTitle' => 'Technology & AI Services | Asktrix',
            'metaDescription' => 'Explore Asktrix technology, web development, AI automation, and cloud infrastructure services. Transparent India and USD pricing with proven ROI.'
        ]);
    }

    /**
     * Dynamic detail view renderer for any digital service slug
     */
    public function show(string $slug)
    {
        $services = self::getAllServices();

        if (!isset($services[$slug])) {
            return redirect()->route('digital.services');
        }

        $service = $services[$slug];
        
        // Find other related services
        $relatedServices = array_filter($services, function ($item) use ($slug) {
            return $item['slug'] !== $slug;
        });

        return view('services.digital.show', [
            'service' => $service,
            'relatedServices' => array_slice($relatedServices, 0, 3),
            'pageTitle' => $service['name'] . ' | Asktrix Services',
            'metaDescription' => $service['short_description']
        ]);
    }

    // Explicit individual methods for clean routing and named route conventions
    public function websiteDevelopment() { return $this->show('website-development'); }
    public function crmDevelopment() { return $this->show('crm-development'); }
    public function saasDevelopment() { return $this->show('saas-development'); }
    public function aiVoicebotDevelopment() { return $this->show('ai-voicebot-development'); }
    public function appDevelopment() { return $this->show('app-development'); }
    public function businessEmail() { return $this->show('business-email'); }
    public function domainRegistration() { return $this->show('domain-registration'); }
    public function webHosting() { return $this->show('web-hosting'); }
    public function aiChatbotDevelopment() { return $this->show('ai-chatbot-development'); }
    public function aiWorkflowAutomation() { return $this->show('ai-workflow-automation'); }
    public function aiCustomerSupportAutomation() { return $this->show('ai-customer-support-automation'); }
}
