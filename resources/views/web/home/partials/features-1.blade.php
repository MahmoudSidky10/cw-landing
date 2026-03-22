            <!-- Feature Section -->
            <div class="section-space-md-y">
                <div class="section-space-sm-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 col-xl-7">
                                <h2 class="mb-0 text-light text-center text-md-start overflow-hidden gsap-text-animation" data-scroll-trigger="true" data-split-type="lines"> Manage Security Operations From <span class="text-clip--primary">Centralized Console</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 col-xl-7 gsap-fade-in" data-scroll-trigger="true" data-y="25" data-delay="0.1">
                            <div class="gradient-border gradient-border--surface-dark rounded-4 p-4 p-md-8 position-relative z-1 h-100 overflow-hidden">
                                <div class="position-relative mb-6">
                                    <button type="button" class="btn-play rounded-circle position-absolute z-1 transition flex-shrink-0 pointer-none end-2 bottom-2">
                                        <span class="btn btn-icon btn-lg btn-primary rounded-circle text-dark">
                                            <iconify-icon icon="mingcute:ai-fill"></iconify-icon>
                                        </span>
                                    </button>
                                    <img src="{{ asset('assets/img/cw/cw-threat-monitor.jpg') }}" alt="Security monitoring and alert correlation" class="img-fluid flex-grow-1 rounded-3">
                                </div>
                                <div class="position-relative z-1">
                                    <h6 class="line-clamp line-clamp--1">
                                        <a href="{{ route('about') }}" class="link text-light hover:text-primary"> Unified alert operations </a>
                                    </h6>
                                    <p class="mb-0 text-light max-text-9"> Ingest SIEM, EDR/XDR, cloud, and network signals into one console—with parsing, normalization, deduplication, and AI-assisted correlation to cut alert noise. </p>
                                </div>
                                <svg width="760" height="503" viewBox="0 0 760 503" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-absolute start-50 bottom-0 translate-middle-x pointer-none">
                                    <g filter="url(#filter0_f_10139_1212)">
                                        <ellipse cx="377.847" cy="489.058" rx="350.847" ry="211.71" fill="#0166ba" fill-opacity="0.6" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_10139_1212" x="-250.35" y="-0.00161743" width="1256.39" height="978.12" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="138.675" result="effect1_foregroundBlur_10139_1212" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 gsap-fade-in" data-scroll-trigger="true" data-y="25" data-delay="0.2">
                            <div class="gradient-border gradient-border--surface-dark rounded-4 h-100 p-4 p-md-8 position-relative z-1">
                                <div class="mb-6">
                                    <img src="{{ asset('assets/img/cw/cw-analyst-work.jpg') }}" alt="SOC analyst with security workflows" class="img-fluid flex-grow-1 rounded-3">
                                </div>
                                <h6 class="line-clamp line-clamp--1">
                                    <a href="{{ route('about') }}" class="link text-light hover:text-primary"> Zarqaa: agentic AI </a>
                                </h6>
                                <p class="mb-0 text-light max-text-9"> Go beyond rigid playbooks—Zarqaa reasons across signals and tools like a fast L1 analyst, with recommendations you can trace in a reasoning log. </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-fade-in" data-scroll-trigger="true" data-y="25" data-delay="0.3">
                            <div class="gradient-border gradient-border--surface-dark rounded-4 h-100 position-relative z-1 overflow-hidden blend-y-end">
                                <div class="p-4 p-md-8 position-relative z-1">
                                    <h6 class="line-clamp line-clamp--1">
                                        <a href="{{ route('about') }}" class="link text-light hover:text-primary"> Your security stack </a>
                                    </h6>
                                    <p class="mb-0 text-light max-text-9"> Connect the products your team already runs—APIs, webhooks, and integrations—without ripping out the toolchain that powers your SOC. </p>
                                </div>
                                @include('web.home.partials.security-stack-marquee')
                                <svg width="424" height="421" viewBox="0 0 424 421" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-absolute start-0 top-0 pointer-none">
                                    <g filter="url(#filter0_f_10395_1229)">
                                        <path d="M51.4997 -79L480.5 385L288.5 424.5L-99.0007 37.7188L51.4997 -79Z" fill="url(#paint0_radial_10395_1229)" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_10395_1229" x="-129.001" y="-109" width="639.501" height="563.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="15" result="effect1_foregroundBlur_10395_1229" />
                                        </filter>
                                        <radialGradient id="paint0_radial_10395_1229" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-4.49997 13) rotate(43.4003) scale(658.573 139.496)">
                                            <stop stop-color="#0166ba" offset="0" />
                                            <stop stop-color="#0166ba" stop-opacity="0.6" offset="0" />
                                            <stop offset="0.986083" stop-color="#05050B" stop-opacity="0" />
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-fade-in" data-scroll-trigger="true" data-y="25" data-delay="0.4">
                            <div class="gradient-border gradient-border--surface-dark rounded-4 h-100 overflow-hidden p-4 p-md-8">
                                <div class="mb-6">
                                    <img src="{{ asset('assets/img/cw/cw-team-soc.jpg') }}" alt="Security operations and collaboration" class="img-fluid rounded-3">
                                </div>
                                <h6 class="line-clamp line-clamp--1">
                                    <a href="{{ route('about') }}" class="link text-light hover:text-primary"> Tickets &amp; tasks </a>
                                </h6>
                                <p class="mb-0 text-light max-text-9"> Enriched work items for ITSM platforms—IOCs, risk scores, MITRE context, assignments, SLAs, and notifications across email, Slack, and Microsoft Teams. </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-fade-in" data-scroll-trigger="true" data-y="25" data-delay="0.5">
                            <div class="gradient-border gradient-border--surface-dark rounded-4 h-100 overflow-hidden p-4 p-md-8">
                                <div class="mb-6">
                                    <img src="{{ asset('assets/img/cw/cw-network-abstract.jpg') }}" alt="Global network and compliance-ready operations" class="img-fluid rounded-3">
                                </div>
                                <h6 class="line-clamp line-clamp--1">
                                    <a href="{{ route('about') }}" class="link text-light hover:text-primary"> Compliance-ready ops </a>
                                </h6>
                                <p class="mb-0 text-light max-text-9"> Centralized configuration for categories, priorities, workflows, and roles—so the same model flows from triage through execution with audit-friendly logging. </p>
                            </div>
                        </div>
                        <div class="col-12 gsap-fade-in" data-scroll-trigger="true" data-y="25" data-delay="0.6">
                            <div class="gradient-border gradient-border--surface-dark p-4 p-md-6 p-lg-12 p-xxl-18 rounded-4 h-100 position-relative z-1 overflow-hidden">
                                <div class="position-relative z-1 row g-4 align-items-center">
                                    <div class="col-md-6">
                                        <h4 class="mb-8 text-light"> Cyberwatch360 helps SOCs replace fragmented tools and alert floods with one operational layer. </h4>
                                        <a href="{{ route('about') }}" class="btn btn-primary text-dark fw-semibold"> How it works </a>
                                        <div class="d-flex align-items-center flex-wrap row-gap-4 column-gap-6 mt-15">
                                            <div class="gradient-border gradient-border--surface-dark rounded-4 p-4 p-sm-6 max-text-5 poisition-relative overflow-hidden">
                                                <div class="position-relative z-1">
                                                    <h4 class="mb-1 text-light">85%</h4>
                                                    <p class="mb-0 text-light"> SIEM Replacement Ratio </p>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="97" height="99" viewBox="0 0 97 99" fill="none" class="position-absolute start-0 top-0 pointer-none">
                                                    <g filter="url(#filter0_f_10395_2005)">
                                                        <circle cx="13.5" cy="15.5" r="23.5" fill="#0166ba" />
                                                    </g>
                                                    <defs>
                                                        <filter id="filter0_f_10395_2005" x="-70" y="-68" width="167" height="167" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                            <feGaussianBlur stdDeviation="30" result="effect1_foregroundBlur_10395_2005" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="gradient-border gradient-border--surface-dark rounded-4 p-4 p-sm-6 max-text-5 poisition-relative overflow-hidden">
                                                <div class="position-relative z-1">
                                                    <h4 class="mb-1 text-light">95%</h4>
                                                    <p class="mb-0 text-light"> Automation Coverage </p>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="97" height="99" viewBox="0 0 97 99" fill="none" class="position-absolute start-0 top-0 pointer-none">
                                                    <g filter="url(#filter0_f_10395_2000)">
                                                        <circle cx="13.5" cy="15.5" r="23.5" fill="#0166ba" />
                                                    </g>
                                                    <defs>
                                                        <filter id="filter0_f_10395_2000" x="-70" y="-68" width="167" height="167" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                            <feGaussianBlur stdDeviation="30" result="effect1_foregroundBlur_10395_2000" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list timeline-2">
                                            <li class="d-flex align-items-start gap-8 pb-12">
                                                <div class="d-grid place-content-center w-12 h-12 rounded-circle gradient-border gradient-border--surface-dark shadow-lg fw-bold text-light flex-shrink-0"> 01 </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="text-light">Problem</h6>
                                                    <p class="mb-0 text-light"> Modern SOCs drown in disconnected SIEM, EDR, and ITSM screens—critical incidents get missed, triage burns out analysts, and compliance expectations keep rising. </p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start gap-8 pb-12">
                                                <div class="d-grid place-content-center w-12 h-12 rounded-circle gradient-border gradient-border--surface-primary text-dark shadow-lg fw-bold text-light flex-shrink-0"> 02 </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="text-light">Solution</h6>
                                                    <p class="mb-0 text-light"> Cyberwatch360 unifies ingestion, correlation, ticketing, and tasks—while Zarqaa prioritizes real threats and explains its recommendations. </p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start gap-8 pb-12">
                                                <div class="d-grid place-content-center w-12 h-12 rounded-circle gradient-border gradient-border--surface-dark shadow-lg fw-bold text-light flex-shrink-0"> 03 </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="text-light">Who it is for</h6>
                                                    <p class="mb-0 text-light"> MSSPs needing multi-tenant efficiency, regulated enterprises (including SAMA-aligned programs), and lean teams that need 24/7 coverage without a massive SOC bench. </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <svg width="856" height="636" viewBox="0 0 856 636" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-absolute start-0 top-0 pointer-none">
                                    <g filter="url(#filter0_f_10395_1234)">
                                        <path d="M127.5 -76.5L825.5 464L514 612L-99.0001 37.7187L127.5 -76.5Z" fill="url(#paint0_radial_10395_1234)" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_10395_1234" x="-129" y="-106.5" width="984.5" height="748.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="15" result="effect1_foregroundBlur_10395_1234" />
                                        </filter>
                                        <radialGradient id="paint0_radial_10395_1234" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(6.99999 21) rotate(35.3968) scale(921.905 204.254)">
                                            <stop stop-color="#0166ba" offset="0" />
                                            <stop stop-color="#0166ba" stop-opacity="0.6" offset="0" />
                                            <stop offset="0.986083" stop-color="#05050B" stop-opacity="0" />
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature Section End -->
