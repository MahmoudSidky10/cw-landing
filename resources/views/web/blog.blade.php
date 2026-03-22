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
            @include('web.layout.footer-marketing')
        </div>
    </div>
    <!-- Scripts -->
    @include('web.layout.scripts')
</body>

</html>
