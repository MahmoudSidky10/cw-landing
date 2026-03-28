<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

@include('web.layout.head')

<body>

@include('web.layout.nav')
<div class="preloader">
    <div class="preloader__content">
        <img src="{{ asset('assets/img/logo-light.png') }}" alt="Cyberwatch360" class="img-fluid preloader__img">
    </div>
</div>
<div id="smooth-wrapper">
    <div id="smooth-content">
        @include('web.layout.page-banner-light', [
            'bannerCrumb' => 'Privacy Policy',
            'bannerTitle' => 'Privacy Policy',
            'bannerLead' => 'How Cyberwatch360 handles personal and operational data when you use our websites, trials, and services.',
        ])

        <div class="section-space-y bg-body-tertiary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="section-space-md-bottom">
                            <h4>Overview</h4>
                            <p>Cyberwatch360 (“we”, “us”, or “our”) operates this website and related services (the
                                “Service”).</p>
                            <p>This policy describes how we collect, use, store, and disclose information when you
                                interact with our sites, demos, trials, or contracted offerings.</p>
                            <p class="mb-0">By using the Service you agree to this policy. Terms not defined here have
                                the meaning given in your master agreement or terms of use, if applicable.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Information we collect</h4>
                            <p>We may collect identifiers and contact details you submit (name, email, phone, company),
                                account and authentication data, technical data (IP address, device type, browser), and
                                content you send through forms or support channels.</p>
                            <p class="mb-0">For security products and trials we may process metadata about your
                                environment as described in your order form and data processing agreement—never beyond
                                what is needed to provide and improve the Service.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Use of information</h4>
                            <p>We use information to provide and secure the Service, respond to requests, operate trials
                                and contracts, analyze usage in aggregate, comply with law, and communicate service or
                                policy updates.</p>
                            <p class="mb-0">We do not sell your personal information. Marketing communications are sent
                                in line with applicable consent and unsubscribe rules.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Analytics &amp; statistics</h4>
                            <p class="mb-0">We may use analytics tools to understand traffic and feature usage. Where
                                third-party analytics are used, they are configured to minimize personal data and may
                                rely on cookies or similar technologies as described in our cookie notice.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Sharing &amp; subprocessors</h4>
                            <p class="mb-0">We share data with subprocessors (e.g. hosting, email delivery, support
                                tooling) under contracts that require appropriate safeguards. We may disclose
                                information if required by law or to protect rights, safety, and integrity of the
                                Service.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Retention</h4>
                            <p class="mb-0">We retain information as long as needed for the purposes above, including
                                legal, tax, and security obligations. Retention schedules may be specified in your
                                enterprise agreement.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Your rights</h4>
                            <p class="mb-0">Depending on your region you may have rights to access, correct, delete, or
                                restrict processing of your personal data, or to object to certain processing. Contact
                                us at the address on our contact page to exercise these rights.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Cookies</h4>
                            <p class="mb-0">We use cookies and similar technologies for session management, preferences,
                                security, and analytics. You can control cookies through your browser; disabling some
                                cookies may affect site functionality.</p>
                        </div>
                        <div class="section-space-md-bottom">
                            <h4>Changes</h4>
                            <p class="mb-0">We may update this policy from time to time. The “last updated” date at the
                                bottom will change when we do; material changes may be communicated by email or
                                in-product notice where appropriate.</p>
                        </div>
                        <p class="mb-0 fs-14 text-body-secondary">Last updated: {{ date('F j, Y') }}</p>
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
