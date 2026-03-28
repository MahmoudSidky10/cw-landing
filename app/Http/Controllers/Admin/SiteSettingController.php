<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::instance();
        $blocks   = $settings->mergedHomeFeaturesBlocks();
        $blocks2  = $settings->mergedHomeFeatures2Cards();
        $about    = $settings->mergedAboutContent();

        return view('admin.settings.index', compact('settings', 'blocks', 'blocks2', 'about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone'                         => 'nullable|string|max:50',
            'email'                         => 'nullable|email|max:150',
            'address'                       => 'nullable|string|max:255',
            'address_2'                     => 'nullable|string|max:255',
            'home_features_title_line1'     => 'nullable|string|max:255',
            'home_features_title_highlight' => 'nullable|string|max:255',
            'home_features2_title_line1'    => 'nullable|string|max:255',
            'home_features2_title_highlight' => 'nullable|string|max:255',
            'home_features2_hero_image'     => 'nullable|string|max:500',
            'home_features2_hero_alt'       => 'nullable|string|max:255',
            'feature_image_0'               => 'nullable|image|max:8192',
            'feature_image_1'               => 'nullable|image|max:8192',
            'feature_image_3'               => 'nullable|image|max:8192',
            'feature_image_4'               => 'nullable|image|max:8192',
            'feature2_hero_image'           => 'nullable|image|max:8192',
            'about_mission_upload'          => 'nullable|image|max:8192',
            'about_why_mobile_upload'       => 'nullable|image|max:8192',
            'about_why_img_a_upload'        => 'nullable|image|max:8192',
            'about_why_img_b_upload'        => 'nullable|image|max:8192',
            'about_story_side_upload'       => 'nullable|image|max:8192',
            'about_who_0_upload'            => 'nullable|image|max:8192',
            'about_who_1_upload'            => 'nullable|image|max:8192',
            'about_who_2_upload'            => 'nullable|image|max:8192',
            'about_who_3_upload'            => 'nullable|image|max:8192',
            'about_t1_0_upload'             => 'nullable|image|max:8192',
            'about_t1_1_upload'             => 'nullable|image|max:8192',
            'about_t1_2_upload'             => 'nullable|image|max:8192',
            'about_t1_3_upload'             => 'nullable|image|max:8192',
            'about_t2_0_upload'             => 'nullable|image|max:8192',
            'about_t2_1_upload'             => 'nullable|image|max:8192',
            'about_t2_2_upload'             => 'nullable|image|max:8192',
            'about_t2_3_upload'             => 'nullable|image|max:8192',
        ]);

        $settings = SiteSetting::instance();
        $blocks   = $this->buildHomeFeaturesBlocksFromRequest($request, $settings);
        $blocks2  = $this->buildHomeFeatures2CardsFromRequest($request, $settings);
        $about    = $this->buildAboutContentFromRequest($request, $settings);

        $heroImage = trim((string) $request->input('home_features2_hero_image', ''));
        if ($request->hasFile('feature2_hero_image')) {
            $heroImage = $request->file('feature2_hero_image')->store('home-features', 'public');
        } elseif ($heroImage === '') {
            $heroImage = $settings->home_features2_hero_image ?? SiteSetting::defaultHomeFeatures2HeroImage();
        }

        $settings->update(array_merge(
            $request->only(
                'phone',
                'email',
                'address',
                'address_2',
                'home_features_title_line1',
                'home_features_title_highlight',
                'home_features2_title_line1',
                'home_features2_title_highlight',
                'home_features2_hero_alt'
            ),
            [
                'home_features_blocks'      => $blocks,
                'home_features2_cards'      => $blocks2,
                'home_features2_hero_image' => $heroImage,
                'about_content'             => $about,
            ]
        ));

        return back()->with('success', 'Settings updated successfully.');
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function buildHomeFeaturesBlocksFromRequest(Request $request, SiteSetting $settings): array
    {
        $current = $settings->mergedHomeFeaturesBlocks();
        $blocks  = [];

        for ($i = 0; $i < 6; $i++) {
            $blocks[$i] = $current[$i];
            $incoming   = $request->input('blocks.' . $i);
            if (! is_array($incoming)) {
                $incoming = [];
            }

            $type = $blocks[$i]['type'] ?? '';
            if ($type === 'cta_wide') {
                $blocks[$i]['headline']    = (string) ($incoming['headline'] ?? $blocks[$i]['headline'] ?? '');
                $blocks[$i]['button_text'] = (string) ($incoming['button_text'] ?? $blocks[$i]['button_text'] ?? '');
                $blocks[$i]['button_link'] = (string) ($incoming['button_link'] ?? $blocks[$i]['button_link'] ?? 'about');
                for ($s = 0; $s < 2; $s++) {
                    $blocks[$i]['stats'][$s]['value'] = (string) ($request->input("blocks.$i.stats.$s.value", $blocks[$i]['stats'][$s]['value'] ?? ''));
                    $blocks[$i]['stats'][$s]['label'] = (string) ($request->input("blocks.$i.stats.$s.label", $blocks[$i]['stats'][$s]['label'] ?? ''));
                }
                for ($t = 0; $t < 3; $t++) {
                    $blocks[$i]['timeline'][$t]['title'] = (string) ($request->input("blocks.$i.timeline.$t.title", $blocks[$i]['timeline'][$t]['title'] ?? ''));
                    $blocks[$i]['timeline'][$t]['body']  = (string) ($request->input("blocks.$i.timeline.$t.body", $blocks[$i]['timeline'][$t]['body'] ?? ''));
                }

                continue;
            }

            $blocks[$i]['title']      = (string) ($incoming['title'] ?? $blocks[$i]['title'] ?? '');
            $blocks[$i]['body']       = (string) ($incoming['body'] ?? $blocks[$i]['body'] ?? '');
            $blocks[$i]['title_link'] = (string) ($incoming['title_link'] ?? $blocks[$i]['title_link'] ?? 'about');

            if ($type !== 'stack_text') {
                $blocks[$i]['alt'] = (string) ($incoming['alt'] ?? $blocks[$i]['alt'] ?? '');
                if ($request->hasFile('feature_image_' . $i)) {
                    $blocks[$i]['image'] = $request->file('feature_image_' . $i)->store('home-features', 'public');
                } elseif (array_key_exists('image', $incoming)) {
                    $img = trim((string) $incoming['image']);
                    if ($img !== '') {
                        $blocks[$i]['image'] = $img;
                    }
                }
            }
        }

        return $blocks;
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function buildHomeFeatures2CardsFromRequest(Request $request, SiteSetting $settings): array
    {
        $current = $settings->mergedHomeFeatures2Cards();
        $cards   = [];

        for ($i = 0; $i < 8; $i++) {
            $cards[$i] = $current[$i];
            $incoming  = $request->input('blocks2.' . $i);
            if (! is_array($incoming)) {
                $incoming = [];
            }
            $cards[$i]['icon']       = (string) ($incoming['icon'] ?? $cards[$i]['icon'] ?? '');
            $cards[$i]['title']      = (string) ($incoming['title'] ?? $cards[$i]['title'] ?? '');
            $cards[$i]['title_link'] = (string) ($incoming['title_link'] ?? $cards[$i]['title_link'] ?? 'about');
            $cards[$i]['body']       = (string) ($incoming['body'] ?? $cards[$i]['body'] ?? '');
        }

        return $cards;
    }

    /**
     * @return array<string, mixed>
     */
    private function buildAboutContentFromRequest(Request $request, SiteSetting $settings): array
    {
        $about = $settings->mergedAboutContent();
        $in    = $request->input('about', []);
        if (! is_array($in)) {
            $in = [];
        }

        if (isset($in['mission']) && is_array($in['mission'])) {
            $m = $in['mission'];
            foreach (['badge', 'title', 'body', 'image', 'image_alt'] as $k) {
                if (array_key_exists($k, $m)) {
                    $about['mission'][$k] = (string) $m[$k];
                }
            }
        }
        if ($request->hasFile('about_mission_upload')) {
            $about['mission']['image'] = $request->file('about_mission_upload')->store('about-page', 'public');
        }

        if (isset($in['why_different']) && is_array($in['why_different'])) {
            $w = $in['why_different'];
            foreach (['badge', 'title', 'mobile_image', 'mobile_alt', 'img_a', 'img_a_alt', 'img_b', 'img_b_alt'] as $k) {
                if (array_key_exists($k, $w)) {
                    $about['why_different'][$k] = (string) $w[$k];
                }
            }
            if (isset($w['items']) && is_array($w['items'])) {
                for ($i = 0; $i < 4; $i++) {
                    if (! isset($w['items'][$i]) || ! is_array($w['items'][$i])) {
                        continue;
                    }
                    foreach (['icon', 'title', 'body'] as $k) {
                        if (array_key_exists($k, $w['items'][$i])) {
                            $about['why_different']['items'][$i][$k] = (string) $w['items'][$i][$k];
                        }
                    }
                }
            }
        }
        if ($request->hasFile('about_why_mobile_upload')) {
            $about['why_different']['mobile_image'] = $request->file('about_why_mobile_upload')->store('about-page', 'public');
        }
        if ($request->hasFile('about_why_img_a_upload')) {
            $about['why_different']['img_a'] = $request->file('about_why_img_a_upload')->store('about-page', 'public');
        }
        if ($request->hasFile('about_why_img_b_upload')) {
            $about['why_different']['img_b'] = $request->file('about_why_img_b_upload')->store('about-page', 'public');
        }

        if (isset($in['story']) && is_array($in['story'])) {
            $s = $in['story'];
            foreach (['badge', 'title', 'intro', 'side_image', 'side_alt'] as $k) {
                if (array_key_exists($k, $s)) {
                    $about['story'][$k] = (string) $s[$k];
                }
            }
            if (isset($s['timeline']) && is_array($s['timeline'])) {
                for ($i = 0; $i < 4; $i++) {
                    if (! isset($s['timeline'][$i]) || ! is_array($s['timeline'][$i])) {
                        continue;
                    }
                    foreach (['left', 'right_title', 'right_body'] as $k) {
                        if (array_key_exists($k, $s['timeline'][$i])) {
                            $about['story']['timeline'][$i][$k] = (string) $s['timeline'][$i][$k];
                        }
                    }
                }
            }
            if (isset($s['highlights']) && is_array($s['highlights'])) {
                for ($i = 0; $i < 3; $i++) {
                    if (! isset($s['highlights'][$i]) || ! is_array($s['highlights'][$i])) {
                        continue;
                    }
                    foreach (['value', 'label', 'icon'] as $k) {
                        if (array_key_exists($k, $s['highlights'][$i])) {
                            $about['story']['highlights'][$i][$k] = (string) $s['highlights'][$i][$k];
                        }
                    }
                }
            }
        }
        if ($request->hasFile('about_story_side_upload')) {
            $about['story']['side_image'] = $request->file('about_story_side_upload')->store('about-page', 'public');
        }

        if (isset($in['who_we_build']) && is_array($in['who_we_build'])) {
            $wh = $in['who_we_build'];
            foreach (['badge', 'title'] as $k) {
                if (array_key_exists($k, $wh)) {
                    $about['who_we_build'][$k] = (string) $wh[$k];
                }
            }
            if (isset($wh['cards']) && is_array($wh['cards'])) {
                for ($i = 0; $i < 4; $i++) {
                    if (! isset($wh['cards'][$i]) || ! is_array($wh['cards'][$i])) {
                        continue;
                    }
                    foreach (['image', 'image_alt', 'heading', 'body'] as $k) {
                        if (array_key_exists($k, $wh['cards'][$i])) {
                            $about['who_we_build']['cards'][$i][$k] = (string) $wh['cards'][$i][$k];
                        }
                    }
                }
            }
        }
        for ($i = 0; $i < 4; $i++) {
            if ($request->hasFile('about_who_' . $i . '_upload')) {
                $about['who_we_build']['cards'][$i]['image'] = $request->file('about_who_' . $i . '_upload')->store('about-page', 'public');
            }
        }

        if (isset($in['testimonials']) && is_array($in['testimonials'])) {
            $t = $in['testimonials'];
            foreach (['badge', 'title'] as $k) {
                if (array_key_exists($k, $t)) {
                    $about['testimonials'][$k] = (string) $t[$k];
                }
            }
            foreach (['slider1', 'slider2'] as $slider) {
                if (! isset($t[$slider]) || ! is_array($t[$slider])) {
                    continue;
                }
                for ($i = 0; $i < 4; $i++) {
                    if (! isset($t[$slider][$i]) || ! is_array($t[$slider][$i])) {
                        continue;
                    }
                    foreach (['img', 'name', 'role', 'quote'] as $k) {
                        if (array_key_exists($k, $t[$slider][$i])) {
                            $about['testimonials'][$slider][$i][$k] = (string) $t[$slider][$i][$k];
                        }
                    }
                }
            }
        }
        for ($si = 0; $si < 4; $si++) {
            if ($request->hasFile('about_t1_' . $si . '_upload')) {
                $about['testimonials']['slider1'][$si]['img'] = $request->file('about_t1_' . $si . '_upload')->store('about-page', 'public');
            }
            if ($request->hasFile('about_t2_' . $si . '_upload')) {
                $about['testimonials']['slider2'][$si]['img'] = $request->file('about_t2_' . $si . '_upload')->store('about-page', 'public');
            }
        }

        return $about;
    }
}
