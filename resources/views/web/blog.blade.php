<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" data-theme="home-3">
@include('web.layout.head')
<body class="bg-black">
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
                                <div class="col-md-8 col-xl-6">
                                    <nav class="mb-3">
                                        <ol class="breadcrumb breadcrumb-modifier">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('home') }}" class="link fs-14">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <iconify-icon icon="bi:chevron-right"
                                                              class="align-middle fs-14"></iconify-icon>
                                            </li>
                                            <li class="breadcrumb-item active fs-14">Blog</li>
                                        </ol>
                                    </nav>
                                    <h3>Blog</h3>
                                    <p class="mb-0 max-text-12">Insights, updates, and deep dives from the Cyberwatch360
                                        team.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <div class="section-space-y bg-body-tertiary">
            <div class="container">
                <div class="row g-4">
                    <!-- Posts -->
                    <div class="col-md-7 col-xl-8">
                        @if($blogs->isNotEmpty())
                            <ul class="list gap-15">
                                @foreach($blogs as $post)
                                    <li>
                                        <div class="rounded p-4 p-xl-6 p-xxl-8 bg-body">
                                            <a href="{{ route('blog.details', $post->slug) }}" class="link d-block">
                                                <img src="{{ $post->image_url }}" alt="{{ $post->title }}"
                                                     class="img-fluid w-100 rounded"
                                                     style="height:250px;object-fit:cover;">
                                            </a>
                                            <div class="pt-6">
                                                <ul class="list list-row flex-wrap gap-4 gap-xl-6 align-items-center mb-4">
                                                    <li>
                                                        <a href="{{ route('blog') }}"
                                                           class="badge bg-light-subtle text-light-emphasis shadow-lg">
                                                            <span
                                                                class="d-inline-block w-2 h-2 rounded-circle bg-secondary-emphasis flex-shrink-0"></span>
                                                            {{ $post->category }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('blog') }}"
                                                           class="badge bg-light-subtle text-light-emphasis shadow-lg">
                                                            <span
                                                                class="d-inline-block w-2 h-2 rounded-circle bg-secondary-emphasis flex-shrink-0"></span>
                                                            {{ $post->published_at?->format('d M, Y') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                                <h5>
                                                    <a href="{{ route('blog.details', $post->slug) }}"
                                                       class="link d-inline-block text-heading hover:text-primary">
                                                        {{ $post->title }}
                                                    </a>
                                                </h5>
                                                <p class="mb-6">{{ $post->excerpt }}</p>
                                                <a href="{{ route('blog.details', $post->slug) }}"
                                                   class="btn btn-primary-subtle fw-medium align-items-center fs-14">
                                                    <span class="d-inline-block flex-grow-1">Explore More</span>
                                                    <iconify-icon icon="solar:arrow-right-broken"
                                                                  class="align-middle flex-shrink-0"></iconify-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="mt-8 d-flex justify-content-center">
                                {{ $blogs->links() }}
                            </div>
                        @else
                            <div class="text-center py-20">
                                @if(!empty($search))
                                    <p class="text-muted fs-18">No results for "<strong>{{ $search }}</strong>".</p>
                                    <a href="{{ route('blog') }}" class="btn btn-primary-subtle mt-3">Clear search</a>
                                @else
                                    <p class="text-muted fs-18">No blog posts yet. Check back soon.</p>
                                @endif
                            </div>
                        @endif
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-5 col-xl-4">
                        <div class="bg-body rounded p-4 p-xl-6 p-xxl-8">
                            <ul class="list gap-10">
                                <!-- Search -->
                                <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2">Search Post</span>
                                        </span>
                                    <form method="GET" action="{{ route('blog') }}">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                   placeholder="Search posts..."
                                                   value="{{ $search ?? '' }}">
                                            <button type="submit" class="btn btn-primary px-4">
                                                <iconify-icon icon="bi:search"></iconify-icon>
                                            </button>
                                        </div>
                                        @if(!empty($search))
                                            <div class="mt-2">
                                                <a href="{{ route('blog') }}" class="fs-12 text-muted">
                                                    <iconify-icon icon="bi:x-circle"></iconify-icon>
                                                    Clear search
                                                </a>
                                            </div>
                                        @endif
                                    </form>
                                </li>
                                <!-- Categories -->
                                @if($categories->isNotEmpty())
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2">Categories</span>
                                        </span>
                                        <ul class="list gap-0">
                                            @foreach($categories as $cat)
                                                <li class="border-bottom py-3">
                                                    <a href="{{ $category === $cat->category ? route('blog') : route('blog', ['category' => $cat->category]) }}"
                                                       class="d-flex justify-content-between align-items-center link hover:text-primary {{ $category === $cat->category ? 'text-primary fw-bold' : 'text-heading' }}">
                                                        <span>{{ $cat->category }}</span>
                                                        <span
                                                            class="d-inline-flex align-items-center justify-content-center rounded-circle fw-medium fs-12 {{ $category === $cat->category ? 'bg-primary text-white' : 'bg-body-tertiary' }}"
                                                            style="width:32px;height:32px;">
                                                        {{ str_pad($cat->posts_count, 2, '0', STR_PAD_LEFT) }}
                                                    </span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                                <!-- Recent Posts -->
                                <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2">Recent Post</span>
                                        </span>
                                    <ul class="list gap-8">
                                        @foreach($recent as $r)
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
                                @if($tags->isNotEmpty())
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2">Tags</span>
                                        </span>
                                        <ul class="list list-row flex-wrap gap-3 align-items-center">
                                            @foreach($tags as $tag)
                                                <li>
                                                    <a href="{{ route('blog', ['tag' => $tag]) }}"
                                                       class="btn btn-sm {{ request('tag') === $tag ? 'btn-primary text-white' : 'bg-body-tertiary hover:bg-primary hover:text-light' }}">
                                                        {{ $tag }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                                <!-- Archive -->
                                @if($archive->isNotEmpty())
                                    <li>
                                        <span class="d-block fs-20 fw-bold text-heading border-bottom mb-6">
                                            <span class="d-inline-block border-bottom border-2x border-primary pb-2">Archive</span>
                                        </span>
                                        <ul class="list gap-0">
                                            @foreach($archive as $month)
                                                <li class="border-bottom py-3">
                                                    <a href="{{ route('blog', ['month' => $month->month_key]) }}"
                                                       class="d-flex justify-content-between align-items-center link hover:text-primary {{ request('month') === $month->month_key ? 'text-primary fw-bold' : 'text-heading' }}">
                                                        <span>{{ $month->month_label }}</span>
                                                        <span
                                                            class="d-inline-flex align-items-center justify-content-center rounded-circle fw-medium fs-12 {{ request('month') === $month->month_key ? 'bg-primary text-white' : 'bg-body-tertiary' }}"
                                                            style="width:32px;height:32px;">
                                                        {{ str_pad($month->posts_count, 2, '0', STR_PAD_LEFT) }}
                                                    </span>
                                                    </a>
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
