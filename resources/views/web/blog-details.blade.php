<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('web.layout.head')

<body>
@include('web.layout.nav')
<div class="preloader">
    <div class="preloader__content">
        <img src="{{ asset('assets/img/logo-light.png') }}" alt="logo" class="img-fluid preloader__img">
    </div>
</div>
<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Banner -->
        <div class="banner-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-1__content">
                            <div class="row">
                                <div class="col-md-8 col-xl-7">
                                    <nav class="mb-3">
                                        <ol class="breadcrumb breadcrumb-modifier">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('home') }}" class="link fs-14">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <iconify-icon icon="bi:chevron-right"
                                                              class="align-middle fs-14"></iconify-icon>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('blog') }}" class="link fs-14">Blog</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <iconify-icon icon="bi:chevron-right"
                                                              class="align-middle fs-14"></iconify-icon>
                                            </li>
                                            <li class="breadcrumb-item active fs-14">
                                                {{ Str::limit($blog->title, 40) }}</li>
                                        </ol>
                                    </nav>
                                    <ul class="list list-row flex-wrap gap-4 align-items-center mb-4">
                                        <li>
                                            <a href="{{ route('blog') }}"
                                               class="badge bg-light-subtle text-light-emphasis shadow-lg">
                                                    <span
                                                        class="d-inline-block w-2 h-2 rounded-circle bg-secondary-emphasis flex-shrink-0"></span>
                                                {{ $blog->category }}
                                            </a>
                                        </li>
                                        <li>
                                                <span class="badge bg-light-subtle text-light-emphasis shadow-lg">
                                                    <span
                                                        class="d-inline-block w-2 h-2 rounded-circle bg-secondary-emphasis flex-shrink-0"></span>
                                                    {{ $blog->published_at?->format('d M, Y') }}
                                                </span>
                                        </li>
                                    </ul>
                                    <h3>{{ $blog->title }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Details -->
        <div class="section-space-y bg-body-tertiary">
            <div class="container">
                <div class="row g-4">
                    <!-- Content -->
                    <div class="col-lg-7 col-xl-8">
                        <!-- Featured Image -->
                        <div class="mb-8">
                            <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}"
                                 class="img-fluid w-100 rounded" style="max-height:420px;object-fit:cover;">
                        </div>

                        <!-- Body -->
                        <div class="fs-16 lh-lg">
                            {!! $blog->content !!}
                        </div>

                        <!-- Prev / Next -->
                        @if ($prev || $next)
                            <div class="row g-4 mt-8 pt-8 border-top">
                                <div class="col-md-6">
                                    @if ($prev)
                                        <p class="mb-2 fs-14 text-muted">Previous Post</p>
                                        <a href="{{ route('blog.details', $prev->slug) }}"
                                           class="link fs-16 fw-bold text-heading hover:text-primary line-clamp line-clamp--1">
                                            {{ $prev->title }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-6 text-md-end">
                                    @if ($next)
                                        <p class="mb-2 fs-14 text-muted">Next Post</p>
                                        <a href="{{ route('blog.details', $next->slug) }}"
                                           class="link fs-16 fw-bold text-heading hover:text-primary line-clamp line-clamp--1">
                                            {{ $next->title }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Related Posts -->
                        @if ($related->isNotEmpty())
                            <div class="mt-12">
                                <h5 class="mb-6">You May Also Like</h5>
                                <div class="row g-4">
                                    @foreach ($related as $rel)
                                        <div class="col-md-6">
                                            <div class="rounded bg-body p-3">
                                                <a href="{{ route('blog.details', $rel->slug) }}"
                                                   class="link d-block">
                                                    <img src="{{ $rel->image_url }}" alt="image"
                                                         class="img-fluid rounded w-100"
                                                         style="height:160px;object-fit:cover;">
                                                </a>
                                                <div class="pt-4">
                                                    <a href="{{ route('blog') }}"
                                                       class="badge bg-light-subtle text-light-emphasis shadow mb-2">
                                                            <span
                                                                class="d-inline-block w-1 h-1 rounded-circle bg-secondary-emphasis flex-shrink-0"></span>
                                                        {{ $rel->tag }}
                                                    </a>
                                                    <a href="{{ route('blog.details', $rel->slug) }}"
                                                       class="link line-clamp line-clamp--2 d-block mb-2 fs-16 fw-bold text-heading hover:text-primary">
                                                        {{ $rel->title }}
                                                    </a>
                                                    <span
                                                        class="d-block fs-14 text-muted">{{ $rel->published_at?->format('d M Y') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-5 col-xl-4">
                        <div class="bg-body rounded p-4 p-xl-6 p-xxl-8">
                            <ul class="list gap-10">
                                <!-- Recent Posts -->
                                <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span
                                                class="d-inline-block border-bottom border-2x border-primary pb-2">Recent
                                                Post</span>
                                        </span>
                                    <ul class="list gap-8">
                                        @foreach ($recent as $r)
                                            <li>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div
                                                        class="d-grid place-content-center w-18 h-18 flex-shrink-0 rounded-circle overflow-hidden">
                                                        <img src="{{ $r->image_url }}" alt="image"
                                                             class="w-100 h-100 object-fit-cover">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                            <span
                                                                class="d-block fs-12 fw-medium mb-1">{{ $r->published_at?->format('d M, Y') }}</span>
                                                        <a href="{{ route('blog.details', $r->slug) }}"
                                                           class="link line-clamp line-clamp--2 fw-bold text-heading hover:text-primary">
                                                            {{ $r->title }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!-- Tags -->
                                @if ($tags->isNotEmpty())
                                    <li>
                                            <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                                <span
                                                    class="d-inline-block border-bottom border-2x border-primary pb-2">Tags</span>
                                            </span>
                                        <ul class="list list-row flex-wrap gap-3 align-items-center">
                                            @foreach ($tags as $tag)
                                                <li>
                                                    <a href="{{ route('blog') }}"
                                                       class="btn btn-sm bg-body-tertiary hover:bg-primary hover:text-light">{{ $tag }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            </ul>
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
