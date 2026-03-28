<?php

namespace App\Support;

/** Default copy & asset paths for the public About page (editable in admin). */
class AboutPageDefaults
{
    /** @return array<string, mixed> */
    public static function content(): array
    {
        return [
            'mission' => [
                'badge'     => 'About Us',
                'title'     => 'Our mission',
                'body'      => 'We enhance cybersecurity operations through a smart, unified platform that brings together alerts, ticketing, and Security Operations Center (SOC) work in one place. Using advanced AI and machine learning, we help organizations automate repetitive work, reduce response times, and shrink the effort required to manage incidents—so analysts spend less time on triage and more time stopping real attacks.',
                'image'     => 'assets/img/cw/cw-about-hero.jpg',
                'image_alt' => 'Cyberwatch360 team members collaborating in a modern office',
            ],
            'why_different' => [
                'badge'        => 'About Us',
                'title'        => 'Why Cyberwatch360 is different',
                'mobile_image' => 'assets/img/cw/cw-about-mobile.jpg',
                'mobile_alt'   => 'Cyberwatch360 security operations',
                'img_a'        => 'assets/img/about-2-img-a.png',
                'img_a_alt'    => 'Certified capability highlights',
                'img_b'        => 'assets/img/about-2-img-b.png',
                'img_b_alt'    => 'Security professional reviewing data on a tablet',
                'items'        => [
                    [
                        'icon' => 'solar:shield-warning-bold-duotone',
                        'title' => 'Unified alert operations',
                        'body'  => 'Aggregate SIEM, EDR/XDR, firewalls, cloud sources (e.g. AWS GuardDuty, Azure Sentinel), and IDS/IPS into one console—with parsing, normalization, deduplication, and AI-assisted correlation to reduce noise.',
                    ],
                    [
                        'icon' => 'solar:clipboard-list-bold-duotone',
                        'title' => 'Ticket & task lifecycle',
                        'body'  => 'Enriched tickets for platforms like ServiceNow and Jira—IOCs, risk scores, MITRE TTP context, assignments by skill and workload—plus structured tasks, Kanban views, SLAs, and notifications across email, Slack, and Microsoft Teams.',
                    ],
                    [
                        'icon' => 'solar:settings-bold-duotone',
                        'title' => 'Service management backbone',
                        'body'  => 'Centralized configuration for categories, priorities, statuses, processes, policies, services, and roles—so the same operational model flows from alert triage through task execution and audit-ready logging.',
                    ],
                    [
                        'icon' => 'mingcute:ai-fill',
                        'title' => 'Zarqaa AI: agentic, not just playbooks',
                        'body'  => 'Unlike fixed SOAR scripts (if A then B), agentic AI reasons across signals—e.g. correlating a login with Jira and Slack—to decide next steps. The Zarqaa assistant acts as a virtual L1 analyst: recommendations, routine analysis, and 24/7 coverage without burning out your team.',
                    ],
                ],
            ],
            'story' => [
                'badge'       => 'Timeline',
                'title'       => 'Our story',
                'intro'       => 'Cyberwatch360 exists because modern SOCs drown in disconnected tools and alert noise. We combine a unified operations layer with AI that prioritizes real incidents, explains its actions, and scales from lean MSSPs to large regulated enterprises—especially where digital transformation and compliance (e.g. SAMA, national cyber frameworks) raise the bar.',
                'side_image'  => 'assets/img/timeline-img.png',
                'side_alt'    => 'Cyberwatch360 dashboard showing alerts, MTTA, and status charts',
                'timeline'    => [
                    [
                        'left'        => 'Unify',
                        'right_title' => 'One console for the SOC',
                        'right_body'  => 'Bring alerts, tickets, and tasks together instead of juggling siloed SIEM, EDR, and ITSM screens—so critical incidents are less likely to be missed or mishandled.',
                    ],
                    [
                        'left'        => 'Automate',
                        'right_title' => 'From alert to structured response',
                        'right_body'  => 'Ingest via REST, webhooks, syslog, or email; normalize fields; deduplicate and correlate; auto-generate enriched tickets with IOCs, risk scores, and MITRE mappings.',
                    ],
                    [
                        'left'        => 'Zarqaa',
                        'right_title' => 'Agentic AI with proof',
                        'right_body'  => 'Zarqaa reasons across tools and context like a fast, efficient analyst—not a rigid playbook. Every action can be traced in a reasoning log so you trust why an alert was closed as false positive or escalated.',
                    ],
                    [
                        'left'        => 'Scale',
                        'right_title' => 'MENA & beyond',
                        'right_body'  => 'Purpose-built for organizations facing alert overload, fragmented workflows, and talent gaps—from MSSPs needing multi-tenant efficiency to SMEs that need a security copilot without a 24/7 SOC.',
                    ],
                ],
                'highlights' => [
                    ['value' => '100%', 'label' => 'Alert coverage goal—no alert left uninvestigated', 'icon' => 'fluent-emoji:handshake'],
                    ['value' => '24/7', 'label' => 'AI assistant vigilance as a virtual L1 analyst', 'icon' => 'fluent-emoji:trophy'],
                    ['value' => '~70%', 'label' => 'Industry studies cite triage consuming most analyst time—we target that waste', 'icon' => 'emojione-v1:smiling-face-with-halo'],
                ],
            ],
            'who_we_build' => [
                'badge' => 'Audience',
                'title' => 'Who we build for',
                'cards' => [
                    [
                        'image'     => 'assets/img/audience/audience-ciso.jpg',
                        'image_alt' => 'Executive leader representing a CISO economic buyer',
                        'heading'   => 'Economic buyer: CISO',
                        'body'      => 'Governance, compliance, cost control, and measurable SOC performance.',
                    ],
                    [
                        'image'     => 'assets/img/audience/audience-soc-lead.jpg',
                        'image_alt' => 'Professional in business attire representing a SOC manager or team lead',
                        'heading'   => 'Daily user: SOC lead',
                        'body'      => 'High alert volume, SLA pressure, and need for prioritization without burning out analysts.',
                    ],
                    [
                        'image'     => 'assets/img/audience/audience-mssp.jpg',
                        'image_alt' => 'Collaborating technology team representing MSSP delivery',
                        'heading'   => 'MSSP & multi-tenant',
                        'body'      => 'Lean teams serving many clients need segregation, centralized visibility, and fast deployment.',
                    ],
                    [
                        'image'     => 'assets/img/audience/audience-sme.jpg',
                        'image_alt' => 'Small team discussion representing an SME security or IT group',
                        'heading'   => 'SME security teams',
                        'body'      => 'Small groups covering multiple roles need a copilot to multiply impact—especially with a SIEM but no full SOC.',
                    ],
                ],
            ],
            'testimonials' => [
                'badge' => 'Testimonials',
                'title' => 'What security leaders are solving with CW360',
                'slider1' => [
                    ['img' => 'testimonial-avatars/1.jpg', 'name' => 'CISO perspective', 'role' => 'Regulated enterprise', 'quote' => 'We are measured on risk reduction and cost. CW360 aligns with that: fewer tools to string together, faster response, and AI that augments the team instead of adding another black box.'],
                    ['img' => 'testimonial-avatars/2.jpg', 'name' => 'SOC manager perspective', 'role' => 'High-volume operations', 'quote' => 'The nightmare is a real attack hiding in thousands of false positives. Agentic investigation with a reasoning log beats “select all and close” every time.'],
                    ['img' => 'testimonial-avatars/3.jpg', 'name' => 'MSSP perspective', 'role' => 'Multi-tenant delivery', 'quote' => 'We need quick onboarding per tenant and centralized control. A unified incident stack beats paying for fragmented SOAR, SIEM consoles, and ITSM glue code.'],
                    ['img' => 'testimonial-avatars/4.jpg', 'name' => 'Security engineer perspective', 'role' => 'Integration-focused', 'quote' => 'REST, webhooks, syslog, and email ingestion matter. We can connect modern and legacy sources without a six-month services project.'],
                ],
                'slider2' => [
                    ['img' => 'testimonial-avatars/5.jpg', 'name' => 'Outcome: MTTR', 'role' => 'Operational KPI', 'quote' => 'Consolidating triage, enrichment, ticketing, and tasks removes hand‑offs that inflate mean time to respond.'],
                    ['img' => 'testimonial-avatars/6.jpg', 'name' => 'Outcome: coverage', 'role' => 'SOC quality bar', 'quote' => 'We aim for full alert coverage—investigate everything, prioritize correctly, and document why.'],
                    ['img' => 'testimonial-avatars/7.jpg', 'name' => 'Outcome: playbooks', 'role' => 'Automation strategy', 'quote' => 'Traditional SOAR is brittle. Agentic reasoning with transparent logs reduces playbook authoring and constant maintenance.'],
                    ['img' => 'testimonial-avatars/8.jpg', 'name' => 'MENA context', 'role' => 'Compliance & national programs', 'quote' => 'Vision 2030-class initiatives and frameworks like SAMA raise the bar. We need platforms that match that urgency.'],
                ],
            ],
        ];
    }
}
