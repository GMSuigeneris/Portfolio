<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">LegacyWisdomLab</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="/home">Home</a></li>
                    <li><a class="nav-link" href="/about">About Me</a></li>
                    <li><a class="nav-link" href="/author">Author</a></li>
                    <li><a class="nav-link" href="/developer">Developer</a></li>
                    <li><a class="nav-link" href="/posts">Blog</a></li>
                </ul>
                   <!--End of Left Side Of Navbar -->
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                   @if (Route::has('login'))
                    @auth
                   
                    @else
                    <li> <a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                     @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>