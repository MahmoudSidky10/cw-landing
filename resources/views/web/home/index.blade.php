<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-theme="home-3">

@include('web.layout.head')

<body class="bg-black">
    @include('web.layout.nav')
    @include('web.home.partials.preloader')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            @include('web.home.partials.hero')
            @include('web.home.partials.features-1')
            @include('web.home.partials.features-2')
            @include('web.home.partials.integrations')
            @include('web.home.partials.pricing-testimonials')
            @include('web.home.partials.faq')
            @include('web.home.partials.cta')
            @include('web.layout.footer')
        </div>
    </div>
    @include('web.layout.scripts')
</body>

</html>
