@extends('admin.layout.index')
@section('content')
    @include('admin.layout.nav', ['title' => ''])

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="content d-flex flex-column flex-column-fluid">
                <div class="d-flex flex-column-fluid">
                    <div class="container-fluid">

                        {{-- ── Top stat cards ── --}}
                        <div class="row mt-4 mb-6">

                            {{-- Blog Posts --}}
                            <div style="margin:8px 0;" class="col-xl-3 col-md-6">
                                <a href="{{ url('admin/blogs') }}" style="color:#0c0e18 !important; text-decoration:none;">
                                    <div class="card h-100">
                                        <div class="card-body d-flex flex-column justify-content-between align-items-start"
                                            style="padding:28px 24px;">
                                            <div
                                                style="width:48px;height:48px;border-radius:12px;background:rgba(1,102,186,.1);display:flex;align-items:center;justify-content:center;">
                                                <i class="flaticon-file-1" style="font-size:22px;color:#0166ba;"></i>
                                            </div>
                                            <div class="mt-6">
                                                <h1
                                                    style="font-weight:700;font-size:52px;line-height:1;color:#1e1e2d;margin:0;">
                                                    {{ $stats['blogs_total'] }}
                                                </h1>
                                                <span class="fw-semibold fs-6" style="color:#a1a5b7;">Total Blog
                                                    Posts</span>
                                            </div>
                                            <div class="mt-4 d-flex align-items-center gap-2">
                                                <span
                                                    style="background:#e8f5e9;color:#2e7d32;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                                                    {{ $stats['blogs_active'] }} Active
                                                </span>
                                                <span
                                                    style="background:#fce4ec;color:#c62828;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                                                    {{ $stats['blogs_inactive'] }} Inactive
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            {{-- This Month --}}
                            <div style="margin:8px 0;" class="col-xl-3 col-md-6">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column justify-content-between align-items-start"
                                        style="padding:28px 24px;">
                                        <div
                                            style="width:48px;height:48px;border-radius:12px;background:rgba(76,175,80,.1);display:flex;align-items:center;justify-content:center;">
                                            <i class="flaticon-calendar-1" style="font-size:22px;color:#4caf50;"></i>
                                        </div>
                                        <div class="mt-6">
                                            <h1
                                                style="font-weight:700;font-size:52px;line-height:1;color:#1e1e2d;margin:0;">
                                                {{ $stats['blogs_this_month'] }}
                                            </h1>
                                            <span class="fw-semibold fs-6" style="color:#a1a5b7;">Posts This Month</span>
                                        </div>
                                        <div class="mt-4">
                                            <span
                                                style="background:#e8f5e9;color:#2e7d32;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                                                {{ now()->format('F Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Categories --}}
                            <div style="margin:8px 0;" class="col-xl-3 col-md-6">
                                <a href="{{ url('admin/blog-categories') }}"
                                    style="color:#0c0e18 !important; text-decoration:none;">
                                    <div class="card h-100">
                                        <div class="card-body d-flex flex-column justify-content-between align-items-start"
                                            style="padding:28px 24px;">
                                            <div
                                                style="width:48px;height:48px;border-radius:12px;background:rgba(255,152,0,.1);display:flex;align-items:center;justify-content:center;">
                                                <i class="flaticon-list-2" style="font-size:22px;color:#ff9800;"></i>
                                            </div>
                                            <div class="mt-6">
                                                <h1
                                                    style="font-weight:700;font-size:52px;line-height:1;color:#1e1e2d;margin:0;">
                                                    {{ $stats['categories_total'] }}
                                                </h1>
                                                <span class="fw-semibold fs-6" style="color:#a1a5b7;">Blog Categories</span>
                                            </div>
                                            <div class="mt-4">
                                                <span
                                                    style="background:#fff8e1;color:#f57f17;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                                                    {{ $stats['categories_active'] }} Active
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            {{-- FAQs --}}
                            <div style="margin:8px 0;" class="col-xl-3 col-md-6">
                                <a href="{{ url('admin/faqs') }}" style="color:#0c0e18 !important; text-decoration:none;">
                                    <div class="card h-100">
                                        <div class="card-body d-flex flex-column justify-content-between align-items-start"
                                            style="padding:28px 24px;">
                                            <div
                                                style="width:48px;height:48px;border-radius:12px;background:rgba(244,67,54,.1);display:flex;align-items:center;justify-content:center;">
                                                <i class="flaticon-questions-circular-button"
                                                    style="font-size:22px;color:#f44336;"></i>
                                            </div>
                                            <div class="mt-6">
                                                <h1
                                                    style="font-weight:700;font-size:52px;line-height:1;color:#1e1e2d;margin:0;">
                                                    {{ $stats['faqs_total'] }}
                                                </h1>
                                                <span class="fw-semibold fs-6" style="color:#a1a5b7;">FAQ Entries</span>
                                            </div>
                                            <div class="mt-4">
                                                <span
                                                    style="background:#fce4ec;color:#c62828;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                                                    {{ $stats['faqs_active'] }} Active
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        {{-- ── Quick Actions + Recent Posts ── --}}
                        <div class="row">

                            {{-- Quick Actions --}}
                            <div class="col-xl-3 mb-6">
                                <div class="card h-100">
                                    <div class="card-body" style="padding:24px;">
                                        <h5 class="fw-bold text-dark mb-6" style="font-size:15px;">Quick Actions</h5>
                                        <div class="d-flex flex-column" style="gap:12px;">
                                            <a href="{{ url('admin/blogs/create') }}"
                                                style="display:flex;align-items:center;gap:14px;padding:14px 16px;border-radius:10px;background:#f5f8ff;text-decoration:none;">
                                                <span
                                                    style="width:36px;height:36px;border-radius:8px;background:#0166ba;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                    <i class="flaticon-file-1" style="color:#fff;font-size:16px;"></i>
                                                </span>
                                                <div>
                                                    <div style="font-weight:600;color:#1e1e2d;font-size:13px;">New Blog Post
                                                    </div>
                                                    <div style="color:#a1a5b7;font-size:11px;">Create a new article</div>
                                                </div>
                                                <i class="flaticon2-right-arrow"
                                                    style="color:#a1a5b7;font-size:10px;margin-left:auto;"></i>
                                            </a>
                                            <a href="{{ url('admin/blog-categories/create') }}"
                                                style="display:flex;align-items:center;gap:14px;padding:14px 16px;border-radius:10px;background:#fff8f0;text-decoration:none;">
                                                <span
                                                    style="width:36px;height:36px;border-radius:8px;background:#ff9800;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                    <i class="flaticon-list-2" style="color:#fff;font-size:16px;"></i>
                                                </span>
                                                <div>
                                                    <div style="font-weight:600;color:#1e1e2d;font-size:13px;">New Category
                                                    </div>
                                                    <div style="color:#a1a5b7;font-size:11px;">Add a blog category</div>
                                                </div>
                                                <i class="flaticon2-right-arrow"
                                                    style="color:#a1a5b7;font-size:10px;margin-left:auto;"></i>
                                            </a>
                                            <a href="{{ url('admin/faqs/create') }}"
                                                style="display:flex;align-items:center;gap:14px;padding:14px 16px;border-radius:10px;background:#fff0f0;text-decoration:none;">
                                                <span
                                                    style="width:36px;height:36px;border-radius:8px;background:#f44336;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                    <i class="flaticon-questions-circular-button"
                                                        style="color:#fff;font-size:16px;"></i>
                                                </span>
                                                <div>
                                                    <div style="font-weight:600;color:#1e1e2d;font-size:13px;">New FAQ
                                                    </div>
                                                    <div style="color:#a1a5b7;font-size:11px;">Add a FAQ entry</div>
                                                </div>
                                                <i class="flaticon2-right-arrow"
                                                    style="color:#a1a5b7;font-size:10px;margin-left:auto;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Recent Blog Posts --}}
                            <div class="col-xl-9 mb-6">
                                <div class="card h-100">
                                    <div class="card-header border-0" style="padding:20px 24px 0;">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div>
                                                <h5 class="fw-bold text-dark mb-1" style="font-size:15px;">Recent Blog Posts</h5>
                                                <span id="date-label" style="font-size:12px;color:#a1a5b7;">All dates</span>
                                            </div>
                                            <a href="{{ url('admin/blogs') }}" class="btn btn-sm btn-primary"
                                                style="border-radius:8px;font-size:12px;padding:6px 14px;">
                                                View All
                                            </a>
                                        </div>
                                        {{-- Date Strip --}}
                                        <div class="d-flex flex-wrap pb-2 mt-3" style="gap:16px;" id="date-strip">
                                            @foreach($dateStrip as $day)
                                                @php
                                                    $ds      = $day->format('Y-m-d');
                                                    $isToday = $day->isToday();
                                                @endphp
                                                <a href="javascript:void(0)"
                                                    class="date-pill text-center text-decoration-none {{ $isToday ? 'is-today' : '' }}"
                                                    data-date="{{ $ds }}"
                                                    style="min-width:58px;padding:12px 10px;border-radius:14px;cursor:pointer;
                                                           background:{{ $isToday ? '#e3f2fd' : '#f5f5f5' }};
                                                           color:{{ $isToday ? '#0166ba' : '#7e8299' }};
                                                           font-weight:{{ $isToday ? '700' : '500' }};
                                                           border:2px solid {{ $isToday ? '#bbdefb' : 'transparent' }};
                                                           transition:all .15s;">
                                                    <div style="font-size:10px;text-transform:uppercase;letter-spacing:.5px;">
                                                        {{ $day->format('D') }}
                                                    </div>
                                                    <div style="font-size:18px;line-height:1.4;">
                                                        {{ $day->format('d') }}
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover align-middle mb-0 mt-3 "
                                                style="min-width:500px;">
                                                <thead>
                                                    <tr style="background:#f9f9f9;">
                                                        <th
                                                            style="padding:14px 24px;color:#a1a5b7;font-weight:600;font-size:12px;border:0;">
                                                            #</th>
                                                        <th
                                                            style="padding:14px 8px;color:#a1a5b7;font-weight:600;font-size:12px;border:0;">
                                                            Image</th>
                                                        <th
                                                            style="padding:14px 8px;color:#a1a5b7;font-weight:600;font-size:12px;border:0;">
                                                            Title</th>
                                                        <th
                                                            style="padding:14px 8px;color:#a1a5b7;font-weight:600;font-size:12px;border:0;">
                                                            Category</th>
                                                        <th
                                                            style="padding:14px 8px;color:#a1a5b7;font-weight:600;font-size:12px;border:0;">
                                                            Published</th>
                                                        <th
                                                            style="padding:14px 8px;color:#a1a5b7;font-weight:600;font-size:12px;border:0;">
                                                            Status</th>
                                                        <th
                                                            style="padding:14px 8px;color:#a1a5b7;font-weight:600;font-size:12px;border:0;">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="blogs-tbody">
                                                    @forelse($recent_blogs as $blog)
                                                        <tr>
                                                            <td style="padding:14px 24px;color:#a1a5b7;font-size:13px;">
                                                                {{ $loop->iteration }}</td>
                                                            <td style="padding:14px 8px;">
                                                                <img src="{{ $blog->image_url }}" alt=""
                                                                    style="width:50px;height:38px;object-fit:cover;border-radius:8px;">
                                                            </td>
                                                            <td
                                                                style="padding:14px 8px;font-weight:600;color:#1e1e2d;font-size:13px;">
                                                                {{ \Str::limit($blog->title, 40) }}
                                                            </td>
                                                            <td style="padding:14px 8px;">
                                                                <span
                                                                    style="background:#e3f2fd;color:#0166ba;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                                                                    {{ $blog->category ?? '—' }}
                                                                </span>
                                                            </td>
                                                            <td style="padding:14px 8px;color:#a1a5b7;font-size:12px;">
                                                                {{ $blog->published_at?->format('d M Y') ?? '—' }}
                                                            </td>
                                                            <td style="padding:14px 8px;">
                                                                @if ($blog->is_active)
                                                                    <span
                                                                        style="background:#e8f5e9;color:#2e7d32;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">Active</span>
                                                                @else
                                                                    <span
                                                                        style="background:#f5f5f5;color:#757575;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">Inactive</span>
                                                                @endif

                                                                <a href="{{ url('admin/blogs/' . $blog->id . '/edit') }}"
                                                                    class="btn btn-sm btn-light-primary"
                                                                    style="background:#e9f4ff;color:#757575;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                                                                    Edit
                                                                </a>

                                                            </td>

                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="7" class="text-center py-10"
                                                                style="color:#a1a5b7;">No blog posts yet.</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
(function () {
    const ajaxUrl  = '{{ url("admin/dash/recent-blogs") }}';
    const pills    = document.querySelectorAll('.date-pill');
    const tbody    = document.getElementById('blogs-tbody');
    const label    = document.getElementById('date-label');
    let activeDate = null;

    const defaultStyle = { bg: '#f5f5f5', color: '#7e8299', border: 'transparent', fw: '500' };
    const todayStyle   = { bg: '#e3f2fd', color: '#0166ba', border: '#bbdefb',    fw: '700' };
    const activeStyle  = { bg: '#0166ba', color: '#fff',    border: '#0166ba',    fw: '700' };

    function applyStyle(pill, style) {
        pill.style.background  = style.bg;
        pill.style.color       = style.color;
        pill.style.borderColor = style.border;
        pill.style.fontWeight  = style.fw;
    }

    function renderRows(blogs) {
        if (!blogs.length) {
            tbody.innerHTML = '<tr><td colspan="7" class="text-center py-8" style="color:#a1a5b7;">No posts found for this date.</td></tr>';
            return;
        }
        tbody.innerHTML = blogs.map((b, i) => `
            <tr>
                <td style="padding:14px 24px;color:#a1a5b7;font-size:13px;">${i + 1}</td>
                <td style="padding:14px 8px;">
                    <img src="${b.image_url}" alt="" style="width:50px;height:38px;object-fit:cover;border-radius:8px;">
                </td>
                <td style="padding:14px 8px;font-weight:600;color:#1e1e2d;font-size:13px;">${b.title}</td>
                <td style="padding:14px 8px;">
                    <span style="background:#e3f2fd;color:#0166ba;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">
                        ${b.category ?? '—'}
                    </span>
                </td>
                <td style="padding:14px 8px;color:#a1a5b7;font-size:12px;">${b.published_at ?? '—'}</td>
                <td style="padding:14px 8px;">
                    ${b.is_active
                        ? '<span style="background:#e8f5e9;color:#2e7d32;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">Active</span>'
                        : '<span style="background:#f5f5f5;color:#757575;padding:3px 10px;border-radius:20px;font-size:12px;font-weight:600;">Inactive</span>'
                    }
                </td>
                <td style="padding:14px 8px;">
                    <a href="${b.edit_url}" style="background:#e9f4ff;color:#0166ba;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;text-decoration:none;">
                        Edit
                    </a>
                </td>
            </tr>
        `).join('');
    }

    function fetchBlogs(date) {
        tbody.innerHTML = '<tr><td colspan="7" class="text-center py-8"><span style="color:#a1a5b7;">Loading...</span></td></tr>';
        fetch(`${ajaxUrl}?date=${date}`)
            .then(r => r.json())
            .then(data => renderRows(data));
    }

    pills.forEach(pill => {
        pill.addEventListener('click', function () {
            const ds = this.dataset.date;

            if (activeDate === ds) {
                // deselect
                activeDate = null;
                applyStyle(this, this.classList.contains('is-today') ? todayStyle : defaultStyle);
                label.innerHTML = 'All dates';
                fetchBlogs('');
                return;
            }

            // reset all
            pills.forEach(p => applyStyle(p, p.classList.contains('is-today') ? todayStyle : defaultStyle));

            activeDate = ds;
            applyStyle(this, activeStyle);

            const d = new Date(ds);
            label.innerHTML = d.toLocaleDateString('en-GB', { weekday:'long', day:'2-digit', month:'short', year:'numeric' })
                + ' &mdash; <a href="javascript:void(0)" id="clear-date" style="color:#0166ba;">Clear</a>';

            document.addEventListener('click', function onClear(e) {
                if (e.target.id === 'clear-date') {
                    activeDate = null;
                    pills.forEach(p => applyStyle(p, p.classList.contains('is-today') ? todayStyle : defaultStyle));
                    label.innerHTML = 'All dates';
                    fetchBlogs('');
                    document.removeEventListener('click', onClear);
                }
            });

            fetchBlogs(ds);
        });
    });
})();
</script>
@endsection
