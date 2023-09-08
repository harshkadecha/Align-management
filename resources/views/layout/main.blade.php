<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon_io/favicon.ico') }}">
    <link rel=”icon” type=“image/x-icon” href="{{ asset('images/favicon_io/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Align Management LLC.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300;1,400&display=swap"
        rel="stylesheet">
    @include('general.styles')
    @yield('styles')
    {{-- <title>Align Management</title> --}}
    <title>@yield('title') | Align Management</title>
    <meta name="description" content="@yield('description')" />
    @yield('meta')
    <meta name="application-name" content="AlignManagementLLC">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{ asset('images/logo/AM Logo-1.png') }}" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ Request::url() }}" />
    <meta property="twitter:title" content="AlignManagementLLP" />
    <meta property="twitter:description" content="@yield('description')" />
    <meta property="twitter:image" content="{{ asset('images/logo/AM Logo-1.png') }}" />

</head>

<body class="d-flex flex-column min-vh-100">


    <div id="app">
        @yield('content')
    </div>

    @include('general.footer')

    @include('general.scripts')
    @yield('scripts')
</body>

{{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}

</html>
