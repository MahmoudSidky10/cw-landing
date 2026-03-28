            <!-- Footer -->
            <footer class="position-relative z-1 overflow-hidden">
                <div class="section-space-lg-y">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-7 col-lg-4">
                                <div class="pe-xxl-10">
                                    <a class="logo d-inline-flex mb-6" href="{{ route('home') }}">
                                        <img src="{{ $siteLogoDark }}" alt="Cyberwatch360"
                                            class="logo__img logo__img--light">
                                        <img src="{{ $siteLogoLight }}" alt="Cyberwatch360"
                                            class="logo__img logo__img--dark">
                                    </a>
                                    <p class="mb-8">Cyberwatch360 unifies alerts, ticketing, and SOC work—augmented by Zarqaa AI—for teams that need speed, clarity, and audit-ready operations.</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row g-4 justify-content-xl-start">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <h6 class="mb-6">Company</h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('about') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">About Us</a></li>

                                            <li><a href="{{ route('contact') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <h6 class="mb-6">Pages</h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('blog') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">Blog</a></li>
                                            <li><a href="{{ route('faq') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">FAQ</a></li>
                                            <li><a href="{{ route('privacy-policy') }}" class="link d-inline-block text-body hover:text-primary-emphasis fw-medium fs-14">Privacy Policy</a></li>
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
                                    <li><span class="d-inline-block fs-14"> &copy; {{ date('Y') }} Cyberwatch360 </span></li>
                                    <li><a href="{{ route('privacy-policy') }}" class="link d-inline-block text-body hover:text-primary fs-14"> Privacy Policy </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list list-row flex-wrap justify-content-center justify-content-lg-end align-items-center gap-3">
                                    <li><a href="{{ route('contact') }}" class="badge px-4 bg-primary-emphasis text-primary-subtle rounded-pill"> Talk to us </a></li>
                                    @foreach(\App\Models\SocialMedia::all() as $social)
                                    <li>
                                        <a href="{{ $social->url }}" target="_blank" class="btn btn-sm btn-icon btn-light-subtle rounded-circle shadow fs-18">
                                            <img src="{{ asset('storage/' . $social->icon) }}" alt="social icon" style="width:18px;height:18px;object-fit:contain;">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/img/shapes/footer-2-grid.png') }}" alt=""
                    class="img-fluid position-absolute start-50 bottom-0 translate-middle-x z-n1 pointer-none">
                <svg width="860" height="579" viewBox="0 0 860 579" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="position-absolute z-n1 start-0 top-0 pointer-none">
                    <g filter="url(#filter0_f_footer_marketing_5037)">
                        <path
                            d="M169.847 11.8444C151.014 -24.0114 128.472 -103.643 82.4746 -110.489C43.9821 -116.218 33.7393 -2.76055 87.0576 100.521C215.664 305.212 328.779 330.576 432.07 345.949C535.361 361.322 587.664 315.572 592.476 283.235C597.289 250.899 573.027 200.25 405.023 175.245C237.02 150.241 188.679 47.7002 169.847 11.8444Z"
                            fill="#00C4FD" fill-opacity="0.2" />
                    </g>
                    <defs>
                        <filter id="filter0_f_footer_marketing_5037" x="-216.362" y="-377.364" width="1076.05" height="993.048"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_footer_marketing_5037" />
                        </filter>
                    </defs>
                </svg>
                <svg width="691" height="579" viewBox="0 0 691 579" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="position-absolute z-n1 end-0 top-0 pointer-none">
                    <g filter="url(#filter0_f_footer_marketing_5038)">
                        <path
                            d="M724.978 62.1383C748.883 29.4456 782.903 -46 829.407 -46C868.323 -46 861.752 67.7293 793.81 162.036C636.472 345.564 520.855 354 416.426 354C311.998 354 267 301.048 267 268.356C267 235.663 298.454 189.138 468.309 189.138C638.162 189.138 701.072 94.8311 724.978 62.1383Z"
                            fill="#6328FF" fill-opacity="0.2" />
                    </g>
                    <defs>
                        <filter id="filter0_f_footer_marketing_5038" x="0.333405" y="-312.667" width="1119.59" height="933.333"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="133.333" result="effect1_foregroundBlur_footer_marketing_5038" />
                        </filter>
                    </defs>
                </svg>
            </footer>
            <!-- Footer End -->
