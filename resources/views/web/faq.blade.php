<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" data-theme="home-3">

@include('web.layout.head')

<body class="bg-black">

@include('web.layout.nav')
<div class="preloader">
    <div class="preloader__content">
        <img src="{{ asset('assets/img/logo-light.png') }}" alt="Cyberwatch360" class="img-fluid preloader__img">
    </div>
</div>
<div id="smooth-wrapper">
    <div id="smooth-content">
        @include('web.layout.page-banner-light', [
            'bannerCrumb' => 'FAQ',
            'bannerTitle' => 'FAQ',
            'bannerLead' => 'Answers about Cyberwatch360, Zarqaa AI, integrations, and how we work with your SOC—from pilot to production.',
        ])

        <div class="section-space-md-y bg-body-tertiary">

            @if($faqs->isNotEmpty())
                @foreach($faqs as $category => $questions)
                    <div class="section-space-md-y">
                        <div class="container">
                            <div class="row g-4 justify-content-between">
                                <div class="col-md-6 col-xl-5">
                                    <span
                                        class="badge bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle mb-2">
                                        <iconify-icon icon="uim:check-circle"
                                                      class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                        {{ $category }}
                                    </span>
                                    <h3>{{ $category }}</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="accordion accordion-separate-body"
                                         id="accordion-{{ Str::slug($category) }}">
                                        @foreach($questions as $i => $faq)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button
                                                        class="accordion-button {{ $i > 0 ? 'collapsed' : '' }} fw-medium"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faq-{{ $faq->id }}"
                                                        aria-expanded="{{ $i === 0 ? 'true' : 'false' }}">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h2>
                                                <div id="faq-{{ $faq->id }}"
                                                     class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                                     data-bs-parent="#accordion-{{ Str::slug($category) }}">
                                                    <div class="accordion-body fs-14">{{ $faq->answer }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            @endif

        </div>

        @include('web.layout.footer-marketing')
    </div>
</div>
@include('web.layout.scripts')
</body>

</html>
