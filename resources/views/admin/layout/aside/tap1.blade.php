<!-- ADMIN DASHBOARD -->

<div class="menu-content "><span style="font-weight: bolder" class="menu-section fs-5 fw-bolder ps-1 py-1">
        {{ __('language.appName') }}
    </span></div>
<br>

<li class="menu-item @if (strpos(url()->current(), 'dash')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/dash',
        'title' => trans('language.home'),
        'icon' => 'menu-icon flaticon-layers',
    ])
</li>

<hr>
<li class="menu-item @if (strpos(url()->current(), 'blog-categories')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/blog-categories',
        'title' => 'Blog Categories',
        'icon' => 'menu-icon flaticon-list-2',
    ])
</li>

<li class="menu-item @if (strpos(url()->current(), 'blogs') && !strpos(url()->current(), 'blog-categories')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/blogs',
        'title' => 'Blog Posts',
        'icon' => 'menu-icon flaticon-file-1',
    ])
</li>

<hr>

<li class="menu-item @if (strpos(url()->current(), 'faqs')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/faqs',
        'title' => 'FAQs',
        'icon' => 'menu-icon flaticon-questions-circular-button',
    ])
</li>

<hr>

<li class="menu-item @if (strpos(url()->current(), 'contacts')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/contacts',
        'title' =>
            'Contact Messages' .
            (\App\Models\Contact::where('is_read', 0)->count()
                ? ' (' . \App\Models\Contact::where('is_read', 0)->count() . ')'
                : ''),
        'icon' => 'menu-icon flaticon-email',
    ])
</li>
<li class="menu-item @if (strpos(url()->current(), 'social-media')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/social-media',
        'title' => 'Social Media',
        'icon' => 'menu-icon flaticon-share',
    ])
</li>

<li class="menu-item @if (strpos(url()->current(), 'site-settings')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/site-settings',
        'title' => 'Settings',
        'icon' => 'menu-icon flaticon-settings-1',
    ])
</li>
