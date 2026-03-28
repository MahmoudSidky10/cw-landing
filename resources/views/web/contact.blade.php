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
                                            <li class="breadcrumb-item active fs-14" aria-current="page"> Contact Us
                                            </li>
                                        </ol>
                                    </nav>
                                    <h3>Contact Us</h3>
                                    <p class="mb-0 max-text-12">Three Minds, One Mission: Innovation That Pushes
                                        Boundaries and Delivers Results.</p>
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
        <!-- Contact Form -->
        <div class="section-space-top bg-body-tertiary">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-6 col-xl-5">
                        <h3>Connect with us</h3>
                        <p class="mb-0"> Have service-related questions or interested in other collaborations?
                            We're here to support your every steps </p>
                        <hr class="my-8"/>
                        <ul class="list gap-6">
                            <li>
                                <p class="mb-1 fs-18 fw-bold text-heading"> Call Us </p>
                                <p class="mb-0">{{ $settings->phone }}</p>
                            </li>
                            <li>
                                <p class="mb-1 fs-18 fw-bold text-heading"> Email Us </p>
                                <p class="mb-0">{{ $settings->email }}</p>
                            </li>
                            <li>
                                <p class="mb-1 fs-18 fw-bold text-heading"> Office Address </p>
                                <p class="mb-0">{{ $settings->address }}<br>{{ $settings->address_2 }}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="rounded-3 bg-body p-4 p-lg-8 shadow-lg">
                            @if(session('success'))
                                <div class="alert alert-success mb-4">{{ session('success') }}</div>
                            @endif
                            <form method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-12">
                                        <p class="mb-0 fw-semibold"> Fill out the form and we will contact you </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label fs-14 fw-medium text-heading"> First Name </label>
                                        <input type="text" name="name"
                                               class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Name" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label fs-14 fw-medium text-heading"> Email Address </label>
                                        <input type="email" name="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fs-14 fw-medium text-heading"> Subject </label>
                                        <input type="text" name="subject" class="form-control"
                                               placeholder="Enter Your Subject" value="{{ old('subject') }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fs-14 fw-medium text-heading"> Message </label>
                                        <textarea name="message"
                                                  class="form-control @error('message') is-invalid @enderror" rows="3"
                                                  placeholder="Please write details">{{ old('message') }}</textarea>
                                        @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary fs-14"> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form End -->

        <!-- Map Section -->
        <div class="section-space-bottom bg-body-tertiary">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-10">
                        <div class="position-relative z-1 rounded-3 overflow-hidden">
                            <iframe class="map-view"
                                    src="https://maps.google.com/maps?q=1007%20N%20Orange%20St,%20Wilmington,%20DE%2019801,%20USA&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div
                                class="map-view__info d-inline-block rounded bg-body p-4 p-md-8 max-text-9 z-1 start-6 bottom-6 shadow-lg">
                                <h6>Our Office</h6>
                                <p> 1007 N Orange St, 5302<br>Wilmington, DE 19801 </p>
                                <a href="https://maps.google.com/maps?q=1007%20N%20Orange%20St,%20Wilmington,%20DE%2019801,%20USA"
                                   target="_blank" class="btn btn-sm btn-primary align-items-center">
                                    <span class="d-inline-block flex-grow-1"> Get Directions </span>
                                    <iconify-icon icon="guidance:left-arrow"
                                                  class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Section End -->
        @include('web.layout.footer-marketing')
    </div>
</div>
<!-- Scripts -->
@include('web.layout.scripts')
</body>

</html>
