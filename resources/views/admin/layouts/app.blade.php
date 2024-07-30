<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        @include('admin.layouts.includes.head');
        <title>@yield('title', 'Dashboard')</title>
    </head>

<body class="sb-nav-fixed">

    <x-admin-header-component />
    @include('admin.layouts.includes.sidebar')
    
    <x-admin-footer-component />
    @include('admin.layouts.includes.foot')
    
</body>

</html>
