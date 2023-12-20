<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

@include('Frontend.components.templates.header')

<body>

    <!-- Start Header/Navigation -->
    @include('Frontend.components.templates.navbar')
    <!-- End Header/Navigation -->

    @yield('main')

    <!-- Start Footer Section -->
    @include('Frontend.components.templates.footer')
    <!-- End Footer Section -->


    <script src="{{ asset('templates/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('templates/js/custom.js') }}"></script>
</body>

</html>
