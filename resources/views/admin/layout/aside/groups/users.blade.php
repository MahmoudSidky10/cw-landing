@php
    $allOrdersCount = \App\Models\User::where('user_type_id', 2)->count();
@endphp

<li class="menu-item @if (strpos(url()->current(), 'complete-profile/create')) menu-item-active @endif  " aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/clients/complete-profile/create',
        'title' => trans('إضافة مستفيد  (ملف كامل)'),
        'icon' => 'menu-icon flaticon-add',
    ])
</li>
<li class="menu-item @if (strpos(url()->current(), 'users') && !strpos(url()->current(), 'complete-profile')) menu-item-active @endif  " aria-haspopup="true"
    data-menu-toggle="hover">
    @includeIf('admin.layout.aside.main-item', [
        'href' => '/admin/users',
        'title' => trans('language.users') . " ( $allOrdersCount )",
        'icon' => 'menu-icon flaticon-layers',
    ])
</li>
