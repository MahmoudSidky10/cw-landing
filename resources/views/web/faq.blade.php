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
                <div class="section-space-md-y">
                    <div class="container">
                        <div class="row g-4 justify-content-between">
                            <div class="col-md-6 col-xl-5">
                                <span
                                    class="badge bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle mb-2">
                                    <iconify-icon icon="uim:check-circle" class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                    Support
                                </span>
                                <h3>General FAQ</h3>
                                <p class="mb-0">Platform, architecture, and how CW360 fits alongside the tools you already run.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="accordion accordion-separate-body" id="accordion-faq-general">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-g1" aria-expanded="true">What is Cyberwatch360 in one sentence?</button>
                                        </h2>
                                        <div id="faq-g1" class="accordion-collapse collapse show" data-bs-parent="#accordion-faq-general">
                                            <div class="accordion-body fs-14">Cyberwatch360 (CW360) is an AI-augmented security operations platform that unifies alerts, ticketing, and SOC tasks so teams respond faster, reduce noise, and stay audit-ready.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-g2" aria-expanded="false">How does Zarqaa differ from traditional SOAR playbooks?</button>
                                        </h2>
                                        <div id="faq-g2" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-general">
                                            <div class="accordion-body fs-14">Zarqaa is agentic: it reasons across signals and tools rather than only executing fixed if-then scripts. Recommendations and actions can be traced in a reasoning log so leaders trust escalations and closures.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-g3" aria-expanded="false">Can we integrate with our existing SIEM, EDR, and ITSM?</button>
                                        </h2>
                                        <div id="faq-g3" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-general">
                                            <div class="accordion-body fs-14">Yes. CW360 is designed to sit on top of the tools you already use—ingesting from common security and cloud sources and syncing enriched tickets with platforms like ServiceNow and Jira, plus Slack and Microsoft Teams. Exact connectors depend on your environment; we map that during discovery.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-space-md-y">
                    <div class="container">
                        <div class="row g-4 justify-content-between">
                            <div class="col-md-6 col-xl-5">
                                <span
                                    class="badge bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle mb-2">
                                    <iconify-icon icon="uim:check-circle" class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                    Commercial
                                </span>
                                <h3>Billing FAQ</h3>
                                <p class="mb-0">Licensing, pilots, and how commercial terms are typically structured—final terms are agreed in your order form or contract.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="accordion accordion-separate-body" id="accordion-faq-billing">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-b1" aria-expanded="true">How is Cyberwatch360 usually licensed?</button>
                                        </h2>
                                        <div id="faq-b1" class="accordion-collapse collapse show" data-bs-parent="#accordion-faq-billing">
                                            <div class="accordion-body fs-14">Models vary by deployment (cloud, hybrid, or on-premises constraints), user or analyst seats, and optional MSSP multi-tenancy. Your account team proposes a structure aligned to asset count, log volume, or organizational units—depending on what you optimize for.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-b2" aria-expanded="false">Do you offer pilots or proofs of value?</button>
                                        </h2>
                                        <div id="faq-b2" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-billing">
                                            <div class="accordion-body fs-14">Yes, scoped pilots are common: limited sources, a defined success metric (e.g. triage time, false-positive rate, ticket quality), and a fixed duration. Professional services hours may be bundled or billed separately per statement of work.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-b3" aria-expanded="false">Are implementation and integration included?</button>
                                        </h2>
                                        <div id="faq-b3" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-billing">
                                            <div class="accordion-body fs-14">Some packages include a baseline onboarding; complex SIEM/ITSM field mapping, custom parsers, or multi-tenant MSSP rollout are typically scoped as professional services. Ask for a work breakdown with milestones and acceptance criteria.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-space-md-y">
                    <div class="container">
                        <div class="row g-4 justify-content-between">
                            <div class="col-md-6 col-xl-5">
                                <span
                                    class="badge bg-primary-emphasis hover:bg-primary-emphasis text-primary-subtle hover:text-primary-subtle mb-2">
                                    <iconify-icon icon="uim:check-circle" class="align-middle fs-20 flex-shrink-0"></iconify-icon>
                                    Policy
                                </span>
                                <h3>Refund &amp; cancellation FAQ</h3>
                                <p class="mb-0">High-level guidance only; your signed agreement and local law take precedence.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="accordion accordion-separate-body" id="accordion-faq-refund">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-r1" aria-expanded="true">Can we cancel a subscription?</button>
                                        </h2>
                                        <div id="faq-r1" class="accordion-collapse collapse show" data-bs-parent="#accordion-faq-refund">
                                            <div class="accordion-body fs-14">Subscriptions are governed by your contract term and notice period. Contact your account manager or finance contact for the process, final invoice, and data export or deletion steps.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-r2" aria-expanded="false">What is the refund policy for software vs. services?</button>
                                        </h2>
                                        <div id="faq-r2" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-refund">
                                            <div class="accordion-body fs-14">Subscription fees follow the contract. Professional services already delivered (workshops, integration days, training delivered) are generally non-refundable; unused prepaid blocks may be credited per policy in your order form.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-r3" aria-expanded="false">Who owns our data if we leave?</button>
                                        </h2>
                                        <div id="faq-r3" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-refund">
                                            <div class="accordion-body fs-14">You retain ownership of your security and operational data. Offboarding typically includes export windows, retention schedules, and certified deletion where applicable—details are defined in the data processing agreement and privacy policy.</div>
                                        </div>
                                    </div>
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
