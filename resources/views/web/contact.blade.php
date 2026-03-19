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
            <!-- Contact Form -->
            <div class="section-space-top bg-body-tertiary">
                <div class="container">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-6 col-xl-5">
                            <h3>Connect with us</h3>
                            <p class="mb-0"> Have service-related questions or interested in other collaborations?
                                We're here to support your every steps </p>
                            <hr class="my-8" />
                            <ul class="list gap-6">
                                <li>
                                    <p class="mb-1 fs-18 fw-bold text-heading"> Learn about our services </p>
                                    <p class="mb-0">+1 302-803-5506</p>
                                </li>
                                <li>
                                    <p class="mb-1 fs-18 fw-bold text-heading"> Talk to our PR department </p>
                                    <p class="mb-0">support@example.com</p>
                                </li>
                                <li>
                                    <p class="mb-1 fs-18 fw-bold text-heading">Join example team</p>
                                    <p class="mb-0">info@example.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded-3 bg-body p-4 p-lg-8 shadow-lg">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <p class="mb-0 fw-semibold"> Fill out the form and we will contact you </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label fs-14 fw-medium text-heading"> First Name </label>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label fs-14 fw-medium text-heading"> Email Address </label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fs-14 fw-medium text-heading"> Subject </label>
                                        <input type="text" class="form-control" placeholder="Enter Your Subject">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fs-14 fw-medium text-heading"> Message </label>
                                        <textarea class="form-control" rows="3" placeholder="Please write details"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary fs-14"> Submit </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Form End -->
            <!-- Contact Details -->
            <div class="section-space-md-y bg-body-tertiary">
                <div class="section-space-sm-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mb-0">Build To Impress</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="bg-body rounded p-4 p-md-8 p-lg-4 p-xl-8">
                                <div class="d-inline-block mb-6">
                                    <iconify-icon icon="fluent-mdl2:network-tower" class="fs-48"></iconify-icon>
                                </div>
                                <h6>Press & Partnership Enquiries</h6>
                                <p class="mb-0"> Just add a trade‑in when you choose a new product. Once your
                                    eligible device has been received and verified, we'll credit the value </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="bg-body rounded p-4 p-md-8 p-lg-4 p-xl-8">
                                <div class="d-inline-block mb-6">
                                    <iconify-icon icon="mdi:truck-fast-outline" class="fs-48"></iconify-icon>
                                </div>
                                <h6>Fast & Quick Deliver Response</h6>
                                <p class="mb-0"> Just add a trade‑in when you choose a new product. Once your
                                    eligible device has been received and verified, we'll credit the value </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="bg-body rounded p-4 p-md-8 p-lg-4 p-xl-8">
                                <div class="d-inline-block mb-6">
                                    <iconify-icon icon="bi:phone-vibrate" class="fs-48"></iconify-icon>
                                </div>
                                <h6>Press & Partnership Enquiries</h6>
                                <p class="mb-0"> Just add a trade‑in when you choose a new product. Once your
                                    eligible device has been received and verified, we'll credit the value </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Details End -->
            <!-- Map Section -->
            <div class="section-space-bottom bg-body-tertiary">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="position-relative z-1 rounded-3 overflow-hidden">
                                <iframe class="map-view"
                                    src="https://api.maptiler.com/maps/0a688c97-5c0d-49a3-99a8-a7539d37b24c/?key=A1yO2gr63XPx3wPNZZAX#6.9/25.51973/89.62180"></iframe>
                                <div
                                    class="map-view__info d-inline-block rounded bg-body p-4 p-md-8 max-text-9 z-1 start-6 bottom-6 shadow-lg">
                                    <h6>Our global presence</h6>
                                    <p> Having 5 offices around the world helps us build flexible teams with ultimate
                                        expertise and provide top-quality services. </p>
                                    <a href="#" class="btn btn-sm btn-primary align-items-center">
                                        <span class="d-inline-block flex-grow-1"> More Of Us </span>
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
                                            <li><a href="#"
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
