<!-- ADMIN DASHBOARD -->

<div class="menu-content "><span style="font-weight: bolder" class="menu-section fs-5 fw-bolder ps-1 py-1">
        {{ __('language.appName') }}
    </span></div>
<br>

<li class="menu-item @if (strpos(url()->current(), 'dash')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href'  => '/admin/dash',
        'title' => trans('language.home'),
        'icon'  => 'menu-icon flaticon-layers',
    ])
</li>

<li class="menu-item @if (strpos(url()->current(), 'faqs')) menu-item-active @endif" aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href'  => '/admin/faqs',
        'title' => 'FAQs',
        'icon'  => 'menu-icon flaticon-questions-circular-button',
    ])
</li>
