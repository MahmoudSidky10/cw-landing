<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

@include('web.layout.head')

<body>
 
@include('web.layout.nav')
<div class="preloader">
    <div class="preloader__content">
        <img src="{{ asset('assets/img/logo-light.png') }}" alt="logo" class="img-fluid preloader__img">
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
                                            <li class="breadcrumb-item active fs-14" aria-current="page"> About
                                            </li>
                                        </ol>
                                    </nav>
                                    <h3>About Cyberwatch360</h3>
                                    <p class="mb-0 max-text-12">Cyberwatch360 (CW360) is an AI-agentic security
                                        operations platform that unifies alerts, ticketing, and SOC tasks so teams
                                        can respond faster, cut noise, and focus on real threats.</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1124" height="401"
                                 viewBox="0 0 1124 401" fill="none" class="banner-1__froster-svg">
                                <g filter="url(#filter0_f_8077_2641)">
                                    <path
                                        d="M773.993 103.763C800.457 67.556 838.118 -16 889.598 -16C932.68 -16 925.405 109.955 850.192 214.4C676.015 417.658 548.024 427 432.419 427C316.814 427 267 368.356 267 332.149C267 295.942 301.82 244.415 489.854 244.415C677.886 244.415 747.529 139.97 773.993 103.763Z"
                                        fill="#6328FF" fill-opacity="0.5" class="banner-1__froster-svg-path"/>
                                </g>
                                <defs>
                                    <filter id="filter0_f_8077_2641" x="0.333405" y="-282.667" width="1182.33"
                                            height="976.333" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                 result="shape"/>
                                        <feGaussianBlur stdDeviation="133.333"
                                                        result="effect1_foregroundBlur_8077_2641"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->
        <!-- About Section -->
        <div class="about-1 section-space-y bg-body-tertiary">
            <div class="section-space-sm-bottom">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="text-center">
                                    <span
                                        class="btn btn-sm align-items-center bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle cursor-default mb-4">
                                        <iconify-icon icon="uim:check-circle"
                                                      class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                        <span class="d-inline-block flex-grow-1 fw-medium"> About Us </span>
                                    </span>
                                <h3 class="max-text-4 mx-auto">Our mission</h3>
                                <p class="mb-0 fw-semibold">We enhance cybersecurity operations through a smart,
                                    unified platform that brings together alerts, ticketing, and Security Operations
                                    Center (SOC) work in one place. Using advanced AI and machine learning, we help
                                    organizations automate repetitive work, reduce response times, and shrink the
                                    effort required to manage incidents—so analysts spend less time on triage and
                                    more time stopping real attacks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/cw/cw-about-hero.jpg') }}"
                                 alt="Cyberwatch360 team members collaborating in a modern office"
                                 class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Audience headline + placeholder partner logos (uncomment when real logos are ready) --}}
            {{--
            <div class="section-space-md-top">
                <div class="container">
                    <div class="row justify-content-center g-4">
                        <div class="col-md-8 col-xl-6">
                            <h6 class="mb-0 fs-20 text-center">Built for CISOs, SOC managers, and analysts in
                                regulated enterprises and growing MSSPs</h6>
                        </div>
                        <div class="col-12">
                            <ul class="list list-row flex-wrap gap-6 justify-content-center align-items-center">
                                <li><img src="{{ asset('assets/img/brand-img-1.png') }}" alt="image"
                                        class="img-fluid"></li>
                                <li><img src="{{ asset('assets/img/brand-img-2.png') }}" alt="image"
                                        class="img-fluid"></li>
                                <li><img src="{{ asset('assets/img/brand-img-3.png') }}" alt="image"
                                        class="img-fluid"></li>
                                <li><img src="{{ asset('assets/img/brand-img-4.png') }}" alt="image"
                                        class="img-fluid"></li>
                                <li><img src="{{ asset('assets/img/brand-img-5.png') }}" alt="image"
                                        class="img-fluid"></li>
                                <li><img src="{{ asset('assets/img/brand-img-6.png') }}" alt="image"
                                        class="img-fluid"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="931" height="815" viewBox="0 0 931 815"
                 fill="none" class="about-1__shape">
                <g filter="url(#filter0_f_8001_8009)">
                    <path
                        d="M724.978 256.138C748.883 223.446 782.903 148 829.407 148C868.323 148 861.752 261.729 793.81 356.036C636.472 539.564 520.855 548 416.426 548C311.998 548 267 495.048 267 462.356C267 429.663 298.454 383.138 468.309 383.138C638.162 383.138 701.072 288.831 724.978 256.138Z"
                        fill="#6328FF" fill-opacity="0.5" class="about-1__path"/>
                </g>
                <defs>
                    <filter id="filter0_f_8001_8009" x="0.333405" y="-118.667" width="1119.59" height="933.333"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_8001_8009"/>
                    </filter>
                </defs>
            </svg>
        </div>
        <!-- About Section End -->
        <!-- About Section 2 -->
        <div class="about-2 section-space-y">
            <div class="section-space-md-bottom">
                <div class="container">
                    <div class="row g-4 align-items-md-end justify-content-xl-between">
                        <div class="col-md-7 col-xl-6">
                                <span
                                    class="btn btn-primary btn-sm align-items-center cursor-default mb-4 pointer-default">
                                    <iconify-icon icon="uim:check-circle"
                                                  class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                    <span class="d-inline-block flex-grow-1 fw-medium"> About Us </span>
                                </span>
                            <h3 class="mb-0">Why Cyberwatch360 is different</h3>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/cw/cw-about-mobile.jpg') }}"
                                 alt="Cyberwatch360 security operations"
                                 class="img-fluid d-xl-none rounded-3">
                            <div class="d-none d-xl-inline-block position-relative z-1">
                                <img src="{{ asset('assets/img/about-2-img-a.png') }}"
                                     alt="Certified capability highlights" class="img-fluid">
                                <img src="{{ asset('assets/img/about-2-img-b.png') }}"
                                     alt="Security professional reviewing data on a tablet"
                                     class="img-fluid about-2__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 about-2__separator">
                    <div class="col-md-6">
                        <div
                            class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                            <div class="flex-shrink-0">
                                <div
                                    class="rounded-3 bg-primary-subtle text-primary d-grid place-content-center about-2__separator-icon"
                                    aria-hidden="true">
                                    <iconify-icon icon="solar:shield-warning-bold-duotone"
                                                  class="fs-40"></iconify-icon>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Unified alert operations</h6>
                                <p class="mb-0">Aggregate SIEM, EDR/XDR, firewalls, cloud sources (e.g. AWS
                                    GuardDuty, Azure Sentinel), and IDS/IPS into one console—with parsing,
                                    normalization, deduplication, and AI-assisted correlation to reduce noise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                            <div class="flex-shrink-0">
                                <div
                                    class="rounded-3 bg-primary-subtle text-primary d-grid place-content-center about-2__separator-icon"
                                    aria-hidden="true">
                                    <iconify-icon icon="solar:clipboard-list-bold-duotone"
                                                  class="fs-40"></iconify-icon>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Ticket &amp; task lifecycle</h6>
                                <p class="mb-0">Enriched tickets for platforms like ServiceNow and Jira—IOCs, risk
                                    scores, MITRE TTP context, assignments by skill and workload—plus structured
                                    tasks, Kanban views, SLAs, and notifications across email, Slack, and Microsoft
                                    Teams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                            <div class="flex-shrink-0">
                                <div
                                    class="rounded-3 bg-primary-subtle text-primary d-grid place-content-center about-2__separator-icon"
                                    aria-hidden="true">
                                    <iconify-icon icon="solar:settings-bold-duotone" class="fs-40"></iconify-icon>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Service management backbone</h6>
                                <p class="mb-0">Centralized configuration for categories, priorities, statuses,
                                    processes, policies, services, and roles—so the same operational model flows from
                                    alert triage through task execution and audit-ready logging.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                            <div class="flex-shrink-0">
                                <div
                                    class="rounded-3 bg-primary-subtle text-primary d-grid place-content-center about-2__separator-icon"
                                    aria-hidden="true">
                                    <iconify-icon icon="mingcute:ai-fill" class="fs-40"></iconify-icon>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Zarqaa AI: agentic, not just playbooks</h6>
                                <p class="mb-0">Unlike fixed SOAR scripts (if A then B), agentic AI reasons across
                                    signals—e.g. correlating a login with Jira and Slack—to decide next steps. The
                                    Zarqaa assistant acts as a virtual L1 analyst: recommendations, routine analysis,
                                    and 24/7 coverage without burning out your team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section 2 End -->
        <!-- Timeline Section -->
        <div class="section-space-top section-space-md-bottom bg-body-tertiary">
            <div class="section-space-md-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-xl-6">
                                <span
                                    class="btn btn-sm align-items-center bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle cursor-default mb-4">
                                    <iconify-icon icon="uim:check-circle"
                                                  class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                    <span class="d-inline-block flex-grow-1 fw-medium"> Timeline </span>
                                </span>
                            <h3>Our story</h3>
                            <p class="mb-0">Cyberwatch360 exists because modern SOCs drown in disconnected tools
                                and alert noise. We combine a unified operations layer with AI that prioritizes real
                                incidents, explains its actions, and scales from lean MSSPs to large regulated
                                enterprises—especially where digital transformation and compliance (e.g. SAMA,
                                national cyber frameworks) raise the bar.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 justify-content-xl-between">
                    <div class="col-lg-6 col-xl-5">
                        <div class="timeline-1">
                            <div class="timeline-1__item">
                                <div class="timeline-1__left">
                                    <h6 class="fw-semibold fs-20 mb-md-0">Unify</h6>
                                </div>
                                <div class="timeline-1__right">
                                    <h6>One console for the SOC</h6>
                                    <p class="mb-0">Bring alerts, tickets, and tasks together instead of juggling
                                        siloed SIEM, EDR, and ITSM screens—so critical incidents are less likely to
                                        be missed or mishandled.</p>
                                </div>
                            </div>
                            <div class="timeline-1__item">
                                <div class="timeline-1__left">
                                    <h6 class="fw-semibold fs-20 mb-md-0">Automate</h6>
                                </div>
                                <div class="timeline-1__right">
                                    <h6>From alert to structured response</h6>
                                    <p class="mb-0">Ingest via REST, webhooks, syslog, or email; normalize fields;
                                        deduplicate and correlate; auto-generate enriched tickets with IOCs, risk
                                        scores, and MITRE mappings.</p>
                                </div>
                            </div>
                            <div class="timeline-1__item">
                                <div class="timeline-1__left">
                                    <h6 class="fw-semibold fs-20 mb-md-0">Zarqaa</h6>
                                </div>
                                <div class="timeline-1__right">
                                    <h6>Agentic AI with proof</h6>
                                    <p class="mb-0">Zarqaa reasons across tools and context like a fast, efficient
                                        analyst—not a rigid playbook. Every action can be traced in a reasoning log
                                        so you trust why an alert was closed as false positive or escalated.</p>
                                </div>
                            </div>
                            <div class="timeline-1__item">
                                <div class="timeline-1__left">
                                    <h6 class="fw-semibold fs-20 mb-md-0">Scale</h6>
                                </div>
                                <div class="timeline-1__right">
                                    <h6>MENA &amp; beyond</h6>
                                    <p class="mb-0">Purpose-built for organizations facing alert overload, fragmented
                                        workflows, and talent gaps—from MSSPs needing multi-tenant efficiency to
                                        SMEs that need a security copilot without a 24/7 SOC.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img/timeline-img.png') }}"
                             alt="Cyberwatch360 dashboard showing alerts, MTTA, and status charts"
                             class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
            <div class="section-space-y">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div
                                class="d-flex align-items-center gap-4 gap-xl-6 rounded-4 p-4 py-sm-4 py-xl-6 py-xxl-8 px-sm-8 px-lg-4 px-xl-8 px-xxl-10 bg-light-subtle shadow-sm">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">100%</h4>
                                    <p class="mb-0">Alert coverage goal—no alert left uninvestigated</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <iconify-icon icon="fluent-emoji:handshake" class="h3 mb-0"></iconify-icon>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div
                                class="d-flex align-items-center gap-4 gap-xl-6 rounded-4 p-4 py-sm-4 py-xl-6 py-xxl-8 px-sm-8 px-lg-4 px-xl-8 px-xxl-10 bg-light-subtle shadow-sm">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">24/7</h4>
                                    <p class="mb-0">AI assistant vigilance as a virtual L1 analyst</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <iconify-icon icon="fluent-emoji:trophy" class="h3 mb-0"></iconify-icon>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div
                                class="d-flex align-items-center gap-4 gap-xl-6 rounded-4 p-4 py-sm-4 py-xl-6 py-xxl-8 px-sm-8 px-lg-4 px-xl-8 px-xxl-10 bg-light-subtle shadow-sm">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">~70%</h4>
                                    <p class="mb-0">Industry studies cite triage consuming most analyst time—we target
                                        that waste</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <iconify-icon icon="emojione-v1:smiling-face-with-halo"
                                                  class="h3 mb-0"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-space-md-bottom">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="text-center">
                                    <span
                                        class="btn btn-sm align-items-center bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle cursor-default mb-4">
                                        <iconify-icon icon="uim:check-circle"
                                                      class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                        <span class="d-inline-block flex-grow-1 fw-medium"> Audience </span>
                                    </span>
                                <h3 class="mb-0 mx-auto">Who we build for</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Audience photos --}}
            <div class="container">
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-member-1">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('assets/img/audience/audience-ciso.jpg') }}"
                                     alt="Executive leader representing a CISO economic buyer"
                                     class="w-100 h-100 object-fit-cover transition team-member-1__img">
                            </div>
                            <div
                                class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                <div
                                    class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                    <div class="flex-grow-1">
                                        <span class="d-block fw-bold text-heading">Economic buyer: CISO</span>
                                        <p class="mb-0 fs-12">Governance, compliance, cost control, and measurable
                                            SOC performance.</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('contact') }}"
                                           class="btn btn-sm btn-icon btn-primary-subtle rounded-circle">
                                            <iconify-icon icon="guidance:left-arrow"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-member-1">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('assets/img/audience/audience-soc-lead.jpg') }}"
                                     alt="Professional in business attire representing a SOC manager or team lead"
                                     class="w-100 h-100 object-fit-cover transition team-member-1__img">
                            </div>
                            <div
                                class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                <div
                                    class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                    <div class="flex-grow-1">
                                        <span class="d-block fw-bold text-heading">Daily user: SOC lead</span>
                                        <p class="mb-0 fs-12">High alert volume, SLA pressure, and need for
                                            prioritization without burning out analysts.</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('contact') }}"
                                           class="btn btn-sm btn-icon btn-primary-subtle rounded-circle">
                                            <iconify-icon icon="guidance:left-arrow"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-member-1">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('assets/img/audience/audience-mssp.jpg') }}"
                                     alt="Collaborating technology team representing MSSP delivery"
                                     class="w-100 h-100 object-fit-cover transition team-member-1__img">
                            </div>
                            <div
                                class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                <div
                                    class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                    <div class="flex-grow-1">
                                        <span class="d-block fw-bold text-heading">MSSP &amp; multi-tenant</span>
                                        <p class="mb-0 fs-12">Lean teams serving many clients need segregation,
                                            centralized visibility, and fast deployment.</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('contact') }}"
                                           class="btn btn-sm btn-icon btn-primary-subtle rounded-circle">
                                            <iconify-icon icon="guidance:left-arrow"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-member-1">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('assets/img/audience/audience-sme.jpg') }}"
                                     alt="Small team discussion representing an SME security or IT group"
                                     class="w-100 h-100 object-fit-cover transition team-member-1__img">
                            </div>
                            <div
                                class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                <div
                                    class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                    <div class="flex-grow-1">
                                        <span class="d-block fw-bold text-heading">SME security teams</span>
                                        <p class="mb-0 fs-12">Small groups covering multiple roles need a copilot to
                                            multiply impact—especially with a SIEM but no full SOC.</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('contact') }}"
                                           class="btn btn-sm btn-icon btn-primary-subtle rounded-circle">
                                            <iconify-icon icon="guidance:left-arrow"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Timeline Section End -->
        <!-- Testimonial Section -->
        <div class="section-space-md-top section-space-bottom testimonial-section-1">
            <div class="section-space-sm-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-7 col-xxl-6">
                                <span
                                    class="btn btn-sm align-items-center bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle cursor-default mb-4">
                                    <iconify-icon icon="uim:check-circle"
                                                  class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                    <span class="d-inline-block flex-grow-1 fw-medium"> Testimonials </span>
                                </span>
                            <h3 class="mb-0">What security leaders are solving with CW360</h3>
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
                                    @foreach ([
                                        ['img' => 'testimonial-avatars/1.jpg', 'name' => 'CISO perspective', 'role' => 'Regulated enterprise', 'quote' => 'We are measured on risk reduction and cost. CW360 aligns with that: fewer tools to string together, faster response, and AI that augments the team instead of adding another black box.'],
                                        ['img' => 'testimonial-avatars/2.jpg', 'name' => 'SOC manager perspective', 'role' => 'High-volume operations', 'quote' => 'The nightmare is a real attack hiding in thousands of false positives. Agentic investigation with a reasoning log beats “select all and close” every time.'],
                                        ['img' => 'testimonial-avatars/3.jpg', 'name' => 'MSSP perspective', 'role' => 'Multi-tenant delivery', 'quote' => 'We need quick onboarding per tenant and centralized control. A unified incident stack beats paying for fragmented SOAR, SIEM consoles, and ITSM glue code.'],
                                        ['img' => 'testimonial-avatars/4.jpg', 'name' => 'Security engineer perspective', 'role' => 'Integration-focused', 'quote' => 'REST, webhooks, syslog, and email ingestion matter. We can connect modern and legacy sources without a six-month services project.'],
                                    ] as $t)
                                        <div class="swiper-slide">
                                            <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                <p class="mb-6 text-heading">{{ $t['quote'] }}</p>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('assets/img/' . $t['img']) }}"
                                                             alt="{{ $t['name'] }}"
                                                             class="img-fluid rounded-circle testimonial-section-1__avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fw-semibold text-heading">
                                                            {{ $t['name'] }} </p>
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
                                    @foreach ([
                                        ['img' => 'testimonial-avatars/5.jpg', 'name' => 'Outcome: MTTR', 'role' => 'Operational KPI', 'quote' => 'Consolidating triage, enrichment, ticketing, and tasks removes hand‑offs that inflate mean time to respond.'],
                                        ['img' => 'testimonial-avatars/6.jpg', 'name' => 'Outcome: coverage', 'role' => 'SOC quality bar', 'quote' => 'We aim for full alert coverage—investigate everything, prioritize correctly, and document why.'],
                                        ['img' => 'testimonial-avatars/7.jpg', 'name' => 'Outcome: playbooks', 'role' => 'Automation strategy', 'quote' => 'Traditional SOAR is brittle. Agentic reasoning with transparent logs reduces playbook authoring and constant maintenance.'],
                                        ['img' => 'testimonial-avatars/8.jpg', 'name' => 'MENA context', 'role' => 'Compliance & national programs', 'quote' => 'Vision 2030-class initiatives and frameworks like SAMA raise the bar. We need platforms that match that urgency.'],
                                    ] as $t)
                                        <div class="swiper-slide">
                                            <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                <p class="mb-6 text-heading">{{ $t['quote'] }}</p>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('assets/img/' . $t['img']) }}"
                                                             alt="{{ $t['name'] }}"
                                                             class="img-fluid rounded-circle testimonial-section-1__avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fw-semibold text-heading">
                                                            {{ $t['name'] }} </p>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="931" height="815" viewBox="0 0 931 815"
                     fill="none" class="testimonial-section-1__shape">
                    <g filter="url(#filter0_f_8001_8009b)">
                        <path
                            d="M724.978 256.138C748.883 223.446 782.903 148 829.407 148C868.323 148 861.752 261.729 793.81 356.036C636.472 539.564 520.855 548 416.426 548C311.998 548 267 495.048 267 462.356C267 429.663 298.454 383.138 468.309 383.138C638.162 383.138 701.072 288.831 724.978 256.138Z"
                            fill="#6328FF" fill-opacity="0.5" class="testimonial-section-1__path"/>
                    </g>
                    <defs>
                        <filter id="filter0_f_8001_8009b" x="0.333405" y="-118.667" width="1119.59"
                                height="933.333" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                     result="shape"/>
                            <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_8001_8009"/>
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
