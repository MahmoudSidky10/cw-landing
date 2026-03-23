<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Cyber Security',      'slug' => 'cyber-security',      'description' => 'General cybersecurity news, tips and best practices.', 'sort_order' => 1],
            ['name' => 'Threat Intelligence', 'slug' => 'threat-intelligence', 'description' => 'Latest threat reports, vulnerability disclosures and attack analyses.', 'sort_order' => 2],
            ['name' => 'Compliance',          'slug' => 'compliance',          'description' => 'Regulatory frameworks, standards and compliance guidance.', 'sort_order' => 3],
            ['name' => 'Incident Response',   'slug' => 'incident-response',   'description' => 'Handling breaches, forensics and recovery strategies.', 'sort_order' => 4],
            ['name' => 'Network Security',    'slug' => 'network-security',    'description' => 'Firewalls, intrusion detection, VPNs and network hardening.', 'sort_order' => 5],
            ['name' => 'Cloud Security',      'slug' => 'cloud-security',      'description' => 'Securing cloud infrastructure, SaaS and hybrid environments.', 'sort_order' => 6],
            ['name' => 'Tips & Tricks',       'slug' => 'tips-and-tricks',     'description' => 'Practical security tips for teams and individuals.', 'sort_order' => 7],
        ];

        foreach ($categories as $category) {
            BlogCategory::updateOrCreate(
                ['slug' => $category['slug']],
                array_merge($category, ['is_active' => 1])
            );
        }
    }
}
