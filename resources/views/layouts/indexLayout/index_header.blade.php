

<nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button sticky-top" style="height:80px;background-color:#37434d;color:#ffffff;">
    <div class="container-fluid"><a class="navbar-brand" href="{{'/'}}"><i class="fa fa-globe"></i>&nbsp;Nature.com</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
                class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav ml-auto">

                @guest
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/'}}"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/about'}}">&nbsp;About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/fruits'}}">&nbsp;Fruits</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/vegetables'}}">&nbsp;Vegetables</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/contact-us'}}">&nbsp;Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link " style="color:#ffffff;" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" style="color:#ffffff;" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    <div class="topnav">
                        <div class="search-container">
                            <form action="">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                @else
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if(Auth::user()->user_type=='admin')
                            <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/'}}"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{ route('category.list') }}">Categories</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{ route('product.list') }}">Products</a></li>
                        @endif
                        @if(Auth::user()->user_type=='customer')
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/'}}"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/about'}}">&nbsp;About</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/fruits'}}">&nbsp;Fruits</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/vegetables'}}">&nbsp;Vegetables</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/contact-us'}}">&nbsp;Contact</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color:#ffffff;" href="{{'/cart'}}">&nbsp;Cart</a></li>
                        @endif
                    <a class="nav-link active" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="topnav">
                        <div class="search-container">
                            <form action="">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                @endguest


            </ul>
        </div>
    </div>
</nav>
