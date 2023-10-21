<!-- resources/views/navbar.blade.php -->

<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center logo-wrap">
                <div id="fh5co-logo"><a href="{{ route('home') }}">Tasty<span>.</span></a></div>
            </div>
            <div class="col-xs-12 text-center menu-1 menu-wrap">
                <ul>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ Request::is('menu') ? 'active' : '' }}"><a href="{{ route('menu') }}">Menu</a></li>
                    <li class="has-dropdown {{ Request::is('gallery') ? 'active' : '' }}">
                        <a href="{{ route('gallery') }}">Gallery</a>
                        <ul class="dropdown">
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Coffees</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('reservation') ? 'active' : '' }}"><a href="{{ route('reservation') }}">Reservation</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
