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
                                                    <iconify-icon icon="bi:chevron-right" class="align-middle fs-14"></iconify-icon>
                                                </li>
                                                <li class="breadcrumb-item active fs-14" aria-current="page"> Blog </li>
                                            </ol>
                                        </nav>
                                        <h3>Blog With Sidebar</h3>
                                        <p class="mb-0 max-text-12">Crafting Innovation, One Line of Code at a Time, for a Future of Seamless Digital Interactions.</p>
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
            <!-- Blog Section -->
            <div class="section-space-y bg-body-tertiary">
                <div class="container">
                    <div class="row g-4">
                        <!-- Posts -->
                        <div class="col-md-7 col-xl-8">
                            <ul class="list gap-15">
                                @foreach([
                                    [
                                        'img'     => 'blog-post-img-1.png',
                                        'tag'     => 'SEO Optimization',
                                        'date'    => '14 Sep, 2024',
                                        'title'   => 'The Future of AI: What to Expect in the Next Decade',
                                        'excerpt' => 'Explore upcoming trends in AI technology and how they will impact various industries and our daily lives. including credit cards, Internet banking, and e-wallets.',
                                    ],
                                    [
                                        'img'     => 'blog-post-img-2.png',
                                        'tag'     => 'SEO Optimization',
                                        'date'    => '14 Sep, 2024',
                                        'title'   => 'Understanding Machine Learning: A Beginner\'s Guide',
                                        'excerpt' => 'A comprehensive introduction to machine learning, covering its basics, applications, and significance in the AI landscape.',
                                    ],
                                    [
                                        'img'     => 'blog-post-img-3.png',
                                        'tag'     => 'SEO Optimization',
                                        'date'    => '14 Sep, 2024',
                                        'title'   => 'The Impact of AI on Job Markets: Threat or Opportunity',
                                        'excerpt' => 'Examine how AI technologies can help tackle climate issues, from optimizing energy usage to modeling environmental impacts.',
                                    ],
                                ] as $post)
                                <li>
                                    <div class="rounded p-4 p-xl-6 p-xxl-8 bg-body">
                                        <a href="#" class="link d-block">
                                            <img src="{{ asset('assets/img/' . $post['img']) }}" alt="image" class="img-fluid w-100 rounded">
                                        </a>
                                        <div class="pt-6">
                                            <ul class="list list-row flex-wrap gap-4 gap-xl-6 align-items-center mb-4">
                                                <li>
                                                    <a href="{{ route('blog') }}" class="badge bg-light-subtle text-light-emphasis shadow-lg">
                                                        <span class="d-inline-block w-2 h-2 rounded-circle bg-secondary-emphasis flex-shrink-0"></span> {{ $post['tag'] }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('blog') }}" class="badge bg-light-subtle text-light-emphasis shadow-lg">
                                                        <span class="d-inline-block w-2 h-2 rounded-circle bg-secondary-emphasis flex-shrink-0"></span> {{ $post['date'] }}
                                                    </a>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="#" class="link d-inline-block text-heading hover:text-primary"> {{ $post['title'] }} </a>
                                            </h5>
                                            <p class="mb-6"> {{ $post['excerpt'] }} </p>
                                            <a href="#" class="btn btn-primary-subtle fw-medium align-items-center fs-14">
                                                <span class="d-inline-block flex-grow-1"> Explore More </span>
                                                <iconify-icon icon="solar:arrow-right-broken" class="align-middle flex-shrink-0"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Sidebar -->
                        <div class="col-md-5 col-xl-4">
                            <div class="bg-body rounded p-4 p-xl-6 p-xxl-8">
                                <ul class="list gap-10">
                                    <!-- Search -->
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2"> Search Post </span>
                                        </span>
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-body-tertiary" placeholder="Search..">
                                            <span class="input-group-text d-grid place-content-center rounded-end-1 bg-primary text-light border border-primary">
                                                <iconify-icon icon="lucide:search"></iconify-icon>
                                            </span>
                                        </div>
                                    </li>
                                    <!-- Recent Posts -->
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2"> Recent Post </span>
                                        </span>
                                        <ul class="list gap-8">
                                            @foreach([
                                                ['img' => 'blog-post-img-4.png', 'title' => 'Perfect quality reasonable price for your family'],
                                                ['img' => 'blog-post-img-5.png', 'title' => 'Why Is Supply Chain Visibility So Important?'],
                                                ['img' => 'blog-post-img-6.png', 'title' => 'The Advantages of a Digital Supply Strategy'],
                                            ] as $recent)
                                            <li>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="d-grid place-content-center w-18 h-18 flex-shrink-0 rounded-circle">
                                                        <img src="{{ asset('assets/img/' . $recent['img']) }}" alt="image" class="w-100 h-100 object-fit-cover">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="d-block fs-12 fw-medium mb-1"> May 24, 2022 </span>
                                                        <a href="#" class="link line-clamp line-clamp--2 fw-bold text-heading hover:text-primary"> {{ $recent['title'] }} </a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- Categories -->
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2"> Categories </span>
                                        </span>
                                        <ul class="list gap-4">
                                            @foreach([
                                                ['name' => 'Application',      'count' => '08'],
                                                ['name' => 'Cyber Security',   'count' => '04'],
                                                ['name' => 'Hosting Business', 'count' => '08'],
                                                ['name' => 'Digital Agency',   'count' => '14'],
                                                ['name' => 'Technology',       'count' => '12'],
                                                ['name' => 'Web Design',       'count' => '03'],
                                            ] as $cat)
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between gap-4 group">
                                                    <a href="{{ route('blog') }}" class="link d-inline-block fw-medium text-body group-hover:text-primary"> {{ $cat['name'] }} </a>
                                                    <span class="d-grid place-content-center w-8 h-8 rounded-circle flex-shrink-0 bg-body-tertiary text-body fs-12 fw-medium transition group-hover:bg-primary group-hover:text-light"> {{ $cat['count'] }} </span>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- Tags -->
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2"> Tags </span>
                                        </span>
                                        <ul class="list list-row flex-wrap gap-3 align-items-center">
                                            @foreach(['Domain', 'Hosting', 'Cloud VPS', 'Shared Hosting', 'WordPress', 'food', 'bd food', 'Technology', 'vegetable'] as $tag)
                                            <li>
                                                <a href="{{ route('blog') }}" class="btn btn-sm bg-body-tertiary hover:bg-primary hover:text-light"> {{ $tag }} </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- Archive -->
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2"> Archive </span>
                                        </span>
                                        <ul class="list gap-4">
                                            @foreach([
                                                ['name' => 'February', 'count' => '08'],
                                                ['name' => 'March',    'count' => '04'],
                                                ['name' => 'April',    'count' => '08'],
                                                ['name' => 'May',      'count' => '14'],
                                                ['name' => 'Jun',      'count' => '12'],
                                            ] as $archive)
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between gap-4 group">
                                                    <a href="{{ route('blog') }}" class="link d-inline-block fw-medium text-body group-hover:text-primary"> {{ $archive['name'] }} </a>
                                                    <span class="d-grid place-content-center w-8 h-8 rounded-circle flex-shrink-0 bg-body-tertiary text-body fs-12 fw-medium transition group-hover:bg-primary group-hover:text-light"> {{ $archive['count'] }} </span>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->
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
                                    <p class="mb-8"> Giving modern marketing teams superpowers with short links that stand </p>
                                    <div class="d-flex align-items-center flex-wrap gap-3 mb-6">
                                        <div class="d-flex align-items-center gap-2 py-3 px-2 rounded bg-body shadow">
                                            <img src="{{ asset('assets/img/certificate-img-1.png') }}" alt="image" class="img-fluid flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <ul class="list list-row gap-1 align-items-center lh-1">
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                </ul>
                                                <p class="mb-0 fs-14 fw-medium">Capterra admit</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 py-3 px-2 rounded bg-body shadow">
                                            <img src="{{ asset('assets/img/certificate-img-2.png') }}" alt="image" class="img-fluid flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <ul class="list list-row gap-1 align-items-center lh-1">
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                    <li><iconify-icon icon="mingcute:star-fill" class="fs-14 text-warning"></iconify-icon></li>
                                                </ul>
                                                <p class="mb-0 fs-14 fw-medium">Honored by G2</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center gap-4 py-2 px-4 bg-body rounded shadow">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/img/avatar-6.png') }}" alt="image" class="img-fluid flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <span class="d-block fw-medium fs-14"> Get <span class="text-primary">35% off</span> for the whole ✨ year </span>
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
                                            <li><a href="{{ route('home') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> AI Technology </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> AI Chat Support </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> AI Code Generator </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> AI Image Generator </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> AI Developer Ast. </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> AI Video Generator </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xxl-3">
                                        <h6 class="mb-6">Company</h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('about') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> About Us </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Career Opportunity </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Case Study </a></li>
                                            <li><a href="{{ route('contact') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Contact Us </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Portfolio </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Pricing </a></li>
                                            <li><a href="{{ route('service') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Service </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xxl-2">
                                        <h6 class="mb-6">Pages</h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('blog') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Blog </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Modern Blog </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> FAQ </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Sign In </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Sign Up </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Event </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Privacy Policy </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xxl-3">
                                        <h6 class="mb-6">Elements</h6>
                                        <ul class="list gap-2">
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> About </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Blog </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Call to Action </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Testimonial </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Info List </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Feature </a></li>
                                            <li><a href="#" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14"> Hero </a></li>
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
                                <ul class="list list-row list-dot list-dot--md list-dot--secondary-emphasis flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                    <li><span class="d-inline-block fs-14"> &copy; 2025 NextAi </span></li>
                                    <li><a href="#" class="link d-inline-block text-body hover:text-primary fs-14"> Terms of Use </a></li>
                                    <li><a href="#" class="link d-inline-block text-body hover:text-primary fs-14"> Security </a></li>
                                    <li><a href="#" class="link d-inline-block text-body hover:text-primary fs-14"> Privacy Policy </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list list-row flex-wrap justify-content-center justify-content-lg-end align-items-center gap-3">
                                    <li><a href="#" class="badge px-4 bg-primary-emphasis text-primary-subtle rounded-pill"> Build with Us AI </a></li>
                                    <li>
                                        <button type="button" class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <iconify-icon icon="si:twitter-duotone"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
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
