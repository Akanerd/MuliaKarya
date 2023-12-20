<!DOCTYPE html>
<html lang="en">
@include('Backend.components.templates.header')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <ul class="navbar-nav ml-auto navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('admin/dist/assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            @include('Backend.components.templates.navbar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                   @yield('main')
                </section>
            </div>
            @include('Backend.components.templates.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('admin/dist/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/dist/assets/js/page/index-0.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('admin/dist/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/dist/assets/js/custom.js') }}"></script>
</body>

</html>
