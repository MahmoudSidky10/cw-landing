<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" data-theme="home-3">

@include('web.layout.head')

<body class="bg-black">
    <style>

        .ad-1 {
            overflow: hidden;
            min-height: 12rem;
        }
        .ad-1__photo-cover {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            max-width: none;
            object-fit: cover;
            object-position: center;
        }
    </style>
    @include('web.layout.nav', ['navClass' => 'primary-header--dark primary-header--fixed primary-header--boxed top-md-3 primary-header-crossed:top-0 primary-header-crossed:full-dark'])
    <div class="preloader">
        <div class="preloader__content">
            <img src="{{ $siteLogoLight }}" alt="Cyberwatch360" class="img-fluid preloader__img">
        </div>
    </div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- Banner Section -->
            <div class="banner-1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-1__content">
                                <div class="row">
                                    <div class="col-md-8 col-xl-6">
                                        <nav class="mb-3">
                                            <ol class="breadcrumb breadcrumb-modifier">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ route('home') }}" class="link fs-14">Home</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <iconify-icon icon="bi:chevron-right"
                                                        class="align-middle fs-14"></iconify-icon>
                                                </li>
                                                <li class="breadcrumb-item active fs-14" aria-current="page"> Services </li>
                                            </ol>
                                        </nav>
                                        <h3>Cyberwatch360 services</h3>
                                        <p class="mb-0 max-text-12">Implementation, integration, and enablement for your SOC—from ingesting signals and wiring ITSM to rolling out Zarqaa AI and governance that scales from MSSPs to regulated enterprises.</p>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1124" height="401"
                                    viewBox="0 0 1124 401" fill="none" class="banner-1__froster-svg">
                                    <g filter="url(#filter0_f_8077_2641)">
                                        <path
                                            d="M773.993 103.763C800.457 67.556 838.118 -16 889.598 -16C932.68 -16 925.405 109.955 850.192 214.4C676.015 417.658 548.024 427 432.419 427C316.814 427 267 368.356 267 332.149C267 295.942 301.82 244.415 489.854 244.415C677.886 244.415 747.529 139.97 773.993 103.763Z"
                                            fill="#6328FF" fill-opacity="0.5" class="banner-1__froster-svg-path" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_8077_2641" x="0.333405" y="-282.667" width="1182.33"
                                            height="976.333" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="133.333"
                                                result="effect1_foregroundBlur_8077_2641" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
            <!-- Services Section -->
            <div class="section-space-y bg-body-tertiary">
                <div class="container">
                    <div class="row g-4">
                        @foreach([
                            ['icon' => 'solar:box-line-duotone', 'title' => 'Digital Product Design'],
                            ['icon' => 'hugeicons:geometric-shapes-01', 'title' => 'Architecture Design'],
                            ['icon' => 'fluent-mdl2:product-variant', 'title' => 'Branding Product Design'],
                            ['icon' => 'hugeicons:web-design-01', 'title' => 'Web Design & Development'],
                            ['icon' => 'ic:twotone-wordpress', 'title' => 'WordPress Development'],
                            ['icon' => 'carbon:application', 'title' => 'App Development'],
                            ['icon' => 'hugeicons:web-design-02', 'title' => 'UI/UX Design'],
                            ['icon' => 'fluent:content-view-gallery-lightning-24-regular', 'title' => 'Content Writing'],
                        ] as $service)
                        <div class="col-md-6 col-lg-4 col-xxl-3">
                            <div class="bg-body rounded p-4 p-md-8 p-lg-4 p-xl-8 h-100">
                                <div class="d-inline-block mb-6">
                                    <iconify-icon icon="{{ $service['icon'] }}" class="fs-48"></iconify-icon>
                                </div>
                                <h6>
                                    <a href="#" class="link d-inline-block text-heading hover:text-primary"> {{ $service['title'] }} </a>
                                </h6>
                                <p class="mb-6"> Just add a trade-in when you choose a new product. Once your eligible device has been received and verified, we'll credit the value </p>
                                <div class="text-end">
                                    <a href="#" class="btn btn-icon btn-secondary hover:bg-primary hover:text-light rounded-circle">
                                        <iconify-icon icon="basil:plus-solid"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
            <!-- AD -->
            <div class="bg-body-tertiary">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ad-1 section-space-sm-y bg-dark rounded px-4 px-md-8 px-lg-12 position-relative z-1 overflow-hidden">
                                <div class="row g-4 justify-content-between align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="mb-2 text-light"> From discovery call to production SOC </h4>
                                        <p class="mb-0 text-light text-opacity-75 fs-14 max-text-10"> Joint success plan: scope integrations, agree KPIs, and land CW360 with training your analysts will actually use. </p>
                                    </div>
                                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                        <a href="{{ route('contact') }}" class="btn btn-primary text-dark fw-semibold"> Book a briefing </a>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/cw/cw-service-cta.jpg') }}" alt="Security team collaborating on operations" class="img-fluid position-absolute top-50 start-50 translate-middle-y z-n1 ad-1__photo-cover opacity-50">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AD End -->
            <!-- Testimonial Section -->
            <div class="section-space-y testimonial-section-1">
                <div class="section-space-sm-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-7 col-xxl-6">
                                <span class="btn btn-sm align-items-center bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle cursor-default mb-4">
                                    <iconify-icon icon="uim:check-circle" class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                    <span class="d-inline-block flex-grow-1 fw-medium"> Testimonials </span>
                                </span>
                                <h3 class="mb-0">What teams say about delivery with CW360</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-section-1__inner">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="swiper testimonial-slider-1">
                                    <div class="swiper-wrapper">
                                        @foreach([
                                            ['img' => 'testimonial-avatars/1.jpg', 'name' => 'Program sponsor', 'role' => 'Regional financial services', 'quote' => 'The services team translated our risk committee asks into a phased rollout—integrations first, then Zarqaa, then ITSM hardening—without pausing the SOC.'],
                                            ['img' => 'testimonial-avatars/2.jpg', 'name' => 'SOC operations lead', 'role' => 'High-volume monitoring', 'quote' => 'They did not disappear after go-live. Hypercare covered tuning windows, noisy parsers, and analyst Q&A until MTTA actually moved.'],
                                            ['img' => 'testimonial-avatars/3.jpg', 'name' => 'MSSP delivery manager', 'role' => 'Multi-tenant provider', 'quote' => 'Tenant onboarding playbooks and shared templates cut our time-to-first-ticket dramatically compared to bespoke SIEM projects.'],
                                            ['img' => 'testimonial-avatars/4.jpg', 'name' => 'Security engineer', 'role' => 'Integration owner', 'quote' => 'Webhooks and syslog sources we thought were “too legacy” made it in. Field mapping to Jira was explicit—no mystery columns.'],
                                            ['img' => 'testimonial-avatars/5.jpg', 'name' => 'GRC partner', 'role' => 'Compliance advisory', 'quote' => 'Workflow and evidence design sessions matched how we report to regulators—not a generic ITSM dump.'],
                                            ['img' => 'testimonial-avatars/6.jpg', 'name' => 'IT service owner', 'role' => 'Enterprise ITSM', 'quote' => 'ServiceNow alignment was the hardest part historically. This engagement treated tickets, tasks, and SLAs as first-class—not an afterthought.'],
                                            ['img' => 'testimonial-avatars/7.jpg', 'name' => 'Incident commander', 'role' => 'Crisis response', 'quote' => 'Tabletop on the new console before a real breach gave confidence. Everyone knew where alerts, tasks, and comms would live.'],
                                            ['img' => 'testimonial-avatars/8.jpg', 'name' => 'Executive stakeholder', 'role' => 'Digital transformation', 'quote' => 'Briefings were concise: scope, dependencies, and KPIs. We could explain the investment to the board in operational terms.'],
                                        ] as $t)
                                        <div class="swiper-slide">
                                            <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                <p class="mb-6 text-heading">{{ $t['quote'] }}</p>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('assets/img/' . $t['img']) }}" alt="{{ $t['name'] }}" class="img-fluid rounded-circle testimonial-section-1__avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fw-semibold text-heading">{{ $t['name'] }}</p>
                                                        <span class="d-block fs-14">{{ $t['role'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="swiper testimonial-slider-2">
                                    <div class="swiper-wrapper">
                                        @foreach([
                                            ['img' => 'testimonial-avatars/2.jpg', 'name' => 'Detection engineering', 'role' => 'Content & use cases', 'quote' => 'Use-case workshops tied correlation logic to real attacker behaviors—not vendor defaults. We retired noisy rules the same sprint.'],
                                            ['img' => 'testimonial-avatars/4.jpg', 'name' => 'Cloud security lead', 'role' => 'Hybrid estate', 'quote' => 'AWS and Azure signal onboarding was scoped with least-privilege IAM patterns documented for our cloud team to approve quickly.'],
                                            ['img' => 'testimonial-avatars/1.jpg', 'name' => 'Risk committee chair', 'role' => 'Governed industry', 'quote' => 'They spoke our language: control objectives, evidence, and who owns each step in the incident record.'],
                                            ['img' => 'testimonial-avatars/5.jpg', 'name' => 'Vendor management', 'role' => 'Procurement partner', 'quote' => 'Statements of work were outcome-based—integration milestones, training attendance, and acceptance criteria we could audit.'],
                                            ['img' => 'testimonial-avatars/3.jpg', 'name' => 'Tier-1 lead', 'role' => '24/7 SOC', 'quote' => 'Shift handoffs improved because tasks and notes lived with the alert. Less “read the entire Slack thread” at 3 a.m.'],
                                            ['img' => 'testimonial-avatars/7.jpg', 'name' => 'Red team liaison', 'role' => 'Purple exercises', 'quote' => 'Exercise findings flowed into CW360 as structured follow-ups. Nothing got lost between purple, blue, and ITSM.'],
                                            ['img' => 'testimonial-avatars/6.jpg', 'name' => 'Data protection officer', 'role' => 'Privacy by design', 'quote' => 'Data handling for logs and tickets was reviewed up front—retention and access aligned with our DPIA expectations.'],
                                            ['img' => 'testimonial-avatars/8.jpg', 'name' => 'Board advisor', 'role' => 'Strategic oversight', 'quote' => 'We wanted a partner that could grow with national cyber programs. The roadmap sessions felt grounded, not slide-ware.'],
                                        ] as $t)
                                        <div class="swiper-slide">
                                            <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                <p class="mb-6 text-heading">{{ $t['quote'] }}</p>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('assets/img/' . $t['img']) }}" alt="{{ $t['name'] }}" class="img-fluid rounded-circle testimonial-section-1__avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fw-semibold text-heading">{{ $t['name'] }}</p>
                                                        <span class="d-block fs-14">{{ $t['role'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="931" height="815" viewBox="0 0 931 815" fill="none" class="testimonial-section-1__shape">
                        <g filter="url(#filter0_f_8001_8009)">
                            <path d="M724.978 256.138C748.883 223.446 782.903 148 829.407 148C868.323 148 861.752 261.729 793.81 356.036C636.472 539.564 520.855 548 416.426 548C311.998 548 267 495.048 267 462.356C267 429.663 298.454 383.138 468.309 383.138C638.162 383.138 701.072 288.831 724.978 256.138Z" fill="#6328FF" fill-opacity="0.5" class="testimonial-section-1__path" />
                        </g>
                        <defs>
                            <filter id="filter0_f_8001_8009" x="0.333405" y="-118.667" width="1119.59" height="933.333" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_8001_8009" />
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
            <!-- Testimonial Section End -->
            @include('web.layout.footer-marketing')
        </div>
    </div>
    <!-- Scripts -->
    @include('web.layout.scripts')
</body>

</html>
