<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.meta')
</head>

<body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    @include('inc.script')
</body>

</html>