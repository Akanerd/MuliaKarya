<!DOCTYPE html>
<html lang="en">
@include('auth.components.templates.header')

<body>
    @yield('main')
    @include('auth.components.templates.footer')
</body>
@include('sweetalert::alert')
</html>
