<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Mebelku<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                @if (Route::current()->getName() == 'customer.dashboard')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('customer.dashboard') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'shop')
                    <li><a class="nav-link" href="{{ route('customer.dashboard') }}">Home</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('shop') }}">Beli</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'about')
                    <li><a class="nav-link" href="{{ route('customer.dashboard') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'custom')
                    <li><a class="nav-link" href="{{ route('customer.dashboard') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a> </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'blog')
                    <li><a class="nav-link" href="{{ route('customer.dashboard') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a> </li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                @endif
            </ul>
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <button class="btn btn-primary nav-link"><a href="{{ route('customer.profile') }}"><img src="{{ asset('templates/images/user.svg') }}"></a></button>
                <button class="btn btn-primary nav-link"><a href="{{ route('customer.profile') }}"><img src="{{ asset('templates/images/cart.svg') }}"></a></button>
                <button type="button" class="btn btn-primary nav-link" data-bs-toggle="modal" data-bs-target="#LogoutModal">
                    <img src="{{ asset('templates/images/sign-out.png') }}" width="24"height="23">
                </button>
            </ul>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="LogoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        Anda yakin untuk logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <form action="{{ route('logout') }}" method="post" id=logout>
                            @csrf
                            <button type="button" class="btn btn-danger"
                                onclick="document.getElementById('logout').submit()">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</nav>
