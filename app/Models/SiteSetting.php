<?php

namespace App\Models;

use App\Support\AboutPageDefaults;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $fillable = [
        'phone',
        'email',
        'address',
        'address_2',
        'logo',
        'logo_dark',
        'home_features_title_line1',
        'home_features_title_highlight',
        'home_features_blocks',
        'home_features2_title_line1',
        'home_features2_title_highlight',
        'home_features2_hero_image',
        'home_features2_hero_alt',
        'home_features2_cards',
        'about_content',
        'privacy_policy',
    ];

    protected $casts = [
        'home_features_blocks' => 'array',
        'home_features2_cards' => 'array',
        'about_content'        => 'array',
    ];

    /** Always returns the single settings row, creating it if missing */
    public static function instance(): static
    {
        return static::firstOrCreate([], [
            'phone'     => '',
            'email'     => '',
            'address'   => '',
            'address_2' => '',
        ]);
    }

    public function resolvedLogoUrl(): string
    {
        $v = trim((string) $this->logo);

        return $v !== '' ? static::featureImageUrl($v) : asset('assets/img/logo/PNG 1 HQ.png');
    }

    public function resolvedLogoDarkUrl(): string
    {
        $v = trim((string) $this->logo_dark);

        return $v !== '' ? static::featureImageUrl($v) : asset('assets/img/logo-dark.png');
    }

    public function resolvedLogoLightUrl(): string
    {
        $v = trim((string) $this->logo);

        return $v !== '' ? static::featureImageUrl($v) : asset('assets/img/logo-light.png');
    }

    public static function defaultHomeFeaturesTitleLine1(): string
    {
        return 'Manage Security Operations From';
    }

    public static function defaultHomeFeaturesTitleHighlight(): string
    {
        return 'Centralized Console';
    }

    public static function defaultHomeFeatures2TitleLine1(): string
    {
        return 'From alert to structured response with';
    }

    public static function defaultHomeFeatures2TitleHighlight(): string
    {
        return 'Cyberwatch360';
    }

    public static function defaultHomeFeatures2HeroImage(): string
    {
        return 'assets/img/cw/cw-dashboard.jpg';
    }

    public static function defaultHomeFeatures2HeroAlt(): string
    {
        return 'Cyberwatch360 operations dashboard preview';
    }

    /** @return array<int, array<string, string>> */
    public static function defaultHomeFeatures2Cards(): array
    {
        return [
            [
                'icon'       => 'carbon:api-1',
                'title'      => 'Zero-Connector Alerting Architecture',
                'title_link' => 'about',
                'body'       => 'Break free from rigid integration hurdles. Our AI-driven parsing engine handles flexible alert source configurations and webhooks natively. You can ingest data from any source instantly without waiting for custom-built connectors.',
            ],
            [
                'icon'       => 'mingcute:ai-fill',
                'title'      => 'Zarqaa: The Intelligent Core',
                'title_link' => 'about',
                'body'       => 'Experience the next generation of SOC assistance. Zarqaa AI isn’t just a chatbot; it’s an integrated assistant that orchestrates your entire workflow, from initial alert enrichment to final resolution.',
            ],
            [
                'icon'       => 'mdi:ticket-outline',
                'title'      => 'Autonomous Triage & Ticket Mastery',
                'title_link' => 'about',
                'body'       => 'Let AI take the first shift. Our Ticket Writing AI Agent automatically drafts detailed incident reports, while the Auto-Triage system ensures every ticket is assigned to the right person based on real-time workload and expertise.',
            ],
            [
                'icon'       => 'mdi:shield-search',
                'title'      => 'Multi-Source CTI Fusion',
                'title_link' => 'about',
                'body'       => 'Stay ahead of threats with Integrated Cyber Threat Intelligence. We aggregate and correlate data from multiple commercial vendors, government regulators, and open-source intelligence (OSINT) to provide a unified truth.',
            ],
            [
                'icon'       => 'tabler:engine',
                'title'      => 'The "Helper Engine" Enrichment',
                'title_link' => 'about',
                'body'       => 'Never look at a "thin" alert again. The Helper Engine automatically communicates back with your alert sources to pull extra context, enriching every incident with the data you need before you even open the ticket.',
            ],
            [
                'icon'       => 'mdi:clipboard-text-clock',
                'title'      => 'Intelligent SLA & Task Orchestration',
                'title_link' => 'about',
                'body'       => 'Move beyond simple ticket lists. Transform complex incidents into manageable Sub-Tasks with automated distribution and SLA monitoring that ensures no critical action item ever expires.',
            ],
            [
                'icon'       => 'mdi:view-dashboard-variant-outline',
                'title'      => 'Dynamic Intelligence Dashboards',
                'title_link' => 'about',
                'body'       => 'Stop relying on static views. Build Dynamic Dashboards and Reports that update in real-time, giving stakeholders and engineers exactly the data they need through a fully customizable interface.',
            ],
            [
                'icon'       => 'mdi:sort-numeric-variant',
                'title'      => 'Algorithmic Scoring Engine',
                'title_link' => 'about',
                'body'       => 'Prioritize by impact, not just urgency. Our Scoring Engine evaluates every incoming alert against your specific business logic, ensuring your team focuses on the highest-risk threats first.',
            ],
        ];
    }

    public function resolvedHomeFeatures2TitleLine1(): string
    {
        $v = trim((string) $this->home_features2_title_line1);

        return $v !== '' ? $v : static::defaultHomeFeatures2TitleLine1();
    }

    public function resolvedHomeFeatures2TitleHighlight(): string
    {
        $v = trim((string) $this->home_features2_title_highlight);

        return $v !== '' ? $v : static::defaultHomeFeatures2TitleHighlight();
    }

    public function resolvedHomeFeatures2HeroImage(): string
    {
        $v = trim((string) $this->home_features2_hero_image);

        return $v !== '' ? $v : static::defaultHomeFeatures2HeroImage();
    }

    public function resolvedHomeFeatures2HeroAlt(): string
    {
        $v = trim((string) $this->home_features2_hero_alt);

        return $v !== '' ? $v : static::defaultHomeFeatures2HeroAlt();
    }

    /** @return array<int, array<string, string>> */
    public function mergedHomeFeatures2Cards(): array
    {
        $defaults = static::defaultHomeFeatures2Cards();
        $stored   = is_array($this->home_features2_cards) ? $this->home_features2_cards : [];

        $out = [];
        foreach ($defaults as $i => $defaultRow) {
            $out[$i] = array_merge($defaultRow, isset($stored[$i]) && is_array($stored[$i]) ? $stored[$i] : []);
        }

        return $out;
    }

    /** @return array<int, array<string, mixed>> */
    public static function defaultHomeFeaturesBlocks(): array
    {
        return [
            [
                'type'       => 'card_large',
                'image'      => 'assets/img/cw/cw-threat-monitor.jpg',
                'alt'        => 'Security monitoring and alert correlation',
                'title'      => 'Unified alert operations',
                'title_link' => 'about',
                'body'       => 'Ingest SIEM, EDR/XDR, cloud, and network signals into one console—with parsing, normalization, deduplication, and AI-assisted correlation to cut alert noise.',
            ],
            [
                'type'       => 'card_medium',
                'image'      => 'assets/img/cw/cw-analyst-work.jpg',
                'alt'        => 'SOC analyst with security workflows',
                'title'      => 'Zarqaa: agentic AI',
                'title_link' => 'about',
                'body'       => 'Go beyond rigid playbooks—Zarqaa reasons across signals and tools like a fast L1 analyst, with recommendations you can trace in a reasoning log.',
            ],
            [
                'type'       => 'stack_text',
                'title'      => 'Your security stack',
                'title_link' => 'about',
                'body'       => 'Connect the products your team already runs—APIs, webhooks, and integrations—without ripping out the toolchain that powers your SOC.',
            ],
            [
                'type'       => 'card_small',
                'image'      => 'assets/img/cw/cw-team-soc.jpg',
                'alt'        => 'Security operations and collaboration',
                'title'      => 'Tickets & tasks',
                'title_link' => 'about',
                'body'       => 'Enriched work items for ITSM platforms—IOCs, risk scores, MITRE context, assignments, SLAs, and notifications across email, Slack, and Microsoft Teams.',
            ],
            [
                'type'       => 'card_small',
                'image'      => 'assets/img/cw/cw-network-abstract.jpg',
                'alt'        => 'Global network and compliance-ready operations',
                'title'      => 'Compliance-ready ops',
                'title_link' => 'about',
                'body'       => 'Centralized configuration for categories, priorities, workflows, and roles—so the same model flows from triage through execution with audit-friendly logging.',
            ],
            [
                'type'        => 'cta_wide',
                'headline'    => 'Cyberwatch360 helps SOCs replace fragmented tools and alert floods with one operational layer.',
                'button_text' => 'How it works',
                'button_link' => 'about',
                'stats'       => [
                    ['value' => '85%', 'label' => 'SIEM Replacement Ratio'],
                    ['value' => '95%', 'label' => 'Automation Coverage'],
                ],
                'timeline' => [
                    [
                        'title' => 'Problem',
                        'body'  => 'Modern SOCs drown in disconnected SIEM, EDR, and ITSM screens—critical incidents get missed, triage burns out analysts, and compliance expectations keep rising.',
                    ],
                    [
                        'title' => 'Solution',
                        'body'  => 'Cyberwatch360 unifies ingestion, correlation, ticketing, and tasks—while Zarqaa prioritizes real threats and explains its recommendations.',
                    ],
                    [
                        'title' => 'Who it is for',
                        'body'  => 'MSSPs needing multi-tenant efficiency, regulated enterprises (including SAMA-aligned programs), and lean teams that need 24/7 coverage without a massive SOC bench.',
                    ],
                ],
            ],
        ];
    }

    public function resolvedHomeFeaturesTitleLine1(): string
    {
        $v = trim((string) $this->home_features_title_line1);

        return $v !== '' ? $v : static::defaultHomeFeaturesTitleLine1();
    }

    public function resolvedHomeFeaturesTitleHighlight(): string
    {
        $v = trim((string) $this->home_features_title_highlight);

        return $v !== '' ? $v : static::defaultHomeFeaturesTitleHighlight();
    }

    /** @return array<int, array<string, mixed>> */
    public function mergedHomeFeaturesBlocks(): array
    {
        $defaults = static::defaultHomeFeaturesBlocks();
        $stored   = is_array($this->home_features_blocks) ? $this->home_features_blocks : [];

        $out = [];
        foreach ($defaults as $i => $defaultBlock) {
            $merged = array_merge($defaultBlock, isset($stored[$i]) && is_array($stored[$i]) ? $stored[$i] : []);
            if (($merged['type'] ?? '') === 'cta_wide') {
                $merged['stats']    = $this->mergeStatsRows($defaultBlock['stats'] ?? [], $merged['stats'] ?? []);
                $merged['timeline'] = $this->mergeTimelineRows($defaultBlock['timeline'] ?? [], $merged['timeline'] ?? []);
            }
            $out[$i] = $merged;
        }

        return $out;
    }

    /**
     * @param  array<int, array<string, string>>  $defaults
     * @param  array<int, mixed>  $incoming
     * @return array<int, array<string, string>>
     */
    private function mergeStatsRows(array $defaults, array $incoming): array
    {
        $out = [];
        $max = max(count($defaults), count($incoming));
        for ($i = 0; $i < $max; $i++) {
            $row = array_merge($defaults[$i] ?? ['value' => '', 'label' => ''], is_array($incoming[$i] ?? null) ? $incoming[$i] : []);
            $out[$i] = [
                'value' => (string) ($row['value'] ?? ''),
                'label' => (string) ($row['label'] ?? ''),
            ];
        }

        return $out;
    }

    /**
     * @param  array<int, array<string, string>>  $defaults
     * @param  array<int, mixed>  $incoming
     * @return array<int, array<string, string>>
     */
    private function mergeTimelineRows(array $defaults, array $incoming): array
    {
        $out = [];
        $max = max(count($defaults), count($incoming));
        for ($i = 0; $i < $max; $i++) {
            $row = array_merge($defaults[$i] ?? ['title' => '', 'body' => ''], is_array($incoming[$i] ?? null) ? $incoming[$i] : []);
            $out[$i] = [
                'title' => (string) ($row['title'] ?? ''),
                'body'  => (string) ($row['body'] ?? ''),
            ];
        }

        return $out;
    }

    /** Public URL for feature images (uploaded under storage/ or legacy assets path). */
    public static function featureImageUrl(?string $path): string
    {
        if ($path === null || $path === '') {
            return '';
        }
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }
        if (preg_match('#^(home-features|blogs|social-media|about-page|logos)/#', $path)) {
            return Storage::disk('public')->url($path);
        }

        return asset($path);
    }

    /** @return array<string, mixed> */
    public function mergedAboutContent(): array
    {
        $defaults = AboutPageDefaults::content();
        $stored   = is_array($this->about_content) ? $this->about_content : [];

        $about = $defaults;

        foreach (['mission', 'why_different', 'story', 'who_we_build', 'testimonials'] as $section) {
            if (! isset($stored[$section]) || ! is_array($stored[$section])) {
                continue;
            }
            $about[$section] = array_replace_recursive($defaults[$section], $stored[$section]);
        }

        // Preserve list shapes (merge by index with defaults)
        $about['why_different']['items'] = $this->mergeAboutIndexedList(
            $defaults['why_different']['items'],
            $about['why_different']['items'] ?? []
        );
        $about['story']['timeline'] = $this->mergeAboutIndexedList(
            $defaults['story']['timeline'],
            $about['story']['timeline'] ?? []
        );
        $about['story']['highlights'] = $this->mergeAboutIndexedList(
            $defaults['story']['highlights'],
            $about['story']['highlights'] ?? []
        );
        $about['who_we_build']['cards'] = $this->mergeAboutIndexedList(
            $defaults['who_we_build']['cards'],
            $about['who_we_build']['cards'] ?? []
        );
        $about['testimonials']['slider1'] = $this->mergeAboutIndexedList(
            $defaults['testimonials']['slider1'],
            $about['testimonials']['slider1'] ?? []
        );
        $about['testimonials']['slider2'] = $this->mergeAboutIndexedList(
            $defaults['testimonials']['slider2'],
            $about['testimonials']['slider2'] ?? []
        );

        return $about;
    }

    /**
     * @param  array<int, array<string, string>>  $defaults
     * @param  array<int, mixed>  $incoming
     * @return array<int, array<string, string>>
     */
    private function mergeAboutIndexedList(array $defaults, array $incoming): array
    {
        $out = [];
        $max = max(count($defaults), count($incoming));
        for ($i = 0; $i < $max; $i++) {
            $base = $defaults[$i] ?? [];
            $row  = is_array($incoming[$i] ?? null) ? $incoming[$i] : [];
            $out[$i] = array_merge($base, $row);
        }

        return $out;
    }

    /** Paths from DB: `assets/...`, short `folder/file.jpg` under public `assets/img/`, or `about-page/...` uploads. */
    public static function aboutMediaUrl(?string $path): string
    {
        if ($path === null || $path === '') {
            return '';
        }
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }
        if (preg_match('#^(home-features|blogs|social-media|about-page|logos)/#', $path)) {
            return Storage::disk('public')->url($path);
        }
        if (str_starts_with($path, 'assets/')) {
            return asset($path);
        }

        return asset('assets/img/' . ltrim($path, '/'));
    }

    public static function featureTitleHref(?string $routeName): string
    {
        if ($routeName === null || $routeName === '') {
            return '#';
        }
        if (! \Illuminate\Support\Facades\Route::has($routeName)) {
            return '#';
        }

        return route($routeName);
    }
}
