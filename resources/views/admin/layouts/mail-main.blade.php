<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    @yield('styles')

</head>

<body>    
    
    @include('admin.general.mail-header')

    @yield('content')    
    
    @include('admin.general.mail-footer')
</body>

</html>
