{{-- Security vendor / platform icons for home integrations strip --}}
@php
    $cwIntegrationIcons = [
        'simple-icons:splunk',
        'simple-icons:elasticsearch',
        'simple-icons:microsoftazure',
        'simple-icons:amazonaws',
        'simple-icons:crowdstrike',
        'simple-icons:paloaltonetworks',
        'simple-icons:servicenow',
        'simple-icons:jira',
        'simple-icons:slack',
        'simple-icons:microsoftteams',
        'simple-icons:googlecloud',
    ];
@endphp
@foreach ([['mb' => 'mb-6', 'dir' => null], ['mb' => 'mb-6', 'dir' => 'right'], ['mb' => 'mb-6', 'dir' => null], ['mb' => '', 'dir' => 'right']] as $row)
    <div class="scroller-x {{ $row['mb'] }} gsap-fade-in" data-speed="slow" data-scroll-trigger="true" data-y="10" @if (!empty($row['dir'])) data-direction="{{ $row['dir'] }}" @endif>
        <ul class="list list-row scroller-x__list gap-6 align-items-center">
            @foreach ($cwIntegrationIcons as $ico)
                <li>
                    <div class="w-20 h-18 d-grid place-content-center rounded bg-light bg-opacity-5 text-primary">
                        <iconify-icon icon="{{ $ico }}" class="fs-28"></iconify-icon>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endforeach
