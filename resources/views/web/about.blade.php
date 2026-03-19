<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

@include('web.layout.head')

<body>
    <style>
        .primary-header {
            background-color: #000 !important;
        }
    </style>
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
                                        <h3>About Us</h3>
                                        <p class="mb-0 max-text-12">Shaping Ideas Into Digital Experiences That Inspire
                                            and Empower Businesses Worldwide.</p>
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
                                    <h3 class="max-text-4 mx-auto"> Our Mission is to Make Work Meaningful </h3>
                                    <p class="mb-0 fw-semibold"> Lattice is the #1 AI-powered people platform that turns
                                        managers into leaders, employees into high-performers, and companies into the
                                        best places to work. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/about-img.png') }}" alt="image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-space-md-top">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-8 col-xl-6">
                                <h6 class="mb-0 fs-20 text-center"> Trusted by the best companies in the world </h6>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="931" height="815" viewBox="0 0 931 815"
                    fill="none" class="about-1__shape">
                    <g filter="url(#filter0_f_8001_8009)">
                        <path
                            d="M724.978 256.138C748.883 223.446 782.903 148 829.407 148C868.323 148 861.752 261.729 793.81 356.036C636.472 539.564 520.855 548 416.426 548C311.998 548 267 495.048 267 462.356C267 429.663 298.454 383.138 468.309 383.138C638.162 383.138 701.072 288.831 724.978 256.138Z"
                            fill="#6328FF" fill-opacity="0.5" class="about-1__path" />
                    </g>
                    <defs>
                        <filter id="filter0_f_8001_8009" x="0.333405" y="-118.667" width="1119.59" height="933.333"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_8001_8009" />
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
                                <h3 class="mb-0">Our Mission is to Make Work Meaningful</h3>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/about-2-img-mobile.png') }}" alt="image"
                                    class="img-fluid d-xl-none">
                                <div class="d-none d-xl-inline-block position-relative z-1">
                                    <img src="{{ asset('assets/img/about-2-img-a.png') }}" alt="image"
                                        class="img-fluid">
                                    <img src="{{ asset('assets/img/about-2-img-b.png') }}" alt="image"
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
                                    <img src="{{ asset('assets/img/about-2-icon-1.png') }}" alt="image"
                                        class="img-fluid dark:filter-invert">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Business Plans Auth for all</h6>
                                    <p class="mb-0"> Progressively onboard every potential user with just one
                                        library. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/about-2-icon-2.png') }}" alt="image"
                                        class="img-fluid dark:filter-invert">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Business Plans Auth for all</h6>
                                    <p class="mb-0"> Progressively onboard every potential user with just one
                                        library. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/about-2-icon-3.png') }}" alt="image"
                                        class="img-fluid dark:filter-invert">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Business Plans Auth for all</h6>
                                    <p class="mb-0"> Progressively onboard every potential user with just one
                                        library. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/about-2-icon-4.png') }}" alt="image"
                                        class="img-fluid dark:filter-invert">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Battle-tested & hardened</h6>
                                    <p class="mb-0"> Progressively onboard every potential user with just one
                                        library. </p>
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
                                <h3>Our History</h3>
                                <p class="mb-0"> Lattice is the #1 AI-powered people platform that turns managers
                                    into leaders, employees into high-performers </p>
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
                                        <h6 class="fw-semibold fs-20 mb-md-0">2012</h6>
                                    </div>
                                    <div class="timeline-1__right">
                                        <h6>Started Company</h6>
                                        <p class="mb-0"> Delcap Asset Management Ltd is incorporated in London and
                                            regulated by the Financial Conduct Authority (FCA). </p>
                                    </div>
                                </div>
                                <div class="timeline-1__item">
                                    <div class="timeline-1__left">
                                        <h6 class="fw-semibold fs-20 mb-md-0">2013</h6>
                                    </div>
                                    <div class="timeline-1__right">
                                        <h6>AUM: EUR 50M</h6>
                                        <p class="mb-0"> Delcap Asset Management Ltd is incorporated in London and
                                            regulated by the Financial Conduct Authority. </p>
                                    </div>
                                </div>
                                <div class="timeline-1__item">
                                    <div class="timeline-1__left">
                                        <h6 class="fw-semibold fs-20 mb-md-0">2018</h6>
                                    </div>
                                    <div class="timeline-1__right">
                                        <h6>AUM: EUR 50M</h6>
                                        <p class="mb-0"> Delcap secures its first institutional monitoring mandate
                                            and launches its first Private Equity feeder fund </p>
                                    </div>
                                </div>
                                <div class="timeline-1__item">
                                    <div class="timeline-1__left">
                                        <h6 class="fw-semibold fs-20 mb-md-0">2021</h6>
                                    </div>
                                    <div class="timeline-1__right">
                                        <h6>AUM: EUR 50M</h6>
                                        <p class="mb-0"> Delcap secures its first institutional monitoring mandate
                                            and launches its first Private Equity feeder fund </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/img/timeline-img.png') }}" alt="image"
                                class="img-fluid dark:filter-invert">
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
                                        <h4 class="mb-2">5,000+</h4>
                                        <p class="mb-0">Organizations trust Lattice</p>
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
                                        <h4 class="mb-2">10k+</h4>
                                        <p class="mb-0">Monthly campaign</p>
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
                                        <h4 class="mb-2">20M+</h4>
                                        <p class="mb-0">Monthly Page Visitor</p>
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
                                        <span class="d-inline-block flex-grow-1 fw-medium"> Our Team </span>
                                    </span>
                                    <h3 class="mb-0 mx-auto">Our Team Members</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-sm-6 col-lg-3">
                            <div class="team-member-1">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('assets/img/team-member-1.png') }}" alt="image"
                                        class="w-100 h-100 object-fit-cover transition team-member-1__img">
                                </div>
                                <div
                                    class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                    <div
                                        class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                        <div class="flex-grow-1">
                                            <a href="#"
                                                class="link d-block fw-bold text-heading hover:text-primary"> Savan
                                                Nuyen </a>
                                            <p class="mb-0 fs-12">Project Manager</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#"
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
                                    <img src="{{ asset('assets/img/team-member-2.png') }}" alt="image"
                                        class="w-100 h-100 object-fit-cover transition team-member-1__img">
                                </div>
                                <div
                                    class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                    <div
                                        class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                        <div class="flex-grow-1">
                                            <a href="#"
                                                class="link d-block fw-bold text-heading hover:text-primary"> Peter
                                                Parker </a>
                                            <p class="mb-0 fs-12">Project Manager</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#"
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
                                    <img src="{{ asset('assets/img/team-member-3.png') }}" alt="image"
                                        class="w-100 h-100 object-fit-cover transition team-member-1__img">
                                </div>
                                <div
                                    class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                    <div
                                        class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                        <div class="flex-grow-1">
                                            <a href="#"
                                                class="link d-block fw-bold text-heading hover:text-primary"> Marty
                                                Byrde </a>
                                            <p class="mb-0 fs-12">Project Manager</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#"
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
                                    <img src="{{ asset('assets/img/team-member-4.png') }}" alt="image"
                                        class="w-100 h-100 object-fit-cover transition team-member-1__img">
                                </div>
                                <div
                                    class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                    <div
                                        class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                        <div class="flex-grow-1">
                                            <a href="#"
                                                class="link d-block fw-bold text-heading hover:text-primary"> Ben Davis
                                            </a>
                                            <p class="mb-0 fs-12">Project Manager</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#"
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
                                <h3 class="mb-0">What Client Say's About Our Services</h3>
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
                                        @foreach ([['img' => 'testimonial-1-img-1.png', 'name' => 'Kyle Teague'], ['img' => 'testimonial-1-img-2.png', 'name' => 'Jhon Snow'], ['img' => 'testimonial-1-img-3.png', 'name' => 'Peter Parker'], ['img' => 'testimonial-1-img-4.png', 'name' => 'Marty Byred'], ['img' => 'testimonial-1-img-5.png', 'name' => 'Kyle Teague'], ['img' => 'testimonial-1-img-6.png', 'name' => 'Jemmy Fox'], ['img' => 'testimonial-1-img-7.png', 'name' => 'Mike Perry']] as $t)
                                            <div class="swiper-slide">
                                                <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                    <p class="mb-6 text-heading"> I love getting notified that my team
                                                        member received praise so I can bring it up in our next
                                                        one-on-one. </p>
                                                    <div class="d-flex align-items-center gap-4">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('assets/img/' . $t['img']) }}"
                                                                alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-1 fw-semibold text-heading">
                                                                {{ $t['name'] }} </p>
                                                            <span class="d-block fs-14"> Director of Learning and
                                                                Development </span>
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
                                        @foreach ([['img' => 'testimonial-1-img-1.png', 'name' => 'Kyle Teague'], ['img' => 'testimonial-1-img-2.png', 'name' => 'Jhon Snow'], ['img' => 'testimonial-1-img-3.png', 'name' => 'Peter Parker'], ['img' => 'testimonial-1-img-4.png', 'name' => 'Marty Byred'], ['img' => 'testimonial-1-img-5.png', 'name' => 'Kyle Teague'], ['img' => 'testimonial-1-img-6.png', 'name' => 'Jemmy Fox'], ['img' => 'testimonial-1-img-7.png', 'name' => 'Mike Perry'], ['img' => 'testimonial-1-img-1.png', 'name' => 'Steven Miller'], ['img' => 'testimonial-1-img-2.png', 'name' => 'Merry Kom'], ['img' => 'testimonial-1-img-3.png', 'name' => 'Kyle Teague']] as $t)
                                            <div class="swiper-slide">
                                                <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                    <p class="mb-6 text-heading"> I love getting notified that my team
                                                        member received praise so I can bring it up in our next
                                                        one-on-one. </p>
                                                    <div class="d-flex align-items-center gap-4">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('assets/img/' . $t['img']) }}"
                                                                alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-1 fw-semibold text-heading">
                                                                {{ $t['name'] }} </p>
                                                            <span class="d-block fs-14"> Director of Learning and
                                                                Development </span>
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
                                fill="#6328FF" fill-opacity="0.5" class="testimonial-section-1__path" />
                        </g>
                        <defs>
                            <filter id="filter0_f_8001_8009b" x="0.333405" y="-118.667" width="1119.59"
                                height="933.333" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                    result="shape" />
                                <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_8001_8009" />
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
            <!-- Testimonial Section End -->
            <div class="section-space-md-y bg-body-tertiary">
                <!-- Advertisement Section -->
                <div class="section-space-md-y">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="ad-1 section-space-sm-y bg-dark rounded px-4 px-md-8 px-lg-12 position-relative z-1 overflow-hidden">
                                    <div class="row g-4 justify-content-between align-items-center">
                                        <div class="col-md-8">
                                            <h4 class="mb-0 text-light"> Your appointments are in safe hands </h4>
                                        </div>
                                        <div class="col-md-4 text-md-end">
                                            <a href="{{ route('home') }}" class="btn btn-primary"> Purchase Now </a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/ad-1-img-1.png') }}" alt="image"
                                        class="img-fluid position-absolute top-50 start-50 translate-middle-y z-n1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Advertisement Section End -->
                <!-- Board & Investors Section -->
                <div class="section-space-md-y">
                    <div class="section-space-md-bottom text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8">
                                    <span
                                        class="btn btn-sm align-items-center bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle cursor-default mb-4">
                                        <iconify-icon icon="uim:check-circle"
                                            class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                        <span class="d-inline-block flex-grow-1 fw-medium"> Our Team </span>
                                    </span>
                                    <h3 class="max-text-4 mx-auto">Our Board & Investors</h3>
                                    <p class="mb-0"> Our Board of Directors includes Jack Altman (Co-founder &
                                        Executive Chairman, Lattice), Eric Koslow (Co-founder, Lattice), Sandra Smith,
                                        Miles Grimshaw </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <ul
                                    class="list list-row flex-wrap gap-4 gap-md-6 justify-content-center align-items-center">
                                    @foreach (range(1, 10) as $i)
                                        <li>
                                            <div
                                                class="brand-2 d-grid place-content-center text-center bg-light-subtle rounded">
                                                <img src="{{ asset('assets/img/brand-img-' . $i . '.png') }}"
                                                    alt="image" class="img-fluid">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-space-md-y">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 col-xl-9 col-xxl-8">
                                    <h6 class="mb-0 text-center mx-auto text-body"> Incredible individuals have also
                                        invested in Lattice including, <span class="text-heading">Marc Benioff (CEO of
                                            Salesforce)</span>, Alexis Ohanian (Co-founder and Executive Chairman of
                                        Reddit), Elad Gil (Startup Investor and Advisor), <span
                                            class="text-heading">and Kevin Mahaffey (Founder and CTO of
                                            Lookout)</span>. </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="swiper team-member-2-slider">
                                    <div class="swiper-wrapper">
                                        @foreach ([1, 2, 3, 4, 1, 3] as $i)
                                            <div class="swiper-slide">
                                                <div class="rounded overflow-hidden">
                                                    <img src="{{ asset('assets/img/team-member-2-img-' . $i . '.png') }}"
                                                        alt="image" class="w-100 h-100 object-fit-cover">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Board & Investors Section End -->
                <!-- CTA -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="section-space-y px-4 px-sm-8 px-md-10 px-lg-12 rounded-4 position-relative z-1 bg-light-subtle overflow-hidden">
                                <div class="row">
                                    <div class="col-md-8 col-xl-6">
                                        <span
                                            class="btn btn-sm align-items-center bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle cursor-default mb-4">
                                            <iconify-icon icon="uim:check-circle"
                                                class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                            <span class="d-inline-block flex-grow-1 fw-medium"> CTA </span>
                                        </span>
                                        <h3 class="mb-0">What Client Say's About Our Services</h3>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/cta-1-img.png') }}" alt="image"
                                    class="img-fluid position-absolute top-50 end-0 translate-middle-y bottom-0 z-n1 d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CTA End -->
            </div>
            <!-- Footer -->
            <footer class="position-relative z-1 overflow-hidden">
                <div class="section-space-lg-y">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-7 col-lg-4">
                                <div class="pe-xxl-10">
                                    <a class="logo d-inline-flex mb-6" href="{{ route('home') }}">
                                        <img src="{{ asset('assets/img/logo-dark.png') }}" alt="image"
                                            class="logo__img logo__img--light">
                                        <img src="{{ asset('assets/img/logo-light.png') }}" alt="image"
                                            class="logo__img logo__img--dark">
                                    </a>
                                    <p class="mb-8"> Giving modern marketing teams superpowers with short links that
                                        stand </p>
                                    <div class="d-flex align-items-center flex-wrap gap-3 mb-6">
                                        <div class="d-flex align-items-center gap-2 py-3 px-2 rounded bg-body shadow">
                                            <img src="{{ asset('assets/img/certificate-img-1.png') }}" alt="image"
                                                class="img-fluid flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <ul class="list list-row gap-1 align-items-center lh-1">
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                </ul>
                                                <p class="mb-0 fs-14 fw-medium">Capterra admit</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 py-3 px-2 rounded bg-body shadow">
                                            <img src="{{ asset('assets/img/certificate-img-2.png') }}" alt="image"
                                                class="img-fluid flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <ul class="list list-row gap-1 align-items-center lh-1">
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill"
                                                            class="fs-14 text-warning"></iconify-icon></li>
                                                </ul>
                                                <p class="mb-0 fs-14 fw-medium">Honored by G2</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center gap-4 py-2 px-4 bg-body rounded shadow">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/img/avatar-6.png') }}" alt="image"
                                                class="img-fluid flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <span class="d-block fw-medium fs-14"> Get <span
                                                        class="text-primary">35% off</span> for the whole ✨ year
                                                </span>
                                            </div>
                                        </div>
                                        <a href="#" class="link d-inline-block text-primary flex-shrink-0">
                                            <iconify-icon icon="line-md:arrow-right" class="fs-20"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row g-4 justify-content-xxl-around">
                                    <div class="col-sm-6 col-md-3 col-xxl-3">
                                        <h6 class="mb-6"> Product </h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('home') }}"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    AI Technology </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    AI Chat Support </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    AI Code Generator </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    AI Image Generator </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    AI Developer Ast. </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    AI Video Generator </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xxl-3">
                                        <h6 class="mb-6">Company</h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('about') }}"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    About Us </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Career Opportunity </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Case Study </a></li>
                                            <li><a href="{{ route('contact') }}"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Contact Us </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Portfolio </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Pricing </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Service </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xxl-2">
                                        <h6 class="mb-6">Pages</h6>
                                        <ul class="list gap-2">
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Blog </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Modern Blog </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    FAQ </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Sign In </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Sign Up </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Event </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Privacy Policy </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xxl-3">
                                        <h6 class="mb-6">Elements</h6>
                                        <ul class="list gap-2">
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    About </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Blog </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Call to Action </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Testimonial </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Info List </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Feature </a></li>
                                            <li><a href="#"
                                                    class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">
                                                    Hero </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-space-sm-bottom">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <ul
                                    class="list list-row list-dot list-dot--md list-dot--secondary-emphasis flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                    <li><span class="d-inline-block fs-14"> &copy; 2025 NextAi </span></li>
                                    <li><a href="#"
                                            class="link d-inline-block text-body hover:text-primary fs-14"> Terms of
                                            Use </a></li>
                                    <li><a href="#"
                                            class="link d-inline-block text-body hover:text-primary fs-14"> Security
                                        </a></li>
                                    <li><a href="#"
                                            class="link d-inline-block text-body hover:text-primary fs-14"> Privacy
                                            Policy </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul
                                    class="list list-row flex-wrap justify-content-center justify-content-lg-end align-items-center gap-3">
                                    <li><a href="#"
                                            class="badge px-4 bg-primary-emphasis text-primary-subtle rounded-pill">
                                            Build with Us AI </a></li>
                                    <li>
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <iconify-icon icon="si:twitter-duotone"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <iconify-icon icon="icon-park-outline:dribble"></iconify-icon>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/img/shapes/footer-2-grid.png') }}" alt="image"
                    class="img-fluid position-absolute start-50 bottom-0 translate-middle-x z-n1 pointer-none">
                <svg width="860" height="579" viewBox="0 0 860 579" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="position-absolute z-n1 start-0 top-0 pointer-none">
                    <g filter="url(#filter0_f_10034_5037)">
                        <path
                            d="M169.847 11.8444C151.014 -24.0114 128.472 -103.643 82.4746 -110.489C43.9821 -116.218 33.7393 -2.76055 87.0576 100.521C215.664 305.212 328.779 330.576 432.07 345.949C535.361 361.322 587.664 315.572 592.476 283.235C597.289 250.899 573.027 200.25 405.023 175.245C237.02 150.241 188.679 47.7002 169.847 11.8444Z"
                            fill="#00C4FD" fill-opacity="0.2" />
                    </g>
                    <defs>
                        <filter id="filter0_f_10034_5037" x="-216.362" y="-377.364" width="1076.05" height="993.048"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_10034_5037" />
                        </filter>
                    </defs>
                </svg>
                <svg width="691" height="579" viewBox="0 0 691 579" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="position-absolute z-n1 end-0 top-0 pointer-none">
                    <g filter="url(#filter0_f_10034_5038)">
                        <path
                            d="M724.978 62.1383C748.883 29.4456 782.903 -46 829.407 -46C868.323 -46 861.752 67.7293 793.81 162.036C636.472 345.564 520.855 354 416.426 354C311.998 354 267 301.048 267 268.356C267 235.663 298.454 189.138 468.309 189.138C638.162 189.138 701.072 94.8311 724.978 62.1383Z"
                            fill="#6328FF" fill-opacity="0.2" />
                    </g>
                    <defs>
                        <filter id="filter0_f_10034_5038" x="0.333405" y="-312.667" width="1119.59" height="933.333"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_10034_5038" />
                        </filter>
                    </defs>
                </svg>
            </footer>
            <!-- Footer End -->
        </div>
    </div>
    <!-- Scripts -->
    @include('web.layout.scripts')
</body>

</html>
