<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" data-theme="home-3">

@include('web.layout.head')

<body class="bg-black">

@include('web.layout.nav')
@php($a = ($settings ?? \App\Models\SiteSetting::instance())->mergedAboutContent())
@php($media = fn (?string $p) => \App\Models\SiteSetting::aboutMediaUrl($p))
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
                                        <span class="d-inline-block flex-grow-1 fw-medium"> {{ $a['mission']['badge'] ?? '' }} </span>
                                    </span>
                                <h3 class="max-text-4 mx-auto">{{ $a['mission']['title'] ?? '' }}</h3>
                                <p class="mb-0 fw-semibold">{{ $a['mission']['body'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="text-center">
                            <img src="{{ $media($a['mission']['image'] ?? null) }}"
                                 alt="{{ $a['mission']['image_alt'] ?? '' }}"
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
                                    <span class="d-inline-block flex-grow-1 fw-medium"> {{ $a['why_different']['badge'] ?? '' }} </span>
                                </span>
                            <h3 class="mb-0">{{ $a['why_different']['title'] ?? '' }}</h3>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ $media($a['why_different']['mobile_image'] ?? null) }}"
                                 alt="{{ $a['why_different']['mobile_alt'] ?? '' }}"
                                 class="img-fluid d-xl-none rounded-3">
                            <div class="d-none d-xl-inline-block position-relative z-1">
                                <img src="{{ $media($a['why_different']['img_a'] ?? null) }}"
                                     alt="{{ $a['why_different']['img_a_alt'] ?? '' }}" class="img-fluid">
                                <img src="{{ $media($a['why_different']['img_b'] ?? null) }}"
                                     alt="{{ $a['why_different']['img_b_alt'] ?? '' }}"
                                     class="img-fluid about-2__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 about-2__separator">
                    @foreach ($a['why_different']['items'] ?? [] as $whyItem)
                    <div class="col-md-6">
                        <div
                            class="d-flex flex-column flex-md-row gap-4 gap-xl-8 align-items-md-center px-xl-10 px-xxl-15 py-xl-10">
                            <div class="flex-shrink-0">
                                <div
                                    class="rounded-3 bg-primary-subtle text-primary d-grid place-content-center about-2__separator-icon"
                                    aria-hidden="true">
                                    <iconify-icon icon="{{ $whyItem['icon'] ?? 'mdi:information' }}"
                                                  class="fs-40"></iconify-icon>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>{{ $whyItem['title'] ?? '' }}</h6>
                                <p class="mb-0">{{ $whyItem['body'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                                    <span class="d-inline-block flex-grow-1 fw-medium"> {{ $a['story']['badge'] ?? '' }} </span>
                                </span>
                            <h3>{{ $a['story']['title'] ?? '' }}</h3>
                            <p class="mb-0">{{ $a['story']['intro'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 justify-content-xl-between">
                    <div class="col-lg-6 col-xl-5">
                        <div class="timeline-1">
                            @foreach ($a['story']['timeline'] ?? [] as $tl)
                            <div class="timeline-1__item">
                                <div class="timeline-1__left">
                                    <h6 class="fw-semibold fs-20 mb-md-0">{{ $tl['left'] ?? '' }}</h6>
                                </div>
                                <div class="timeline-1__right">
                                    <h6>{{ $tl['right_title'] ?? '' }}</h6>
                                    <p class="mb-0">{{ $tl['right_body'] ?? '' }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ $media($a['story']['side_image'] ?? null) }}"
                             alt="{{ $a['story']['side_alt'] ?? '' }}"
                             class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
            <div class="section-space-y">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        @foreach ($a['story']['highlights'] ?? [] as $hl)
                        <div class="col-md-6 col-lg-4">
                            <div
                                class="d-flex align-items-center gap-4 gap-xl-6 rounded-4 p-4 py-sm-4 py-xl-6 py-xxl-8 px-sm-8 px-lg-4 px-xl-8 px-xxl-10 bg-light-subtle shadow-sm">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">{{ $hl['value'] ?? '' }}</h4>
                                    <p class="mb-0">{{ $hl['label'] ?? '' }}</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <iconify-icon icon="{{ $hl['icon'] ?? 'mdi:information' }}" class="h3 mb-0"></iconify-icon>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                        <span class="d-inline-block flex-grow-1 fw-medium"> {{ $a['who_we_build']['badge'] ?? '' }} </span>
                                    </span>
                                <h3 class="mb-0 mx-auto">{{ $a['who_we_build']['title'] ?? '' }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Audience photos --}}
            <div class="container">
                <div class="row g-4">
                    @foreach ($a['who_we_build']['cards'] ?? [] as $aud)
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-member-1">
                            <div class="rounded overflow-hidden">
                                <img src="{{ $media($aud['image'] ?? null) }}"
                                     alt="{{ $aud['image_alt'] ?? '' }}"
                                     class="w-100 h-100 object-fit-cover transition team-member-1__img">
                            </div>
                            <div
                                class="team-member-1__content px-2 px-sm-4 px-xl-2 px-xxl-4 z-1 position-relative">
                                <div
                                    class="d-flex align-items-center gap-3 rounded bg-light-subtle p-4 px-sm-6 px-lg-4 shadow-sm">
                                    <div class="flex-grow-1">
                                        <span class="d-block fw-bold text-heading">{{ $aud['heading'] ?? '' }}</span>
                                        <p class="mb-0 fs-12">{{ $aud['body'] ?? '' }}</p>
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
                    @endforeach
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
                                    <span class="d-inline-block flex-grow-1 fw-medium"> {{ $a['testimonials']['badge'] ?? '' }} </span>
                                </span>
                            <h3 class="mb-0">{{ $a['testimonials']['title'] ?? '' }}</h3>
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
                                    @foreach ($a['testimonials']['slider1'] ?? [] as $t)
                                        <div class="swiper-slide">
                                            <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                <p class="mb-6 text-heading">{{ $t['quote'] ?? '' }}</p>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ $media($t['img'] ?? null) }}"
                                                             alt="{{ $t['name'] ?? '' }}"
                                                             class="img-fluid rounded-circle testimonial-section-1__avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fw-semibold text-heading">
                                                            {{ $t['name'] ?? '' }} </p>
                                                        <span class="d-block fs-14">{{ $t['role'] ?? '' }}</span>
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
                                    @foreach ($a['testimonials']['slider2'] ?? [] as $t)
                                        <div class="swiper-slide">
                                            <div class="bg-light-subtle shadow-lg rounded-4 p-6 p-md-8 m-4">
                                                <p class="mb-6 text-heading">{{ $t['quote'] ?? '' }}</p>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ $media($t['img'] ?? null) }}"
                                                             alt="{{ $t['name'] ?? '' }}"
                                                             class="img-fluid rounded-circle testimonial-section-1__avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fw-semibold text-heading">
                                                            {{ $t['name'] ?? '' }} </p>
                                                        <span class="d-block fs-14">{{ $t['role'] ?? '' }}</span>
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
