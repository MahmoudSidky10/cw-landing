{{-- Security / ITSM stack icons (Iconify) — replaces dev-tool PNGs --}}
@php
    $rowA = [
        ['icon' => 'simple-icons:splunk', 'label' => 'SIEM'],
        ['icon' => 'simple-icons:elasticsearch', 'label' => 'Elastic'],
        ['icon' => 'simple-icons:microsoftazure', 'label' => 'Azure'],
        ['icon' => 'simple-icons:amazonaws', 'label' => 'AWS'],
        ['icon' => 'simple-icons:crowdstrike', 'label' => 'EDR'],
        ['icon' => 'simple-icons:paloaltonetworks', 'label' => 'Firewall'],
        ['icon' => 'mdi:shield-lock-outline', 'label' => 'SOC'],
    ];
    $rowB = [
        ['icon' => 'simple-icons:servicenow', 'label' => 'ServiceNow'],
        ['icon' => 'simple-icons:jira', 'label' => 'Jira'],
        ['icon' => 'simple-icons:slack', 'label' => 'Slack'],
        ['icon' => 'simple-icons:microsoftteams', 'label' => 'Teams'],
        ['icon' => 'simple-icons:okta', 'label' => 'IAM'],
        ['icon' => 'simple-icons:googlecloud', 'label' => 'GCP'],
        ['icon' => 'carbon:cloud-satellite-config', 'label' => 'Cloud'],
    ];
    $rowC = [
        ['icon' => 'mdi:email-lock-outline', 'label' => 'Email gateway'],
        ['icon' => 'mdi:server-network', 'label' => 'On-prem'],
        ['icon' => 'simple-icons:ansible', 'label' => 'Automation'],
        ['icon' => 'mdi:api', 'label' => 'REST / APIs'],
        ['icon' => 'mdi:link-variant', 'label' => 'Webhooks'],
        ['icon' => 'mdi:database-lock-outline', 'label' => 'Data lake'],
        ['icon' => 'carbon:event-schedule', 'label' => 'Scheduling'],
    ];
@endphp
@foreach ([['speed' => 'slow', 'dir' => null, 'items' => $rowA], ['speed' => 'slow', 'dir' => 'right', 'items' => $rowB], ['speed' => 'slow', 'dir' => null, 'items' => $rowC], ['speed' => 'slow', 'dir' => 'right', 'items' => $rowA]] as $block)
    <div class="scroller-x mb-3" data-speed="{{ $block['speed'] }}" @if (!empty($block['dir'])) data-direction="{{ $block['dir'] }}" @endif>
        <ul class="list list-row align-items-center gap-4 scroller-x__list">
            @foreach ($block['items'] as $chip)
                <li>
                    <div class="d-flex align-items-center gap-2 py-2 px-3 rounded-1 bg-light bg-opacity-10">
                        <span class="d-grid place-content-center flex-shrink-0" style="width: 22px; height: 22px" aria-hidden="true">
                            <iconify-icon icon="{{ $chip['icon'] }}" class="fs-20 text-primary"></iconify-icon>
                        </span>
                        <span class="d-inline-block flex-grow-1 fs-12 fw-semibold text-light">{{ $chip['label'] }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endforeach
