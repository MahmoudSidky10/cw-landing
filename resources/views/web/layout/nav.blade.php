<nav
    class="navbar navbar-expand-lg primary-header {{ $navClass ?? 'primary-header--transparent-light-alt primary-header--fixed top-lg-12 primary-header-crossed:top-0' }}">
    <div class="container align-items-lg-center">
        <a class="logo" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo/PNG 1 HQ.png') }}" alt="logo" class="logo__img logo__img--light">
            <img src="{{ asset('assets/img/logo/PNG 1 HQ.png') }}" alt="logo" class="logo__img logo__img--dark">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar0"
                aria-controls="navbar0" aria-expanded="false" aria-label="Toggle navigation">
            <iconify-icon icon="solar:hamburger-menu-line-duotone"></iconify-icon>
        </button>
        <div class="collapse navbar-collapse" id="navbar0">
            <ul class="navbar-nav flex-grow-1 justify-content-center mx-lg-4 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('privacy-policy') }}">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>


        </div>
    </div>
</nav>
