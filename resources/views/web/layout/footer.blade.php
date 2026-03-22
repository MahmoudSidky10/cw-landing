            <!-- Footer -->
            <div class="section-space-lg-top section-space-sm-bottom">
                <div class="section-space-md-bottom">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-7 col-lg-4">
                                <div class="pe-xxl-10">
                                <a class="logo d-inline-flex mb-6" href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/logo-light.png') }}" alt="Cyberwatch360" class="logo__img logo__img--light">
                                    <img src="{{ asset('assets/img/logo-light.png') }}" alt="Cyberwatch360" class="logo__img logo__img--dark">
                                </a>
                                <p class="mb-8 text-light text-opacity-70 lh-lg">Cyberwatch360 unifies alerts, ticketing, and SOC work—augmented by Zarqaa AI—for teams that need speed, clarity, and audit-ready operations.</p>
                                <ul class="list list-row gap-3 flex-wrap align-items-center">
                                    <li>
                                        <button type="button" class="btn btn-icon btn-dark-emphasis rounded-circle">
                                            <iconify-icon icon="mdi:twitter"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-icon btn-dark-emphasis rounded-circle">
                                            <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-icon btn-dark-emphasis rounded-circle">
                                            <iconify-icon icon="akar-icons:linkedin-fill"></iconify-icon>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-icon btn-dark-emphasis rounded-circle">
                                            <iconify-icon icon="hugeicons:instagram"></iconify-icon>
                                        </button>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row g-4 justify-content-xl-start">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <h6 class="mb-6 text-light">Company</h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('about') }}" class="link d-inline-block text-light text-opacity-70 hover:text-opacity-100 fw-medium fs-14">About Us</a></li>

                                            <li><a href="{{ route('contact') }}" class="link d-inline-block text-light text-opacity-70 hover:text-opacity-100 fw-medium fs-14">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <h6 class="mb-6 text-light">Pages</h6>
                                        <ul class="list gap-2">
                                            <li><a href="{{ route('blog') }}" class="link d-inline-block text-light text-opacity-70 hover:text-opacity-100 fw-medium fs-14">Blog</a></li>
                                            <li><a href="{{ route('faq') }}" class="link d-inline-block text-light text-opacity-70 hover:text-opacity-100 fw-medium fs-14">FAQ</a></li>
                                            <li><a href="{{ route('privacy-policy') }}" class="link d-inline-block text-light text-opacity-70 hover:text-opacity-100 fw-medium fs-14">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center overflow-hidden">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <p class="mb-0 text-wing text-light text-opacity-70">&copy; {{ date('Y') }} Cyberwatch360. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
