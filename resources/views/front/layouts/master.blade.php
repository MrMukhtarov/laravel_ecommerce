<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('front.layouts.includes.head');
    <title>@yield('title', 'Default')</title>
</head>

<body>
    <div class="site-wrapper" id="top">
        <x-front-header-component />
        @yield('content')
    </div>



    <x-front-footer-component />
    @include('front.layouts.includes.foot')
</body>

</html>
