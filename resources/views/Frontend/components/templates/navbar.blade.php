<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Mebelku<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                @if (Route::current()->getName() == 'index')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'shop')
                    <li><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('shop') }}">Beli</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'about')
                    <li><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'custom')
                    <li><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a> </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                @endif
                @if (Route::current()->getName() == 'blog')
                    <li><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('shop') }}">Beli</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a> </li>
                    <li><a class="nav-link" href="{{ route('custom') }}">Kustomisasi Mebel</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                @endif
            </ul>
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{ asset('templates/images/user.svg') }}"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="{{ asset('templates/images/cart.svg') }}"></a></li>
                <button type="submit" class="btn btn-primary transparent-bg">Logout</button>
            </ul>
        </div>
    </div>

</nav>
