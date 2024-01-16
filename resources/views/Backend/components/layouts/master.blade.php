<!DOCTYPE html>
<html lang="en">
@include('Backend.components.templates.header')

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('Backend.components.templates.navbar')

        @yield('content')

        @include('Backend.components.templates.footer')
        <div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure about to end this session?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('logout') }}" method="post" id=logout>
                            @csrf
                            <button type="button" class="btn btn-danger"
                                onclick="document.getElementById('logout').submit()">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
</body>

</html>
