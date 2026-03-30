<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" data-theme="home-3">

@include('web.layout.head')

<body class="bg-black">
<style>
    .privacy-policy-content h1,
    .privacy-policy-content h2,
    .privacy-policy-content h3,
    .privacy-policy-content h4,
    .privacy-policy-content h5,
    .privacy-policy-content h6 {
        margin-top: clamp(2rem, 3.25vw + 1rem, 3.75rem);
        margin-bottom: 1rem;
    }

    .privacy-policy-content h1:first-child,
    .privacy-policy-content h2:first-child,
    .privacy-policy-content h3:first-child,
    .privacy-policy-content h4:first-child,
    .privacy-policy-content h5:first-child,
    .privacy-policy-content h6:first-child {
        margin-top: 0;
    }

    .privacy-policy-content p {
        margin-bottom: 1rem;
    }

    .privacy-policy-content p:last-child {
        margin-bottom: 0;
    }

    .privacy-policy-content ul,
    .privacy-policy-content ol {
        padding-left: 1.5rem;
        margin-bottom: 1rem;
    }
</style>

@include('web.layout.nav')
<div class="preloader">
    <div class="preloader__content">
        <img src="{{ $siteLogoLight }}" alt="Cyberwatch360" class="img-fluid preloader__img">
    </div>
</div>
<div id="smooth-wrapper">
    <div id="smooth-content">
        @include('web.layout.page-banner-light', [
            'bannerCrumb' => 'Privacy Policy',
            'bannerTitle' => 'Privacy Policy',
            'bannerLead' => 'How Cyberwatch360 handles personal and operational data when you use our websites, trials, and services.',
        ])
        <div class="container">
            <div class=”section-space-y bg-body-tertiary”>
                <div class=”container”>
                    <div class=”row justify-content-center”>
                        <div class=”col-md-10 col-lg-9 col-xl-8”>
                            <div class="privacy-policy-content pt-20 pb-20">
                                {!! $privacyPolicy !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('web.layout.footer-marketing')
    </div>
</div>
@include('web.layout.scripts')
</body>

</html>
