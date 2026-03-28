@php
    $settings = $settings ?? \App\Models\SiteSetting::instance();
    $f2Cards = $settings->mergedHomeFeatures2Cards();
    $f2Delays = [0.025, 0.05, 0.075, 0.1, 0.125, 0.175, 0.2, 0.225];
    $img = fn (?string $p) => \App\Models\SiteSetting::featureImageUrl($p);
    $href = fn (?string $r) => \App\Models\SiteSetting::featureTitleHref($r);
@endphp
            <!-- Feature Section -->
            <div class="section-space-md-y">
                <div class="section-space-sm-bottom">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-9 col-xl-8">
                                <h2 class="mb-0 text-center text-light overflow-hidden gsap-text-animation" data-scroll-trigger="true" data-split-type="lines"> {{ $settings->resolvedHomeFeatures2TitleLine1() }} <span class="text-clip text-clip--primary">{{ $settings->resolvedHomeFeatures2TitleHighlight() }}</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="text-center hero-5__hero-img gsap-fade-in" data-scroll-trigger="true" data-y="25">
                                <img src="{{ $img($settings->resolvedHomeFeatures2HeroImage()) }}" alt="{{ $settings->resolvedHomeFeatures2HeroAlt() }}" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-space-md-top">
                    <div class="container">
                        <div class="row">
                            @foreach ($f2Cards as $idx => $card)
                                <div class="col-sm-6 col-lg-4 col-xl-3 p-6 feature-separate-border group">
                                    <div class="gsap-fade-in" data-scroll-trigger="true" data-delay="{{ $f2Delays[$idx] ?? 0.05 }}">
                                        <div class="w-12 h-12 d-grid place-content-center rounded bg-dark text-light group-hover:bg-primary group-hover:text-dark transition">
                                            <iconify-icon icon="{{ $card['icon'] ?? 'mdi:information' }}" class="fs-24"></iconify-icon>
                                        </div>
                                        <h6 class="mt-6 mb-3">
                                            <a href="{{ $href($card['title_link'] ?? null) }}" class="link d-inline-block fs-20 text-light group-hover:text-primary"> {{ $card['title'] ?? '' }} </a>
                                        </h6>
                                        <p class="mb-0 text-light text-opacity-70"> {{ $card['body'] ?? '' }} </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature Section End -->
