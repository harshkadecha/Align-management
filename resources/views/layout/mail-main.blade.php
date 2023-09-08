<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    @yield('styles')

</head>

<body>

    @include('general.email-header')

    @yield('content')

    @include('general.email-footer')
</body>

</html>
