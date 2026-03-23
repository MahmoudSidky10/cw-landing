<!-- EMPLOYEES DASHBOARD -->
<!-- ADMIN DASHBOARD -->

<div class="menu-content "><span style="font-weight: bolder" class="menu-section fs-5 fw-bolder ps-1 py-1">
        {{ __('language.appName') }}
    </span></div>
<br>

<li class="menu-item menu-item-submenu
 @if (strpos(url()->current(), 'client/home')) menu-item-open @endif

" aria-haspopup="true"
    data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle">
        <span
            class="svg-icon menu-icon"><!--begin::Svg Icon | path:/keen-v2/theme/demo1/dist/assets/media/svg/icons/Home/Home.svg--><svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                        d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                        fill="#000000" />
                </g>
            </svg><!--end::Svg Icon--></span>
        <span class="menu-text">{{ trans('language.home') }}</span><i class="menu-arrow"></i></a>
    <div class="menu-submenu " @if (strpos(url()->current(), 'client/home')) style="display: block;" @endif kt-hidden-height="200">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span
                        class="menu-text">{{ trans('language.home') }}</span></span></li>
            <li class="menu-item @if (strpos(url()->current(), 'client/home')) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf('admin.layout.aside.main-item', [
                    'href' => '/client/home',
                    'title' => trans('language.home'),
                    'icon' => 'menu-icon flaticon-home',
                ])
            </li>
        </ul>
    </div>
</li>
<li class="menu-item menu-item-submenu
 @if (strpos(url()->current(), 'dash')) menu-item-open @endif

" aria-haspopup="true"
    data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle">
        <span
            class="svg-icon menu-icon"><!--begin::Svg Icon | path:/keen-v2/theme/demo1/dist/assets/media/svg/icons/Design/Layers.svg--><svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                    <path
                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                        fill="#000000" fill-rule="nonzero"></path>
                    <path
                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                        fill="#000000" opacity="0.3"></path>
                </g>
            </svg><!--end::Svg Icon--></span>
        <span class="menu-text">{{ trans('بيانات الحساب') }}</span><i class="menu-arrow"></i></a>
    <div class="menu-submenu " style="display: block;" kt-hidden-height="200"><i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span
                        class="menu-text">{{ trans('language.dashboard') }}</span></span></li>
            <li class="menu-item @if (strpos(url()->current(), 'dash')) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf('admin.layout.aside.main-item', [
                    'href' => '/profile',
                    'title' => trans('الملف الشخصي'),
                    'icon' => 'menu-icon flaticon-layers',
                ])
            </li>

            <li class="menu-item @if (strpos(url()->current(), 'children')) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf('admin.layout.aside.main-item', [
                    'href' => route('client.children.index'),
                    'title' => 'بيانات التابعين',
                    'icon' => 'menu-icon flaticon-layers',
                ])
            </li>

            <li class="menu-item @if (strpos(url()->current(), 'bank-info')) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf('admin.layout.aside.main-item', [
                    'href' => route('client.order.bankInfo'),
                    'title' => 'معلومات البنك',
                    'icon' => 'menu-icon flaticon-layers',
                ])
            </li>

            <li class="menu-item @if (strpos(url()->current(), 'attachments')) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf('admin.layout.aside.main-item', [
                    'href' => route('client.order.attachments'),
                    'title' => 'المرفقات',
                    'icon' => 'menu-icon flaticon-layers',
                ])
            </li>



            @if (Auth::user()->hasProfile() && !Auth::user()->hasCurrentApplicationFromType('AQAR_RENT'))
                {{-- Allow all clients to add rent application --}}
                <li class="menu-item @if (strpos(url()->current(), 'applications')) menu-item-active @endif  " aria-haspopup="true"
                    data-menu-toggle="hover">
                    @includeIf('admin.layout.aside.main-item', [
                        'href' => '/applications/rent/create',
                        'title' => trans('أضافه طلب إيجار'),
                        'icon' => 'menu-icon flaticon-layers',
                    ])
                </li>
            @endif

            <li class="menu-item @if (strpos(url()->current(), 'password/change')) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf('admin.layout.aside.main-item', [
                    'href' => route('client.password.change'),
                    'title' => 'تغيير كلمة المرور',
                    'icon' => 'menu-icon flaticon-lock',
                ])
            </li>


        </ul>
    </div>
</li>
